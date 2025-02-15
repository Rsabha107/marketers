<?php

namespace App\Http\Controllers\Procurement\Admin;

use App\Http\Controllers\Controller;
use App\Models\ItemCategory;
use App\Models\ItemSubcategory;
use App\Models\Procurement\ItemMater;
use App\Models\Procurement\ItemUnitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ItemMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ItemMater::all();
        $unit_types = ItemUnitType::all();
        $categories = ItemCategory::all();
        $sub_categories = ItemSubcategory::all();

        return view('procurement.admin.items.list', [
            'items' => $items,
            'unit_types' => $unit_types,
            'categories' => $categories,
            'sub_categories' => $sub_categories,
        ]);
    } // End index

    public function list()
    {
        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "id";
        $order = (request('order')) ? request('order') : "asc";
        $op = ItemMater::orderBy($sort, $order);

        // dd($op);
        if ($search) {
            $op = $op->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        }
        $total = $op->count();

        $op = $op->paginate(request("limit"))->through(function ($op) {

            $actions =
                '<div class="font-sans-serif btn-reveal-trigger position-static">' .
                '<a href="javascript:void(0)" class="btn btn-sm" id="edit_item-master_offcanv"  data-id=' .
                $op->id .
                ' data-table="item_master_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Update">' .
                '<i class="fa-solid fa-pen-to-square text-primary"></i></a>' .
                '<a href="javascript:void(0)" class="btn btn-sm" data-table="item_master_table" data-id="' .
                $op->id .
                '" id="delete_item_master" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete">' .
                '<i class="bx bx-trash text-danger"></i></a></div></div>';

            return [
                'id' => $op->id,
                'id1' => '<div class="ms-3">' . $op->id . '</div>',
                'item_name' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->item_name . '</div>',
                'item_price' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->item_price . '</div>',
                'item_on_hand' => '<div class="align-middle white-space-wrap unit_type_idfw-bold fs-9 ms-3">' . $op->item_on_hand . '</div>',
                'unit_type_id' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->unit_type?->title . '</div>',
                'active_flag' => '<span class="badge badge-phoenix badge-phoenix-' . $op->active_status->color . '">' . $op->active_status->name . '</span>',
                'actions' => $actions,
                'created_at' => format_date($op->created_at,  'H:i:s'),
                'updated_at' => format_date($op->updated_at, 'H:i:s'),
            ];
        });

        return response()->json([
            "rows" => $op->items(),
            "total" => $total,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('createEvent');
        $user_id = Auth::user()->id;
        $op = new ItemMater();

        $rules = [
            'name' => ['required'],
            'item_price' => ['required'],
            'item_cost' => ['required'],
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

        $op->item_name = $request->item_name;
        $op->item_price = $request->item_price;
        $op->item_on_hand = $request->item_on_hand;
        $op->unit_type_id = intval($request->unit_type_id);
        $op->SKU = $request->SKU;
        $op->item_cost = $request->item_cost;
        $op->item_category_id = intval($request->item_category_id);
        $op->item_subcategory_id = intval($request->item_subcategory_id);
        $op->description = $request->description;
        $op->item_type_id = intval($request->item_type_id);
        $op->active_flag_id = 1;

        $op->created_by = $user_id;
        $op->updated_by = $user_id;

        $op->save();

        $notification = array(
            'message'       => 'Event created successfully',
            'alert-type'    => 'success'
        );

        $error = false;
        $message = 'Product ' . $op->name . ' successfully created';
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function get($id)
    {
        $item = ItemMater::findOrFail($id);
        $categories = ItemCategory::all();
        $sub_categories = ItemSubcategory::all();
        $unit_types = ItemUnitType::all();

        $view = view('/procurement/admin/items/mv/edit', [
            'item_master' => $item,
            'categories' => $categories,
            'subcategories' => $sub_categories,
            'unittypes' => $unit_types,
        ])->render();

        return response()->json(['view' => $view]);
    }  // End function get

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd('createEvent');
        $user_id = Auth::user()->id;
        $op = ItemMater::find($request->id);

        $rules = [
            'name' => ['required'],
            'item_price' => ['required'],
            'item_cost' => ['required'],
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

        $op->item_name = $request->item_name;
        $op->item_price = $request->item_price;
        $op->item_on_hand = $request->item_on_hand;
        $op->unit_type_id = intval($request->unit_type_id);
        $op->SKU = $request->SKU;
        $op->item_cost = $request->item_cost;
        $op->item_category_id = intval($request->item_category_id);
        $op->item_subcategory_id = intval($request->item_subcategory_id);
        $op->description = $request->description;
        $op->item_type_id = intval($request->item_type_id);
        $op->active_flag_id = 1;

        $op->created_by = $user_id;
        $op->updated_by = $user_id;

        $op->save();

        $notification = array(
            'message'       => 'Event created successfully',
            'alert-type'    => 'success'
        );

        $error = false;
        $message = 'Product ' . $op->name . ' updated created';
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
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ItemMater::where('id', '=', $id)->delete();
        return response()->json([
            'error' => false,
            'message' => 'Product deleted successfully',
        ]);
    } // destroy
}
