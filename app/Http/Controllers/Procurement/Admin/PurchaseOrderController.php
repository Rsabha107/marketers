<?php

namespace App\Http\Controllers\Procurement\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings\Company;
use App\Models\GeneralSettings\CompanyAddress;
use App\Models\GeneralSettings\Currency;
use App\Models\Procurement\ItemMater;
use App\Models\Procurement\PurchaseOrderHeader;
use App\Models\Procurement\PurchaseOrderLine;
use App\Models\Procurement\Vendor;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Facades\Invoice;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        $purchases = PurchaseOrderHeader::all();
        $vendors = Vendor::all();
        $projects = Project::all();
        $items = ItemMater::all();
        $currency = Currency::all();
        $addresses = CompanyAddress::all();

        return view('procurement.admin.purchase.list', compact(
            'purchases',
            'vendors',
            'projects',
            'items',
            'currency',
            'addresses',
        ));
    }  // End function index

    public function list($id = null)
    {
        $user = User::findOrFail(auth()->user()->id);
        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "id";
        $order = (request('order')) ? request('order') : "DESC";


        // dd(request()->all());

        $ops = PurchaseOrderHeader::orderBy($sort, $order);

        Log::info(request()->all());

        if ($search) {
            $ops = $ops->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        }

        $total = $ops->count();

        $ops = $ops->paginate(request("limit"))->through(function ($op) use ($user) {

            /* returns null if it does not exist */
            // $salary = EmployeeSalary::when($op->id, function ($query, $sal) {
            //     return $query->where('employee_salary.employee_id', $sal);
            // })->first();

            // dd($salary);

            $duplicate_project = route('projects.admin.project.duplicate', $op->id);

            $div_action = '<div class="font-sans-serif btn-reveal-trigger position-static">';
            $profile_action =
                '<a href="' . route("procurement.admin.purchase.order", $op->id) . '" class="btn-table btn-sm"  data-id="' .
                $op->id .
                '" data-table="purchase_table" data-bs-toggle="tooltip" data-bs-placement="right" title="View Purchase Order">' .
                '<i class="fa-solid far fa-lightbulb text-warning"></i></a>';
            $update_action =
                '<a href="javascript:void(0)" class="btn btn-sm" id="edit_purchase_offcanv" data-id=' . $op->id .
                ' data-table="purchase_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Update">' .
                '<i class="fa-solid fa-pen-to-square text-primary"></i></a>';

            $delete_action =
                '<a href="javascript:void(0)" class="btn btn-sm" data-table="purchase_table" data-id="' .
                $op->id .
                '" id="delete_purchase" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete">' .
                '<i class="fa-solid fa-trash text-danger"></i></a></div></div>';

            $actions = $div_action;

            ($user->can('purchase.edit')) ? $actions = $actions . $profile_action . $update_action . $delete_action : $actions = $actions;


            return [
                'id1' => '<div class="ms-3">' . $op->id . '</div>',
                'id' => $op->id,
                'po_number' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->po_number . '</a></div>',
                'vendor_id' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->vendor?->name . '</div>',
                'order_date' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->order_date . '</div>',
                'expected_delivery_date' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->expected_delivery_date . '</div>',
                'total_amount' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->vendor_id . '</div>',
                'status' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->delivery_status?->title . '</div>',
                'actions' => $actions,
                'created_at' => format_date($op->created_at,  'H:i:s'),
                'updated_at' => format_date($op->updated_at, 'H:i:s'),
            ];
        });

        return response()->json([
            "rows" => $ops->items(),
            "total" => $total,
        ]);
    }

    public function get($id)
    {
        $purchase = PurchaseOrderHeader::findOrFail($id);
        $view = view('/procurement/admin/purcahse/mv/edit', [
            'purchase' => $purchase,
        ])->render();

        return response()->json(['view' => $view]);
    }  // End function get

    public function getItem($id)
    {
        $item = ItemMater::findOrFail($id);

        return response()->json([
            'itemData' => $item,
        ]);
    }  // End function getItem

    // show the purchase order 
    public function viewPo($id)
    {
        $header = PurchaseOrderHeader::find($id);
        $lines = PurchaseOrderLine::where('po_header_id', $header->id)->get();
        $company = Company::all()->first();

        return view('procurement.admin.purchase.purchase-order', [
            'header' => $header,
            'lines' => $lines,
            'company' => $company,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('$request');
        Log::info($request->all());
        $user_id = Auth::user()->id;
        $head = new PurchaseOrderHeader();

        $rules = [
            'po_number' => ['required'],
            // 'contact_name' => ['required'],
            // 'email' => ['required', 'unique:purchase_order_headers'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $error = true;
            $message = implode($validator->errors()->all('<div>:message</div>'));  // use this for json/jquery
            // $message = $validator->messages();
            // $notification = array(
            //     'message'       => $message,
            //     'alert-type'    => 'error'
            // );
            // // dd(Session::has('message'));
            // return redirect()->back()->withErrors($message)->withInput();
        }

        $head->po_number = $request->po_number;
        $head->vendor_id = intval($request->vendor_id);
        if ($request->order_date) {
            $head->order_date = Carbon::createFromFormat('d/m/Y', $request->order_date);
        }
        if ($request->expected_delivery_date) {
            $head->expected_delivery_date = Carbon::createFromFormat('d/m/Y', $request->expected_delivery_date);
        }
        $head->deliver_to_address_id = intval($request->deliver_to_address_id);
        $head->requester_id = intval($request->requester_id);
        $head->description = $request->h_description;
        $head->note_to_vendor = $request->note_to_vendor;
        $head->delivery_status_id = intval($request->delivery_status_id);
        $head->project_id = intval($request->project_id);
        $head->currency_id = intval($request->currency_id);

        $head->created_by = $user_id;
        $head->updated_by = $user_id;

        $saved = $head->save();
        if ($saved) {
            $header_id = $head->id;
            foreach ($request->item_id as $key => $item) {
                // $line = new PurchaseOrderLine();

                // $line->po_header_id = $header_id;
                // $line->item_id = intval($request->item_id[$key]);
                // $line->quantity = $request->quantity[$key];
                // $line->unit_price = $request->unit_price[$key];
                // $line->line_description = $request->line_description[$key];

                // $line->created_by = $user_id;
                // $line->updated_by = $user_id;

                $data = new PurchaseOrderLine([
                    'po_header_id' => $header_id,
                    'item_id' => $request->item_id[$key],
                    'quantity' => $request->quantity[$key],
                    'unit_price' => $request->unit_price[$key],
                    'line_description' => $request->line_description[$key],
                ]);

                // $data = array(
                //     'po_header_id' => $header_id,
                //     'item_id' => $request->item_id[$key],
                //     'quantity' => $request->quantity[$key],
                //     'unit_price' => $request->unit_price[$key],
                //     'line_description' => $request->line_description[$key],
                // );

                Log::info($data);

                $data->save();
            }
        }
        // check saved.  true the insert the lines

        $notification = array(
            'message'       => 'Purchase Order created successfully',
            'alert-type'    => 'success'
        );

        $error = false;
        $message = 'Purchase Order ' . $head->po_number . ' successfully created';
        // return response()->json([
        //     'error' => false,
        //     'message' => 'Project ' . $project->name . ' created successfully ',
        // ]);
        // Toastr::success('Has been add successfully :)','Success');
        return response()->json([
            'error' => $error,
            'message' => $message,
        ]);

        // return redirect()->route('projects.admin.project')->with($notification);
    } // store


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd('createEvent');
        $user_id = Auth::user()->id;
        $purchase = PurchaseOrderHeader::find($request->id);

        $rules = [
            'name' => ['required'],
            'contact_name' => ['required'],
            'email' => 'required|unique:purchase_order_headers,email,' . $purchase->id,
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // Log::info($validator->errors());
            $error = true;
            // $message = 'Employee not create.' . $op->id;
            $message = implode($validator->errors()->all('<div>:message</div>'));
        } else {
            $purchase->name = $request->name;
            $purchase->contact_name = $request->contact_name;
            $purchase->email = $request->email;
            $purchase->phone_number = $request->phone_number;
            $purchase->website = $request->website;
            $purchase->billing_address = $request->billing_address;
            $purchase->shipping_address = $request->shipping_address;
            $purchase->opening_balance = intval($request->opening_balance);
            $purchase->currency = $request->currency;

            $purchase->updated_by = $user_id;

            $purchase->save();

            $notification = array(
                'message'       => 'Event updated successfully',
                'alert-type'    => 'success'
            );

            $error = false;
            $message = 'Purchase Order ' . $purchase->name . ' successfully updated';
        }
        return response()->json([
            'error' => $error,
            'message' => $message,
        ]);

        // // Toastr::success('Has been add successfully :)','Success');
        // if ($request->source == 'plist') {
        //     return Redirect::route('tracki.task.list', $request->id)->with($notification);
        // } else {
        //     return Redirect::route('tracki.project.show.card')->with($notification);
        // }
    } // update

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        PurchaseOrderHeader::where('id', '=', $id)->delete();
        return response()->json([
            'error' => false,
            'message' => 'Purchase Order deleted successfully',
        ]); // destroy
    } // destroy


    // generate a PO
    public function purchasePDF($id)
    {
        $po = PurchaseOrderHeader::findOrFail($id);
        $company = Company::all()->first();

        // $customer = new Buyer([
        //     'name'          => 'John Doe',
        //     'custom_fields' => [
        //         'email' => 'test@example.com',
        //     ],
        // ]);

        $customer = new Buyer([]);

        $client = new Party([
            'name'          => $po->vendor->name,
            'phone'         => $po->vendor->phone_number,
            'address'       => $po->vendor->billing_address,
            // 'custom_fields' => [
            //     'note'        => 'IDDQD',
            //     'business id' => '365#GG',
            // ],
        ]);

        $bill_to = new Party([
            'name'          => $company->name,
            // 'phone'         => $timesheet->employees->phone_number,
            'address'       => '36th Floor, Al Bidda Tower',
            'address2'       => 'Corniche Street, PO Box 5333',
            // 'custom_fields' => [
            //     'note'        => 'IDDQD',
            //     'business id' => '365#GG',
            // ],
        ]);

        // $lines = array();
        // $note = InvoiceNote::first();
        foreach ($po->lines as $key => $line) {
            // dd($line);
            $items = 
                InvoiceItem::make($line->line_description)
                    ->pricePerUnit($line->unit_price)
                    ->quantity($line->quantity)
                    ->subTotalPrice($line->line_total)
                // ->discount(3)
                // ->days_worked($line->days_worked)
                // ->leave_days_taken($line->leave_taken)
                // ->unpaid_leaves($line->unpaid_leave_taken)
                // ->total_days_eligible($line->total_days_eligible_for_payment)
                // ->daily_rate($line->daily_rate)
                // ->salary($line->salary)
                // ->payment($line->total_payment),

            ;
        }


        $invoice = Invoice::make()->template('po')
            ->buyer($bill_to)
            ->seller($client)
            ->status('approved')
            ->currencyCode('QAR')
            ->currencySymbol('')
            ->notes($po->note_to_vendor)
            // ->notes2($timesheet->note_2)
            ->approvedBy('myself')
            ->totalAmount($po->lines->sum('line_total'))
            // ->series(str_pad((string) $timesheet->month_selected_id, 2, 0, STR_PAD_LEFT) . '' . $timesheet->year_selected)
            ->dateFormat('d/m/Y')
            // ->sequence($timesheet->employees->id)
            ->currencyThousandsSeparator(',')
            ->filename($po->po_number)
            // ->discountByPercent(10)
            // ->taxRate(15)
            // ->shipping(1.99)
            ->addItem($items);

        return $invoice->stream();
        // return $invoice->stream();
    }
}
