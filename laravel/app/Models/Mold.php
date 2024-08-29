<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mold extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'mold_number',
        'factory_id',
        'pdf',
        'company_id',
        'is_deleted'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function factory()
    {
        return $this->belongsTo(Factory::class);
    }
}
