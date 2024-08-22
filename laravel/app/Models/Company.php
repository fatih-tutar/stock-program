<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'logo',
        'price_list',
        'last_back_up',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function factories()
    {
        return $this->hasMany(Factory::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
