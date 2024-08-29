<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function cylinderCover() {
        return $this->belongsTo(CylinderCover::class);
    }

    public function returnOrder() {
        return $this->hasOne(ReturnOrder::class);
    }
}
