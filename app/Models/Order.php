<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

     protected $fillable = [
        'user_id','delivery_id','total_price', 'status'
    ];

    public function detail()
    {
      return  $this->hasMany(OrderDetail::class,'order_id','id');
    }

    public function ScopeNew($querry)
    {
      return $querry->where('status',0)->get();
    }

    public function ScopeShipping($querry)
    {
      return $querry->where('status',1)->get();
    }

    public function ScopeOrdered($querry)
    {
      return $querry->where('status',2)->get();
    }

//     public function getStatusBrowseAttribute()
// {
//     return $this->status ?? 'null';
// }
}
