<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderLine extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table='purchase_order_lines';

    protected $appends = ['line_total'];

    public function getLineTotalAttribute(){
        return $this->quantity*$this->unit_price;
    }

    public function product()
    {
        return $this->belongsTo(ItemMater::class, 'item_id');
    }
}
