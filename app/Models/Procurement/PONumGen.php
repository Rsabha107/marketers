<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PONumGen extends Model
{
    use HasFactory;
    protected $table = 'po_number_gen';
    protected $guarded = [];
}
