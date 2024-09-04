<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'labor', // işçilik
        'address',
        'amount_due', // fabrika alacak
        'due_date', // fabrika alacak tarih
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function molds()
    {
        return $this->hasMany(Mold::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
    public function orderForms()
    {
        return $this->hasMany(OrderForm::class);
    }
}
