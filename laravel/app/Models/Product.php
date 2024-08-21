<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_category',
        'sub_category',
        'code',
        'name',
        'quantity',
        'pallet_quantity',
        'warehouse_quantity',
        'shelf',
        'unit_kg',
        'length',
        'cost_price',
        'selling_price',
        'factory_id',
        'description',
        'stock_quantity',
        'alert_quantity',
        'warehouse_alert_quantity',
        'order',
        'customer_name',
        'date',
        'due_date',
        'company_id',
    ];

    public function mainCategory()
    {
        return $this->belongsTo(Category::class, 'main_category');
    }

    public function subCategory()
    {
        return $this->belongsTo(Category::class, 'sub_category');
    }

    public function factory() {
        return $this->belongsTo(Factory::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
