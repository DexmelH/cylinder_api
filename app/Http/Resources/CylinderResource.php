<?php

namespace App\Http\Resources;

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


        $hours = (int) $this->date_started != NULL ? round($dateStart->diffInHours($dateNow)) : 0;
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lmdStatus' => $this->lmd_status == 0 ? "Not done" : "Done",
            'location' => new LocationResource($this->location),
            'status' => $this->status,
            'hours' => $hours,
            'updated_at' => $this->updated_at
        ];
    }
}
