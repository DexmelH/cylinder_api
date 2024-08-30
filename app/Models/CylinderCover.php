<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CylinderCover extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial_number',
        'is_disposed',
        'disposal_date',
        'storage',
        'date_stored',
        'status',
        'cycle'
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
}
