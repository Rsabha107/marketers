<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $title;
    public $formAction;
    // public $employeeObject;

    public function __construct($id, $title = 'Default Title', $formAction)
    {
        $this->id = $id;
        $this->title = $title;
        $this->formAction = $formAction;
        // $this->formAction = $employeeObject;
    }

    public function render()
    {
        return view('components.modal');
    }
}
