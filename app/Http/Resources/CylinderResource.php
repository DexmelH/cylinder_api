<?php

namespace App\Http\Resources;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Date;

class CylinderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $dateNow = new Carbon(date('Y-m-d H:i:s'));
        $dateStart = new Carbon($this->date_started);
        $order = Order::where('cylinder_cover_id', $this->id)->latest()->first();
        $hours = (int) $this->date_started != NULL ? round($dateStart->diffInHours($dateNow)) : 0;

        return [
            'id' => $this->id,
            'serialNumber' => $this->serial_number,
            'isDisposed' => $this->is_disposed,
            'disposalDate' => $this->disposal_date,
            'storage' => $this->storage,
            'dateStored' => $this->date_stored,
            'status' => $this->status,
            'cycle' => $this->cycle
        ];
    }
}