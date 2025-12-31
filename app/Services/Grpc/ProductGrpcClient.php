<?php

namespace App\Services\Grpc;

use Grpc\Product\ProductRequest;
use Grpc\Product\ProductServiceClient;
use Grpc\ChannelCredentials;

class ProductGrpcClient {
    private $client;
    
    public function __construct() {
        $this->client = new ProductServiceClient(
            '172.20.0.2:9001',
            ['credentials' => ChannelCredentials::createInsecure()],
        );
    }
    
    public function getProduct($productId) {
        $request = new ProductRequest();
        $request->setProductId($productId);
        [$response, $status] = $this->client->GetProduct($request)->wait();

        return [
            'product_id' => $response->getProductId(),
            'name'       => $response->getName(),
            'price'      => $response->getPrice(),
        ];
    }
}
