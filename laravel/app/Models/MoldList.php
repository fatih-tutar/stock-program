<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoldList extends Model
{
    use HasFactory;

    protected $table = 'mold_list';

    protected $fillable = [
        'customer',
        'contact_person',
        'product_info',
        'price',
        'factory',
        'factory_price',
        'user_id',
        'description',
        'status',
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
}
