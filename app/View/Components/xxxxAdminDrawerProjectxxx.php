<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminDrawerProject extends Component
{

    public $id;
    public $formAction;
    public $functionalareas;
    public $tags;
    public $projecttype;
    public $eventcategory;
    public $clients;
    public $employees;
    public $formId;
    /**
     * Create a new component instance.
     */
    public function __construct(    $id, 
                                    $formAction, 
                                    $functionalareas,
                                    $tags,
                                    $projecttype,
                                    $eventcategory,
                                    $clients,
                                    $employees,
                                    $formId,
                                )
    {
        $this->id = $id;
        $this->formAction = $formAction;
        $this->functionalareas = $functionalareas;
        $this->tags = $tags;
        $this->projecttype = $projecttype;
        $this->eventcategory = $eventcategory;
        $this->clients = $clients;
        $this->employees = $employees;
        $this->formId = $formId;
        // $this->formAction = $employeeObject;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-drawer-project');
    }
}
