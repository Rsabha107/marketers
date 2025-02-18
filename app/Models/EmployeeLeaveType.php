<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeaveType extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'employee_leave_types';
}
