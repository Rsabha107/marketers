<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function hasClient(){
    
        return (bool) $this->client()->first();
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id', 'id');
    }


    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_project');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'project_tag');
    }

    public function functional_area()
    {
        return $this->belongsTo(FunctionalArea::class, 'functional_area_id');
    }


    public function notes()
    {
        return $this->hasMany(ProjectNote::class, 'project_id', 'id');
    }

    public function files()
    {
        return $this->hasMany(ProjectFileUpload::class, 'project_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'category_id', 'id');
    }

    public function types()
    {
        return $this->belongsTo(ProjectType::class, 'project_type_id', 'id');
    }

}
