<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'parent_id',
        'image',
        'columns',
        'profit_percentage',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function productsInMainCategory()
    {
        return $this->hasMany(Product::class, 'main_category');
    }

    public function productsInSubCategory()
    {
        return $this->hasMany(Product::class, 'sub_category');
    }
}
