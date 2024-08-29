<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'storage_status',
        'address'
    ];

    public function customer() {
        return $this->hasMany(Customer::class);
    }

    public function cylinderCover() {
        return $this->hasMany(CylinderCover::class);
    }
}
