<?php

namespace App\Http\Controllers\hr\Setting;

use App\Http\Controllers\Controller;

use App\Models\EmployeeJobLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class JobLevelController extends Controller
{
    //
    public function index()
    {
        return view('hr.admin.setting.joblevel.list');
    }

    public function get($id)
    {
        $op = EmployeeJobLevel::findOrFail($id);
        return response()->json(['op' => $op]);
    }

    public function update(Request $request)
    {

        $rules = [
            'id' => ['required'],
            'title' => ['required'],
            'active_flag' => ['required']
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Log::info($validator->errors());
            $error = true;
            // $message = 'contract type not create.';
            $message = implode($validator->errors()->all());
        } else {
            $user_id = Auth::user()->id;
            $op = EmployeeJobLevel::findOrFail($request->id);

            $error = false;
            $message = 'contract type created.';

            $op->title = $request->title;
            $op->active_flag = $request->active_flag;
            $op->created_by = $user_id;
            $op->updated_by = $user_id;
            $op->save();
        }

        return response()->json(['error' => $error, 'message' => $message]);
    }

    public function store(Request $request)
    {
        // dd('mainEvent');
        $user_id = Auth::user()->id;
        $op = new EmployeeJobLevel();

        $rules = [
            'title' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        // dd($validator);

        if ($validator->fails()) {
            // Log::info($validator->errors());
            $error = true;
            // $message = 'Job Level could not be created';
            $message = implode($validator->errors()->all());
        } else {

            $error = false;
            $message = 'Job Level created.';

            $op->title = $request->title;
            $op->active_flag = "1";
            $op->created_by = $user_id;
            $op->updated_by = $user_id;
            $op->save();
        }

        return response()->json(['error' => $error, 'message' => $message]);
    } // store


    public function list()
    {
        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "id";
        $order = (request('order')) ? request('order') : "DESC";
        $op = EmployeeJobLevel::orderBy($sort, $order);

        // dd($op);
        if ($search) {
            $op = $op->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        }
        $total = $op->count();

        $op = $op->paginate(request("limit"))->through(function ($op) {

            $badge_color = 'success';
            $active_flag = 'Active';

            if ($op->active_flag === 1) {
                $badge_color = 'success';
                $active_flag = 'Active';
            } else {
                $badge_color = 'warning';
                $active_flag = 'InActive';
            }
            return [
                'id' => $op->id,
                'id1' => '<div class="ms-3">' . $op->id . '</div>',
                'title' => '<div class="align-middle white-space-wrap fw-bold fs-8 ms-3">' . $op->title . '</div>',
                'active_flag' => '<span class="badge badge-phoenix badge-phoenix-' . $badge_color . '">' . $active_flag . '</span>',
                'created_at' => format_date($op->created_at,  'H:i:s'),
                'updated_at' => format_date($op->updated_at, 'H:i:s'),
            ];
        });

        return response()->json([
            "rows" => $op->items(),
            "total" => $total,
        ]);
    }

    public function delete($id)
    {
        EmployeeJobLevel::where('id', '=', $id)->delete();

        $notification = array(
            'message'       => 'Job Level deleted successfully',
            'alert-type'    => 'success'
        );

        // dd($taskId);

        return response()->json([
            'error' => false,
            'message' => 'Job Level deleted successfully',
        ]);

        // Toastr::success('Has been add successfully :)','Success');
        // return Redirect::route('tracki.task.list', $task->event_id)->with($notification);
        // return redirect()->back()->with($notification);
    } // taskFileDelete
}
