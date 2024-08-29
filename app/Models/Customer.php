<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location_id',
        'company_name',
        'email'
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
