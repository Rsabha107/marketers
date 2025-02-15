<?php

namespace App\Models\Procurement;

use App\Models\GeneralSettings\CompanyAddress;
use App\Models\GeneralSettings\Currency;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderHeader extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table='purchase_order_headers';

    public static function boot(){

        parent::boot();

        // static::addGlobalScope(new NonArchivedScope);

        static::creating(function($model){
            $PONumGen = PONumGen::firstOrFail();
            $last_number = $PONumGen->max('last_number') + 1;
            $PONumGen->update(['last_number' => $last_number]);

            $model->po_number = 'PO'.'-'.str_pad($last_number, 5, '0', STR_PAD_LEFT);
        });
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function delivery_status()
    {
        return $this->belongsTo(Vendor::class, 'delivery_status_id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function lines()
    {
        return $this->hasMany(PurchaseOrderLine::class, 'po_header_id', 'id');
    }

    public function business_address()
    {
        return $this->belongsTo(CompanyAddress::class, 'deliver_to_address_id');
    }
}
