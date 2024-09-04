<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'amount_due',
        'due_date',
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function offerForms()
    {
        return $this->hasMany(OfferForm::class);
    }
}
