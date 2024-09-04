<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'offers',
        'client_id',
        'company_id',
        'is_deleted'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
