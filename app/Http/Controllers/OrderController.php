<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;

class OrderController extends Controller
{

    public function Detail($id)
    {

        $detail = OrderDetail::where('order_id', $id)->get();
      
        return redirect(route('voyager.orders.read') , $detail);
    }
}
