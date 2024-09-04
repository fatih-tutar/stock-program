<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'prepared_by',
        'factory_id',
        'contact_person',
        'product_id',
        'quantity',
        'length',
        'due_date',
        'is_draft',
        'is_form',
        'is_deleted',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function factory()
    {
        return $this->belongsTo(Factory::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
