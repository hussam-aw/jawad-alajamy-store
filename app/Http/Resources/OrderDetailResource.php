<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'product_id'=>$this->product_id,
            'quantity'=>$this->quantity,
            'order_id'=>$this->order_id,
            'total_price'=>$this->total_price,
            'price'=>$this->price,
        ];
    }
}
