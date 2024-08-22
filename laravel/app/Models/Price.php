<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_no',
        'code',
        'model',
        'amount',
        'price',
        'technical_drawing',
        'product_image',
        'description',
        'order',
        'is_deleted',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
