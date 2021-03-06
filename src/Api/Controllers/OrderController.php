<?php

namespace AvoRed\Framework\Api\Controllers;

use Illuminate\Http\JsonResponse;
use AvoRed\Framework\Models\Database\Order;
use AvoRed\Framework\Api\Controllers\Controller;
use AvoRed\Framework\Api\Resources\Order\OrderCollectionResource;
use AvoRed\Framework\Api\Resources\Order\OrderResource;

class OrderController extends Controller
{
    /**
     * Return upto 10 Record for an Resource in Json Formate
     * 
     * @return \Illuminate\Http\Resources\CollectsResources
     */
    public function index()
    {
        $orders = Order::paginate(10);

        return new OrderCollectionResource($orders);
    }
    
    /**
     * Find a Record and Returns a Json Resrouce for that Record
     * 
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function show(Order $order)
    {
        return new OrderResource($order);
    }

}
