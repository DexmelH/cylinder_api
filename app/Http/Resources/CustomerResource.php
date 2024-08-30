<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'companyName' => $this->company_name,
            'email' => $this->email,
            'location' => new LocationResource($this->location),
            'orders' => new OrderCollection($this->orders)
        ];
    }
}