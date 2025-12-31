<?php

namespace App\Http\Controllers;

use App\Services\OrderService;

class OrderController extends Controller
{
    public function index(OrderService $orderService)
    {
        return response()->json(
            $orderService->getOrders()
        );
    }
}
