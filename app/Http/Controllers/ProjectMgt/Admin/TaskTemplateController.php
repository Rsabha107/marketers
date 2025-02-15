<?php

namespace App\Http\Controllers\ProjectMgt\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\FunctionalArea;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Status;
use App\Models\Tag;
use App\Models\TaskTemplate;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        $users = User::all();
        $employees = Employee::all();
        $statuses = Status::all();
        $departments = Department::all();
        $functional_areas = FunctionalArea::all();
        $event_venue = Venue::all();
        $tags = Tag::all();
        $project_type = ProjectType::all();

        return view('projects.admin.task.template.list', [
            'projects' => $projects,
            'users' => $users,
            'statuses' => $statuses,
            'departments' => $departments,
            // 'eventData' => $eventData,
            'employees' => $employees,
            'functional_areas' => $functional_areas,
            'event_venue' => $event_venue,
            'tags' => $tags,
            'project_type' => $project_type,
        ]);
    } // End index

    public function list()
    {
        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "task_line_order";
        $order = (request('order')) ? request('order') : "asc";
        $op = TaskTemplate::orderBy($sort, $order);

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
            '<a href="javascript:void(0)" class="btn btn-sm" id="edit_task_template"  data-id=' .
            $op->id .
            ' data-table="task_template_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Update">' .
            '<i class="fa-solid fa-pen-to-square text-primary"></i></a>' .
            '<a href="javascript:void(0)" class="btn btn-sm" data-table="task_template_table" data-id="' .
            $op->id .
            '" id="delete_task_template" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete">' .
            '<i class="bx bx-trash text-danger"></i></a></div></div>';

            return [
                'id' => $op->id,
                'id1' => '<div class="ms-3">' . $op->id . '</div>',
                'task_line_name' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->task_line_name . '</div>',
                'project_type_id' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->project_type->name . '</div>',
                'task_line_order' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->task_line_order . '</div>',
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
        {
            // dd('mainEvent');
            $op = new TaskTemplate();
    
            $rules = [
                'task_line_name' => 'required',
                'task_line_order' => 'required',
                'project_type_id' => 'required',
            ];
    
            $validator = Validator::make($request->all(), $rules);
    
            // dd($validator);
    
            if ($validator->fails()) {
                // Log::info($validator->errors());
                $error = true;
                // $message = 'Element could not be created';
                $message = implode($validator->errors()->all());
            } else {
    
                $error = false;
                $message = 'Task Template created successfully.';
    
                $op->task_line_name = $request->task_line_name;
                $op->task_line_order = $request->task_line_order;
                $op->project_type_id = $request->project_type_id;
                $op->created_by = $request->user()->id;
                $op->updated_by = $request->user()->id;
                $op->active_flag = $request->active_flag;
                $op->save();
            }
    
            return response()->json(['error' => $error, 'message' => $message]);
        }
    }

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
    public function edit(string $id)
    {
        $task_template = TaskTemplate::findOrFail($id);
        return response()->json(['task_template' => $task_template]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'task_line_name' => 'required',
            'task_line_order' => 'required',
            'project_type_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $error = true;
            $message = implode($validator->errors()->all());
        } else {
            $op = TaskTemplate::findOrFail($request->id);

            $error = false;
            $message = 'Task Template updated successfully. '.$request->name;

            $op->task_line_name = $request->task_line_name;
            $op->task_line_order = $request->task_line_order;
            $op->project_type_id = $request->project_type_id;
            $op->updated_by = $request->user()->id;
            $op->active_flag = $request->active_flag;
            $op->save();
        }

        return response()->json(['error' => $error, 'message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TaskTemplate::where('id', '=', $id)->delete();

        return response()->json([
            'error' => false,
            'message' => 'Task Template deleted successfully',
        ]);
    }
}
