<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyMovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_incoming',
        'store_outgoing',
        'warehouse_incoming',
        'warehouse_outgoing',
        'is_deleted',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
