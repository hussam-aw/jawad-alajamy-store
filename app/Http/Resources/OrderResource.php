<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\OrderDetailResource;
use App\Models\OrderDetail;

class OrderResource extends JsonResource
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
            'user'=>new UserResource($this->user),
            'delivery'=>new UserResource($this->delivery),
            'total_price'=>$this->total_price,
            'status'=>$this->status,
            'employee'=>new UserResource($this->employee),
            'detail'=> OrderDetailResource::collection($this->details),
        
        ];
    }
}
