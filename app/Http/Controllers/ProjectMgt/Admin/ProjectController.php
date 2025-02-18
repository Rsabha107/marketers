<?php

namespace App\Http\Controllers\ProjectMgt\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UtilController;
use App\Models\BudgetName;
use App\Models\Client;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EventAttendance;
use App\Models\EventAudience;
use App\Models\EventCategory;
use App\Models\EventLocation;
use App\Models\FunctionalArea;
use App\Models\FundCategory;
use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\ProjectType;
use App\Models\Status;
use App\Models\Tag;
use App\Models\Task;
use App\Models\TaskTemplate;
use App\Models\User;
use App\Models\Venue;
use App\Models\Workspace;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class ProjectController extends Controller
{
    //

    protected $UtilController;

    public function __construct(UtilController $UtilController)
    {
        $this->UtilController = $UtilController;
    }

    public function index()
    {

        $project_data = Project::where('archived', 'N')
            ->orderBy('projects.start_date')->get();

        // dd($project_data);
        $projects = $project_data;
        $employees = Employee::all();
        $tags = Tag::all();
        $project_type = ProjectType::all();
        $event_category = EventCategory::all();
        $clients = Client::all();
        $event_audience = EventAudience::all();
        $event_venue = Venue::all();
        $event_location = EventLocation::all();
        $fund_category = FundCategory::all();
        $budget_name = BudgetName::all();
        $project_status = Status::all();
        // used for tasks modal
        $departments = Department::all();
        $functional_areas = FunctionalArea::all();
        $users = User::all();

        $emps = Employee::all();

        return view('projects.admin.project.list', compact(
            'project_data',
            'projects',
            'employees',
            'tags',
            'project_type',
            'event_category',
            'event_audience',
            'clients',
            'event_venue',
            'event_location',
            'fund_category',
            'budget_name',
            'project_status',
            'departments',
            'users',
            'functional_areas',
            'emps',
        ));
    }  // End function index

    public function list($id = null)
    {
        $user = User::findOrFail(Auth::user()->id);

        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "id";
        $order = (request('order')) ? request('order') : "DESC";

        $project_id = (request()->project_id) ? request()->project_id : "";
        $status = (request()->project_status) ? request()->project_status : "";
        $functional_area = (request()->functional_area) ? request()->functional_area : "";
        $venue = (request()->venue) ? request()->venue : "";
        $entity = (request()->entity) ? request()->entity : "";
        $directorate = (request()->directorate) ? request()->directorate : "";
        $active_archived = (request()->active_archived) ? request()->active_archived : "";

        // dd(request()->all());

        $ops = Project::orderBy($sort, $order);

        Log::info(request()->all());

        if ($search) {
            $ops = $ops->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        }

        if ($functional_area) {
            $ops = $ops->where(function ($query) use ($functional_area) {
                $query->where('functional_area_id', '=', $functional_area);
            });
        }

        if ($project_id) {
            $ops = $ops->where(function ($query) use ($project_id) {
                $query->where('project_type_id', '=', $project_id);
            });
        }

        if ($status) {
            $ops = $ops->where(function ($query) use ($status) {
                $query->where('status_id', '=', $status);
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
                '<a href="' . route('projects.admin.project.d', $op->id) . '" class="btn btn-sm" id="employeeCardView" data-id="' .
                $op->id .
                '" data-table="employee_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Employee Details">' .
                '<i class="fa-solid far fa-lightbulb text-warning"></i></a>';
            $update_action =
                '<a href="javascript:void(0)" class="btn btn-sm" id="edit_project_offcanv" data-id=' . $op->id .
                ' data-table="project_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Update">' .
                '<i class="fa-solid fa-pen-to-square text-primary"></i></a>';
            $duplicate_action =
                '<a href="' . $duplicate_project . '" class="btn btn-sm" id="duplicate_employee" data-action="update" data-type="duplicate" data-id=' .
                $op->id .
                ' data-table="project_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Duplicate">' .
                '<i class="fa-solid fa-copy text-success"></i></a>';
            $delete_action =
                '<a href="javascript:void(0)" class="btn btn-sm" data-table="project_table" data-id="' .
                $op->id .
                '" id="delete_project" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete">' .
                '<i class="fa-solid fa-trash text-danger"></i></a></div></div>';
            $restore_action =
                '<a href="javascript:void(0)" class="btn btn-sm" data-table="project_table" data-id="' .
                $op->id .
                '" id="restore_project" data-bs-toggle="tooltip" data-bs-placement="right" title="Restore">' .
                '<i class="fa-solid fa-rotate-left test-warning"></i></a></div></div>';

            // $delete_restore = ('N' == 'N') ? $delete_action : $restore_action;
            $delete_restore = ($op->archived == 'N') ? $delete_action : $restore_action;


            $actions = $div_action . $profile_action;

            ($user->can('employee.edit')) ? $actions = $actions . $update_action . $duplicate_action : $actions = $actions;
            ($user->can('employee.delete')) ? $actions = $actions . $delete_restore : $actions = $actions;

            $assign_to = '<div class="avatar-group">';

            foreach ($op->employees as $key => $emp) {
                if ($emp->emp_files?->file_path) {
                    $assign_to = $assign_to . '<div class="avatar avatar-m ">
                        <a href="' . route('hr.admin.employee.profile', encrypt($emp->id)) . '"
                            role="button" title="' . $emp->full_name . '">
                            <img class="rounded-circle pull-up"
                                src="' . $emp->emp_files->file_path . $emp->emp_files->file_name . '"
                                alt="" />
                        </a>
                    </div>';
                } else {
                    $assign_to = $assign_to . '<div class="avatar avatar-m  me-1">
                        <a class="dropdown-toggle dropdown-caret-none d-inline-block"
                            href="' . route('hr.admin.employee.profile', encrypt($emp->id)) . '"
                            role="button" title="' . $emp->full_name . '">
                            <div class="avatar avatar-m  rounded-circle pull-up">
                                <div class="avatar-name rounded-circle me-2">
                                    <span>' . generateInitials($emp->full_name) . '</span>
                                </div>
                            </div>
                        </a>
                    </div>';
                }
            }

            $assign_to = $assign_to .   '<div class="avatar avatar-m  me-1">
                                                <a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                href="javascript:void(0);" id="edit_project" data-table="project_table"
                                                data-id="' . $op->id . '" role="button" title="add">
                                                <div class="avatar avatar-m  rounded-circle pull-up">
                                                    <div class="avatar-name rounded-circle me-2 text-warning"><span>+</span></div>
                                                </div>
                                            </a>
                                        </div>
                                        </div>';

            $fund_category_color =  $op->fundCategories?->name == 'Budgeted' ? 'success' : 'danger';
            $project_status = '<span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-' . $op->status?->color . '">' . $op->status?->title . '</span>';
            $project_fund_category = '<span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-' . $fund_category_color . '">' . $op->fundCategories?->name . '</span>';

            $progress_bar = '<div class="align-middle white-space-nowrap ps-0 projectprogress">
                          <p class="text-body-secondary fs-10 mb-0">' . get_project_progress($op->id) . '%</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: ' . get_project_progress($op->id) . '%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="' . get_project_progress($op->id) . '" role="progressbar"></div>
                          </div>
                          </div>
                        ';

            $progress_bar_card = ' <div class="progress bg-bg-' . $op->status->color . '-subtle">
                            <div class="progress-bar rounded bg-' . $op->status->color . ' " role="progressbar"
                                aria-label="Success example" style="width: ' . get_project_progress($op->id) . '%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>';

            $details_url = route('projects.admin.project.d', $op->id);

            $card_delete_restore_div = ($op->archived == 'N') ?
                '<a class="dropdown-item text-danger" href="#!" id="delete_project" data-table="project_table"
                                                data-id="' . $op->id . '" title="Delete" class="card-link">Delete</a>' :
                '<a class="dropdown-item text-danger" href="#!" id="restore_project" data-table="project_table"
                                                data-id="' . $op->id . '" title="Restore" class="card-link">Restore</a>';

            return [
                'id1' => '<div class="ms-3">' . $op->id . '</div>',
                'id' => $op->id,
                'name' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3"><a href="' . $details_url . '">' . $op->name . '</a></div>',
                'project_type' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->types?->name . '</div>',
                'project_type_card' => '<span class="badge badge-phoenix fs--2 mb-3 badge-phoenix-secondary "><span class="badge-label" id="editprojectStatus">' . $op->types?->name . '</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span>',

                // 'employee_type' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->employee_types->title . '</div>',

                // 'name' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->name . '</div>',
                'project_name_card' =>  $op->name,
                'client' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->client?->first_name . ' ' . $op->client?->last_name . '</div>',
                'budget' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->budget_allocation . '</div>',
                'balance' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->tasks->sum('actual_budget_allocated') . '</div>',
                'progress' => get_project_progress($op->id),
                'start_date' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . format_date($op->start_date) . '</div>',
                'end_date' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . format_date($op->end_date) . '</div>',
                'assigned_to' =>  $assign_to,
                'project_status_card' =>  $project_status,
                // 'project_status' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $project_status . '</div>',
                'project_status' => '<span class="badge badge-phoenix fs--2 badge-phoenix-' . $op->status->color . ' "><span class="badge-label" id="editprojectStatus" data-id="' . $op->id . '" data-table="project_table">' . $op->status->title . '</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span>',
                'project_status_card' => '<span class="badge badge-phoenix fs--2 mb-3 badge-phoenix-' . $op->status->color . ' "><span class="badge-label" id="editprojectStatus" data-id="' . $op->id . '" data-table="project_table">' . $op->status->title . '</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span>',
                'project_fund_category' =>  $project_fund_category,
                'progress_bar' =>  $progress_bar,
                'progress_bar_card' =>  $progress_bar_card,
                'task_count' =>  $op->tasks->count(),
                'task_count' => '<div class="align-middle white-space-wrap fw-bold fs-9"><a href="' . $details_url . '">' . $op->tasks->count() . '</a></div>',
                'task_url' => '<div class="mt-lg-3 mt-xl-0"><a href="' . route('projects.admin.project.d', $op->id) . '"> <i class="fa-solid fa-list-check me-1"></i>
                                    </a><p class="d-inline-block fw-bold mb-0"><a href="' . route('projects.admin.project.d', $op->id) . '">' . $op->tasks->count() . '<span class="fw-normal"> Task</span>
                                </a></p>
                            </div>',
                'actions' => $actions,
                'card_delete_restore_div' => $card_delete_restore_div,
                'created_at' => format_date($op->created_at,  'H:i:s'),
                'updated_at' => format_date($op->updated_at, 'H:i:s'),
            ];
        });

        return response()->json([
            "rows" => $ops->items(),
            "total" => $total,
        ]);
    }

    public function mlist($id = null)
    {
        $user = User::findOrFail(Auth::user()->id);

        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "id";
        $order = (request('order')) ? request('order') : "DESC";

        // dd(request()->all());

        $project = Project::find($id);
        // dd($project->employees);

        // $ops = $project->employees;
        $ops = $project->employees()->orderBy($sort, $order);
        // $ops = Employee::has('projects' , '=', $id)->orderBy($sort, $order);

        $total = $ops->count();

        $ops = $ops->paginate(request("limit"))->through(function ($op) use ($user, $id) {

            $full_name = $op->first_name . ' ' . $op->last_name;

            if ($op->emp_files?->file_path) {
                $image = ' <div class="avatar avatar-m ">
                                <a  href="#" role="button" title="' . $full_name . '">
                                    <img class="rounded-circle pull-up" src="' . $op->emp_files->file_path . $op->emp_files->file_name . '" alt="" />
                                </a>
                            </div>';
            } else {
                $image = '  <div class="avatar avatar-m me-1" id="project_team_members_init">
                                <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" title="' . $full_name . '">
                                    <div class="avatar avatar-m  rounded-circle pull-up">
                                        <div class="avatar-name rounded-circle me-2"><span>' . generateInitials($full_name) . '</span></div>
                                    </div>
                                </a>
                            </div>';
            }

            $delete_action = '<div class="col-12 col-md-auto d-flex">
                                <a href="#!" class="btn btn-sm btn-outline-danger px-3 px-sm-5 me-2" data-table="project_members_table" data-projid="' . $id . '" data-id="' .
                $op->id . '" id="remove_project_member"><span class="fas fa-trash me-sm-2"></span><span
                                class="d-none d-sm-inline">Remove</span></a>
                                </div>';

            $delete_action2 = '<div class="col-12 col-md-auto d-flex"
            <a href="javascript:void(0);" >
            <button type="button" class="btn btn-phoenix-danger px-3" data-table="project_table" data-id="' .
                $op->id .
                '" id="remove_project_member">
                <i class="fa-solid fa-trash me-2"></i>Remove
            </button>
        </a></div>';

            $delete_action1 =
                '<a href="javascript:void(0)" class="btn btn-sm" data-table="project_members_table" data-projid="' . $id . '" data-id="' .
                $op->id .
                '" id="delete_project" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete">' .
                '<i class="fa-solid fa-trash text-danger"></i></a></div></div>';

            $actions = $delete_action;

            return [
                'id1' => '<div class="ms-3" style="width:1%">' . $op->id . '</div>',
                'id' => $op->id,
                'image' => $image,
                'name' => '<div class="align-middle white-space-wrap fw-bold fs-9"><a href="#">' . $full_name . '</a></div>',
                'designation_id' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->designation->name . '</div>',
                'actions' => $actions,
                // 'card_delete_restore_div' => $card_delete_restore_div,
                'created_at' => format_date($op->created_at,  'H:i:s'),
                'updated_at' => format_date($op->updated_at, 'H:i:s'),
            ];
        });

        return response()->json([
            "rows" => $ops->items(),
            "total" => $total,
        ]);
    }

    public function employeeList($id = null)
    {
        $user = User::findOrFail(Auth::user()->id);

        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "id";
        $order = (request('order')) ? request('order') : "DESC";

        if ($id) {
            $employee = Employee::find($id);
            $ops = $employee->projects()->orderBy($sort, $order);
        } else {
            $ops = Project::orderBy($sort, $order);
        }

        $functional_area = (request()->functional_area) ? request()->functional_area : "";
        $department = (request()->department) ? request()->department : "";
        $entity = (request()->entity) ? request()->entity : "";
        $directorate = (request()->directorate) ? request()->directorate : "";
        $active_archived = (request()->active_archived) ? request()->active_archived : "";

        // dd(request()->all());

        if ($search) {
            $ops = $ops->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        }

        if ($functional_area) {
            $ops = $ops->where(function ($query) use ($functional_area) {
                $query->where('functional_area_id', 'like', '%' . $functional_area . '%');
            });
        }

        if ($department) {
            $ops = $ops->where(function ($query) use ($department) {
                $query->where('department_id', 'like', '%' . $department . '%');
            });
        }

        if ($directorate) {
            $ops = $ops->where(function ($query) use ($directorate) {
                $query->where('directorate_id', 'like', '%' . $directorate . '%');
            });
        }

        if ($entity) {
            $ops = $ops->where(function ($query) use ($entity) {
                $query->where('entity_id', 'like', '%' . $entity . '%');
            });
        }


        if ($active_archived) {
            $ops = $ops->where(function ($query) use ($active_archived) {
                $query->where('archived', 'like', '%' . $active_archived . '%');
            });
        }

        $total = $ops->count();

        $ops = $ops->paginate(request("limit"))->through(function ($op) use ($user) {

            /* returns null if it does not exist */
            // $salary = EmployeeSalary::when($op->id, function ($query, $sal) {
            //     return $query->where('employee_salary.employee_id', $sal);
            // })->first();

            // dd($salary);


            $div_action = '<div class="font-sans-serif btn-reveal-trigger position-static">';
            $profile_action =
                '<a href="' . route("hr.admin.employee.profile", encrypt($op->id)) . '" class="btn btn-sm" id="employeeCardView" data-id="' .
                $op->id .
                '" data-table="employee_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Employee Details">' .
                '<i class="fa-solid far fa-lightbulb text-warning"></i></a>';
            $update_action =
                '<a href="javascript:void(0)" class="btn btn-sm" id="edit_project" data-id=' . $op->id .
                ' data-table="project_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Update">' .
                '<i class="fa-solid fa-pen-to-square text-primary"></i></a>';
            $duplicate_action =
                '<a href="javascript:void(0)" class="btn btn-sm" id="duplicate_employee" data-action="update" data-type="duplicate" data-id=' .
                $op->id .
                ' data-table="employee_table" data-bs-toggle="tooltip" data-bs-placement="right" title="Duplicate">' .
                '<i class="fa-solid fa-copy text-success"></i></a>';
            $delete_action =
                '<a href="javascript:void(0)" class="btn btn-sm" data-table="project_table" data-id="' .
                $op->id .
                '" id="delete" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete">' .
                '<i class="fa-solid fa-trash text-danger"></i></a></div></div>';
            $restore_action =
                '<a href="javascript:void(0)" class="btn btn-sm" data-table="employee_table" data-id="' .
                $op->id .
                '" id="restoreEmployee" data-bs-toggle="tooltip" data-bs-placement="right" title="Restore">' .
                '<i class="fa-solid fa-rotate-left test-warning"></i></a></div></div>';

            $delete_restore = ('N' == 'N') ? $delete_action : $restore_action;

            $actions = $div_action . $profile_action;

            ($user->can('employee.edit')) ? $actions = $actions . $update_action . $duplicate_action : $actions = $actions;
            ($user->can('employee.delete')) ? $actions = $actions . $delete_restore : $actions = $actions;

            $assign_to = '<div class="avatar-group">';

            foreach ($op->employees as $key => $user) {
                if ($user->emp_files?->file_path) {
                    $assign_to = $assign_to . '<div class="avatar avatar-m ">
                        <a href="' . route('hr.admin.employee.profile', encrypt($user->id)) . '"
                            role="button" title="' . $user->full_name . '">
                            <img class="rounded-circle pull-up"
                                src="' . $user->emp_files->file_path . $user->emp_files->file_name . '"
                                alt="" />
                        </a>
                    </div>';
                } else {
                    $assign_to = $assign_to . '<div class="avatar avatar-m  me-1">
                        <a class="dropdown-toggle dropdown-caret-none d-inline-block"
                            href="' . route('hr.admin.employee.profile', encrypt($user->id)) . '"
                            role="button" title="' . $user->name . '">
                            <div class="avatar avatar-m  rounded-circle pull-up">
                                <div class="avatar-name rounded-circle me-2">
                                    <span>' . generateInitials($user->full_name) . '</span>
                                </div>
                            </div>
                        </a>
                    </div>';
                }
            }

            $assign_to = $assign_to .   '<div class="avatar avatar-m  me-1">
                                                <a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                href="javascript:void(0);" id="edit_project" data-table="project_table"
                                                data-id="' . $op->id . '" role="button" title="add">
                                                <div class="avatar avatar-m  rounded-circle pull-up">
                                                    <div class="avatar-name rounded-circle me-2 text-warning"><span>+</span></div>
                                                </div>
                                            </a>
                                        </div>
                                        </div>';

            $fund_category_color =  $op->fundCategories?->name == 'Budgeted' ? 'success' : 'danger';
            $project_status = '<span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-' . $op->status?->color . '">' . $op->status?->title . '</span>';
            $project_fund_category = '<span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-' . $fund_category_color . '">' . $op->fundCategories?->name . '</span>';

            $progress_bar = '                        <div class="progress bg-bg-' . $op->status->color . '-subtle">
                            <div class="progress-bar rounded bg-' . $op->status->color . ' " role="progressbar"
                                aria-label="Success example" style="width: ' . get_project_progress($op->id) . '%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>';
            return [
                'id1' => '<div class="ms-3">' . $op->id . '</div>',
                'id' => $op->id,
                // 'employee_number' => '<div class="align-middle white-space-wrap fw-bold fs-9"><a href="' . $profile_url . '">' . $op->employee_number . '</a></div>',
                // 'employee_type' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->employee_types->title . '</div>',

                'name' => '<div class="align-middle white-space-wrap fw-bold fs-9 ms-3">' . $op->name . '</div>',
                'project_name_card' =>  $op->name,
                'client' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->client?->first_name . ' ' . $op->client?->last_name . '</div>',
                'budget' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->budget_allocation . '</div>',
                'balance' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $op->tasks->sum('actual_budget_allocated') . '</div>',
                'progress' => get_project_progress($op->id),
                'start_date' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . format_date($op->start_date) . '</div>',
                'end_date' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . format_date($op->end_date) . '</div>',
                'assigned_to' =>  $assign_to,
                'project_status_card' =>  $project_status,
                // 'project_status' => '<div class="align-middle white-space-wrap fw-bold fs-9">' . $project_status . '</div>',
                'project_status' => '<span class="badge badge-phoenix fs--2 badge-phoenix-' . $op->status->color . ' "><span class="badge-label" id="editprojectStatus" data-id="' . $op->id . '" data-table="project_table">' . $op->status->title . '</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span>',
                'project_fund_category' =>  $project_fund_category,
                'progress_bar' =>  $progress_bar,
                'task_count' =>  $op->tasks->count(),
                'task_url' => route('projects.admin.task', $op->id),
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

    public function filelist($id = null)
    {
        $search = request('search');
        $sort = (request('sort')) ? request('sort') : "id";
        $order = (request('order')) ? request('order') : "DESC";
        // $op = EmployeeAttachment::orderBy($sort, $order);
        $employee = (request()->employee) ? request()->employee : "";
        $attachment_type = (request()->attachment_type) ? request()->attachment_type : "";

        $project = Project::find($id);

        // $op = GlobalAttachment::orderBy($sort, $order);
        $op = $project->attachments();
        $op = $op->orderBy($sort, $order);

        // dd($op);
        if ($search) {
            $op = $op->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            });
        }

        if ($employee) {
            $op = $op->where(function ($query) use ($employee) {
                $query->where('employee_id', 'like', '%' . $employee . '%');
            });
        }

        if ($attachment_type) {
            $op = $op->where(function ($query) use ($attachment_type) {
                $query->where('model_name', 'like', '%' . $attachment_type . '%');
            });
        }

        $total = $op->count();

        //apply scope
        $op = $op->isActive('N');

        $op = $op->paginate(request("limit"))->through(function ($op) {

            $actions =
                '<a href="javascript:void(0)" class="btn btn-sm" data-table="project_file_table" data-id="' .
                $op->id .
                '" id="delete_project_file" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete">' .
                '<i class="bx bx-trash text-danger"></i></a></div></div>';

            // $profile_url = route('hr.admin.employee.profile', encrypt($op->employees->id));

            return [
                'id' => $op->id,
                'id1' => '<div class="ms-3">' . $op->id . '</div>',
                'description' => '<div class="ms-1">' . $op->description . '</div>',
                'type' => '<div class="ms-1">' . $op->model_name . '</div>',
                'original_file_name' => '<div class="align-middle white-space-wrap fw-bold fs-8 ms-3"><a href="' . route('global.file.serve', $op->id) . '" target="_blank"> ' . $op->original_file_name . '</a></div>',
                'file_size' => '<div class="align-middle white-space-wrap fw-bold fs-8 ms-3">' . formatSizeUnits($op->file_size) . '</div>',
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

    public function projectCardMV()
    {

        // dd(request()->all());
        $project_data = Project::whereNull('archived')
            ->orderBy('projects.start_date')->get();

        $employees = Employee::all();
        $tags = Tag::all();
        $project_type = ProjectType::all();
        $event_category = EventCategory::all();
        $clients = Client::all();
        $event_audience = EventAudience::all();
        $event_venue = Venue::all();
        $event_location = EventLocation::all();
        $fund_category = FundCategory::all();
        $budget_name = BudgetName::all();
        $project_status = Status::all();

        $view = view('projects.admin.project.mv.card', compact(
            'project_data',
            'employees',
            'tags',
            'project_type',
            'event_category',
            'event_audience',
            'clients',
            'event_venue',
            'event_location',
            'fund_category',
            'budget_name',
            'project_status'
        ))->render();

        return response()->json(['view' => $view]);
    }  // End function index

    public function getProject($id)
    {
        $project = Project::findOrFail($id);

        // $ws_id = session()->get('workspace_id') ? session()->get('workspace_id') : $project->workspace_id;
        // $workspace = Workspace::findOrFail($ws_id);
        // $ws_users = $workspace?->employees;
        // $project = Project::findOrFail($id);

        return response()->json([
            'project' => $project,
            'tag' => $project->tags,
            'assigned_to' => $project->employees,
            'functional_areas' => $project->functional_areas
        ]);
    }  // End function getProject

    public function getProjectView($id)
    {
        $project = Project::findOrFail($id);
        $functional_areas = FunctionalArea::all();
        $tags = Tag::all();
        $project_type = ProjectType::all();
        $event_category = EventCategory::all();
        $clients = Client::all();
        $employees = Employee::all();

        $view = view('/projects/admin/project/mv/edit', [
            'project' => $project,
            'functional_areas' => $functional_areas,
            'project_type' => $project_type,
            'tags' => $tags,
            'event_category' => $event_category,
            'clients' => $clients,
            'employees' => $employees,
        ])->render();

        return response()->json(['view' => $view]);
    }  // End function getProjectView

    public function store(Request $request)
    {
        // dd('createEvent');
        $user_id = Auth::user()->id;
        $project = new Project();

        $rules = [
            'name' => ['required'],
            'project_type_id' => ['required'],
            'description' => ['required'],
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

        $project->name = $request->name;
        $project->category_id = intval($request->category_id);
        $project->client_id = intval($request->client_id);
        $project->functional_area_id = intval($request->functional_area_id);
        if ($request->start_date) {
            $project->start_date = Carbon::createFromFormat('d/m/Y', $request->start_date);
        }

        if ($request->end_date) {
            $project->end_date = Carbon::createFromFormat('d/m/Y', $request->end_date);
        }
        $project->budget_allocation = intval($request->budget_allocation);
        $project->total_sales = intval($request->total_sales);
        $project->sales_margin = intval($request->sales_margin);
        $project->status_id = config('tracki.project_status.inprogress');
        $project->description = $request->description;
        $project->color_id = 14; //$request->color_id;
        $project->progress = $request->progress / 100;
        $project->project_type_id = intval($request->project_type_id);
        $project->org_id = 1;
        $project->created_by = $user_id;
        $project->updated_by = $user_id;

        if ($request->start_date && $request->end_date) {
            $start_date_d = Carbon::createFromFormat('d/m/Y', $request->start_date);
            $end_date_d = Carbon::createFromFormat('d/m/Y', $request->end_date);
            $duration =  $start_date_d->diffInDays($end_date_d, false);
            $project->duration = $duration;
        }

        $project->save();

        if ($request->tag_id) {
            foreach ($request->tag_id as $key => $data) {
                $project->tags()->attach($request->tag_id[$key]);
            }
        }

        if ($request->assignment_to_id) {
            foreach ($request->assignment_to_id as $key => $data) {
                $project->employees()->attach($request->assignment_to_id[$key]);
            }
        }

        if ($request->use_project_template) {
            // start inserting task items from template based on project_type_id
            $task_template_lines = TaskTemplate::where('project_type_id', '=', $request->project_type_id)
                ->orderBy('task_line_order', 'ASC')->get();
            $progress_status_id = Status::where('title', 'In-progress');
            $task = new Task();
            foreach ($task_template_lines as $task_template_line) {

                // $task_data_array[] = [
                $data = new Task([
                    'name' => $task_template_line->task_line_name,
                    'milestone' => 1,
                    'status_id' => $progress_status_id,
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                ]);

                $project->tasks()->save($data);
                // $task->name = $task_template_line->task_line_name;
                // $task->project_id = $project->id;
                // $task->milestone = 1;
                // $task->created_by = $user_id;
                // $task->updated_by = $user_id;
                // save each
                // $task->save();
            }
        }

        $notification = array(
            'message'       => 'Event created successfully',
            'alert-type'    => 'success'
        );

        $error = false;
        $message = 'Project ' . $project->name . ' successfully created';
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

    public function update(Request $request)
    {
        // dd('createEvent');
        $user_id = Auth::user()->id;
        $project = Project::find($request->id);

        $rules = [
            'name' => ['required'],
            'project_type_id' => ['required'],
            'description' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // Log::info($validator->errors());
            $error = true;
            // $message = 'Employee not create.' . $op->id;
            $message = implode($validator->errors()->all('<div>:message</div>'));
        } else {
            $project->name = $request->name;
            $project->category_id = intval($request->category_id);
            $project->client_id = intval($request->client_id);
            if ($request->start_date) {
                Log::info($request->start_date);
                $project->start_date = Carbon::createFromFormat('d/m/Y', $request->start_date);
            } else {
                $project->start_date = null;
            }
            if ($request->end_date) {
                $project->end_date = Carbon::createFromFormat('d/m/Y', $request->end_date);
            } else {
                $project->end_date = null;
            }
            $project->budget_allocation = intval($request->budget_allocation);
            $project->sales_margin = intval($request->sales_margin);
            $project->description = $request->description;
            $project->color_id = $request->color_id;
            $project->progress = $request->progress / 100;
            $project->project_type_id = $request->project_type_id;
            $project->total_sales = intval($request->total_sales);
            $project->functional_area_id = intval($request->functional_area_id);
            $project->updated_by = $user_id;

            if ($request->start_date && $request->end_date) {
                $start_date_d = Carbon::createFromFormat('d/m/Y', $request->start_date);
                $end_date_d = Carbon::createFromFormat('d/m/Y', $request->end_date);
                $duration =  $start_date_d->diffInDays($end_date_d, false);
                $project->duration = $duration;
            } else {
                $project->duration = null;
            }

            $project->save();

            if ($request->tag_id) {
                $project->tags()->detach();
                foreach ($request->tag_id as $key => $data) {
                    $project->tags()->attach($request->tag_id[$key]);
                }
            } else {
                $project->tags()->detach();
            }

            if ($request->assignment_to_id) {
                $project->employees()->detach();
                foreach ($request->assignment_to_id as $key => $data) {
                    $project->employees()->attach($request->assignment_to_id[$key]);
                }
            } else {
                $project->employees()->detach();
            }

            $notification = array(
                'message'       => 'Event updated successfully',
                'alert-type'    => 'success'
            );

            $error = false;
            $message = 'Project ' . $project->name . ' successfully updated';
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

    public function updateClient(Request $request)
    {
        Log::info($request->all());
        $project = Project::find($request->project_id);
        $project->client_id = $request->client_id;
        $project->save();

        $notification = array(
            'message'       => 'Client updated successfully',
            'alert-type'    => 'success'
        );

        return redirect()->route('projects.admin.project.d', $request->project_id)->with($notification);
    }

    public function mupdate(Request $request)
    {
        // dd('createEvent');
        $user_id = Auth::user()->id;
        $project = Project::find($request->project_id);


        $project->employees()->attach($request->assignment_to_id);

        $notification = array(
            'message'       => 'Member added successfully',
            'alert-type'    => 'success'
        );

        return response()->json([
            'error' => false,
            'message' => 'Member added successfully ',
        ]);

        // // Toastr::success('Has been add successfully :)','Success');
        // if ($request->source == 'plist') {
        //     return Redirect::route('tracki.task.list', $request->id)->with($notification);
        // } else {
        //     return Redirect::route('tracki.project.show.card')->with($notification);
        // }
    } // mupdate

    public function kanbanUpdate(Request $request)
    {
        $task_id = $request->task_id;
        $new_status_id = $request->new_status_id;
        $task = Task::findOrFail($task_id);
        $task->status_id = $new_status_id;
        $task->save();
        $task->refresh();
        return response()->json(['error' => false, 'message' => 'Task status updated successfully.', 'id' => $task_id]);
    }

    public function delete(string $id)
    {
        //
        // Employee::where('id', '=', $id)->delete();
        // soft delete
        // dd($id);
        // Project::where('id', '=', $id)->update(['archived' => 'Y']);

        $project = Project::find($id);
        $project->archived = 'Y';
        $project->save();

        $notification = array(
            'message'       => 'Project archived successfully',
            'alert-type'    => 'success'
        );

        return response()->json([
            'error' => false,
            'message' => 'Project archived successfully',
        ]);
    }

    public function mdelete(string $pid, string $id)
    {
        //
        // Employee::where('id', '=', $id)->delete();
        // soft delete
        // dd($id);
        // Project::where('id', '=', $id)->update(['archived' => 'Y']);

        $project = Project::find($pid);
        $project->employees()->detach($id);
        // $project->save();

        $notification = array(
            'message'       => 'Member removed successfully',
            'alert-type'    => 'success'
        );

        return response()->json([
            'error' => false,
            'message' => 'Member removed successfully',
        ]);
    }

    public function restore(string $id)
    {
        //
        // Employee::where('id', '=', $id)->delete();
        // soft delete
        // dd($id);
        // Project::where('id', '=', $id)->update(['archived' => 'Y']);

        $project = Project::find($id);
        $project->archived = 'N';
        $project->save();

        $notification = array(
            'message'       => 'Project restored successfully',
            'alert-type'    => 'success'
        );

        return response()->json([
            'error' => false,
            'message' => 'Project restored successfully',
        ]);
    }

    public function detail(Request $request, $id)
    {

        // $hasit = Auth::user()->hasRole('department restricted');
        // Log::alert('TaskController::taskDetails');

        // Log::alert('TaskController::workspace' . $workspace);

        // Log::info($request->url());
        // $user_department = Auth::user()->department_assignment_id;

        $util_controller = new UtilController;

        $projectData = Project::find($id);
        // if (!$projectData){
        //     dd($projectData);
        // }
        $department = Department::all();
        $event_category = EventCategory::all();
        $clients = Client::all();

        $project_type = ProjectType::all();
        $fund_category = FundCategory::all();
        $budget_name = BudgetName::all();
        $employees = $projectData->employees;
        $emps = Employee::all(); // use for select list
        $tags = $projectData->tags;
        $functional_areas = FunctionalArea::all();
        $total_budget_spent = $projectData->tasks->sum('actual_budget_allocated');

        $emps = Employee::whereDoesntHave('projects', function ($query) use ($id) {
            return $query->where('project_id', $id);
        })->get();  // gives all employees not in this project

        // $emps = Employee::whereNotIn('id', $projectData->employees->pluck('id'))->get();  // this works as well

        // foreach ($projectData->clients as $clnt) {
        //     $client_name = $clnt->first_name.' '.$clnt->last_name;
        //     // $client_first_name = $projectData->clients->pivot->first_name;
        // }
        // dd($client_name);

        // $util = new UtilController;
        // Log::info($user_department);
        // $hasit = Auth::user()->hasPermissionTo('project.menu');
        // $hasit = Auth::user()->hasPermissionTo('project.menu');
        // dd($hasit);


        $budget_details = $this->UtilController->getEventBudgetDetails($id);

        $remaining_budget = $budget_details->eventbudget - $budget_details->task_total_budget;

        $project_progress = get_project_progress($id);
        // session(['attendance_view' => 'show']);
        //dd($delta);

        $task_status_chart = Task::where('tasks.project_id', '=', $id)
            ->join('statuses', 'statuses.id', '=', 'tasks.status_id')
            ->select('statuses.title as name', DB::raw("count(statuses.title) as value"))
            ->groupBy('statuses.title')
            // ->when($workspace, function ($query, $workspace) {
            //     return $query->where('tasks.workspace_id', $workspace);
            // })
            ->having('value', '>', '0')
            ->get();

        // dd($task_status_chart);


        $attendeez = EventAttendance::join('master_guests_list', 'event_attendance.guest_id', '=', 'master_guests_list.id')
            ->join('event_audience', 'event_audience.id', '=', 'master_guests_list.type_id')
            ->where('event_attendance.event_id', '=', $id)
            ->orderBy('master_guests_list.first_name', 'asc')
            ->get(([
                'event_attendance.id',
                'master_guests_list.first_name',
                'master_guests_list.last_name',
                'master_guests_list.email_address',
                'master_guests_list.phone_number',
                'event_attendance.guest_attended',
                'event_audience.name',
            ]));

        $eventCategoryName = $projectData->categories?->name;
        $projectType = $projectData->types?->name;
        $AudienceName = $projectData->audiences?->name;
        $PlannerName = $projectData->planners?->name;
        // $VenueName = $projectData->venues?->name;
        $LocationName = $projectData->locations?->name;
        $FundCategory = $projectData->fundCategories?->name;
        $eventNote = $projectData->notes;
        $FileName = $projectData->attachments;
        // $FileName = $projectData->files;

        if ($projectData->budget_allocation == 0) {
            $budget_percentage_used = 0;
        } else {
            $budget_percentage_used = ($total_budget_spent / $projectData->budget_allocation) * 100;
        }


        // ******************************* this is for the x-card
        $projects = Project::find($id);
        $users = User::all();
        $statuses = Status::all();
        $tasks = $projects->tasks()->orderBy('id', 'desc')->get();
        // dd($tasks);
        //********************************************* */

        // dd($taskData);
        $count = $projectData->count();
        return view('projects.admin.project.d', [
            'count' => $count,
            'projectData' => $projectData,
            'project' => $projectData,
            'employees' => $employees,
            'project_progress' => $project_progress,
            'eventCategoryName' => $eventCategoryName,
            'plannerName' => $PlannerName,
            'functional_areas' => $functional_areas,
            'locationName' => $LocationName,
            'fileName' => $FileName,
            'remainingBudget' => $remaining_budget,
            'eventNote' => $eventNote,
            'projectType' => $projectType,
            'FundCategory' => $FundCategory,
            'statuses' => $statuses,
            'projects' => $projects,
            'users' => $users,
            'departments' => $department,
            'task_status_chart' => $task_status_chart,
            'project_type' => $project_type,
            'event_category' => $event_category,
            'clients' => $clients,
            'tags' => $tags,
            'fund_category' => $fund_category,
            'budget_name' => $budget_name,
            'emps' => $emps,
            'tasks' => $tasks,
            'total_budget_spent' => $total_budget_spent,
            'budget_percentage_used' => $budget_percentage_used,
        ]);
    }  // end detail

    public function create()
    {
        $projects = Project::all();
        $department = Department::all();
        $event_category = EventCategory::all();
        $clients = Client::all();
        $event_audience = EventAudience::all();
        $event_venue = Venue::all();
        $event_location = EventLocation::all();
        $project_type = ProjectType::all();
        $fund_category = FundCategory::all();
        $budget_name = BudgetName::all();
        $employees = Employee::all();
        $tags = Tag::all();
        $functional_areas = FunctionalArea::all();

        return view('projects.admin.project.create', [
            'departments' => $department,
            'event_category' => $event_category,
            'clients' => $clients,
            'event_audience' => $event_audience,
            'event_venue' => $event_venue,
            'event_location' => $event_location,
            'project_type' => $project_type,
            'fund_category' => $fund_category,
            'budget_name' => $budget_name,
            'employees' => $employees,
            'tags' => $tags,
            'functional_areas' => $functional_areas,
            'projects' => $projects,
        ]);
    }

    public function createmv()
    {
        $projects = Project::all();
        $department = Department::all();
        $event_category = EventCategory::all();
        $clients = Client::all();
        $event_audience = EventAudience::all();
        $event_venue = Venue::all();
        $event_location = EventLocation::all();
        $project_type = ProjectType::all();
        $fund_category = FundCategory::all();
        $budget_name = BudgetName::all();
        $employees = Employee::all();
        $tags = Tag::all();
        $functional_areas = FunctionalArea::all();

        $view = view('projects.admin.project.mv.create', [
            'departments' => $department,
            'event_category' => $event_category,
            'clients' => $clients,
            'event_audience' => $event_audience,
            'event_venue' => $event_venue,
            'event_location' => $event_location,
            'project_type' => $project_type,
            'fund_category' => $fund_category,
            'budget_name' => $budget_name,
            'employees' => $employees,
            'tags' => $tags,
            'functional_areas' => $functional_areas,
            'projects' => $projects,
        ])->render();

        return response()->json(['view' => $view]);
    }

    public function duplicate($id = null)
    {
        $project = Project::find($id);
        $projects = Project::all();
        $department = Department::all();
        $event_category = EventCategory::all();
        $clients = Client::all();
        $event_audience = EventAudience::all();
        $event_venue = Venue::all();
        $event_location = EventLocation::all();
        $project_type = ProjectType::all();
        $fund_category = FundCategory::all();
        $budget_name = BudgetName::all();
        $employees = Employee::all();
        $tags = Tag::all();
        $emps = Employee::all();
        $functional_areas = FunctionalArea::all();

        return view('projects.admin.project.duplicate', [
            'departments' => $department,
            'event_category' => $event_category,
            'clients' => $clients,
            'event_audience' => $event_audience,
            'event_venue' => $event_venue,
            'event_location' => $event_location,
            'project_type' => $project_type,
            'fund_category' => $fund_category,
            'budget_name' => $budget_name,
            'employees' => $employees,
            'tags' => $tags,
            'functional_areas' => $functional_areas,
            'project' => $project,
            'projects' => $projects,
            'emps' => $emps,
        ]);
    }
}
