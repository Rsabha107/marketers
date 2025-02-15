<?php

namespace App\Models\Procurement;

use App\Models\GlobalStatus;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMater extends Model
{
    use HasFactory;
    protected $table = "item_master";

    public function active_status()
    {
        return $this->belongsTo(GlobalStatus::class, 'active_flag_id');
    }

    public function unit_type()
    {
        return $this->belongsTo(ItemUnitType::class, 'unit_type_id');
    }
}
