<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CylinderCover extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hours',
        'lmd_status',
        'location_id',
        'status'
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function orders() {
        return $this->hasOne(Order::class);
    }
}
