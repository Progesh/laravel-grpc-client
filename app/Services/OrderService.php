<?php

namespace App\Services;

use App\Services\Grpc\ProductGrpcClient;

class OrderService
{
    public function getOrders(): array
    {
        $productClient = app(ProductGrpcClient::class);

        $orders = [
            ['order_id' => 1, 'product_id' => 1, 'quantity' => 2],
        ];

        return collect($orders)->map(function ($order) use ($productClient) {
            $product = $productClient->getProduct($order['product_id']);
            return [
                'order_id' => $order['order_id'],
                'quantity' => $order['quantity'],
                'product'  => $product,
                'total'    => $product['price'] * $order['quantity'],
            ];
        })->toArray();
    }
}
