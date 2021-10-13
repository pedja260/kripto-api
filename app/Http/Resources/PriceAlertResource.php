<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PriceAlertResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'coin' => $this->coin,

            'price' => $this->price,
            'change' => $this->change,
            'note' => $this->note,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
