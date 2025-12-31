<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Grpc\Product;

/**
 */
class ProductServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Grpc\Product\ProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProduct(\Grpc\Product\ProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/product.ProductService/GetProduct',
        $argument,
        ['\Grpc\Product\ProductResponse', 'decode'],
        $metadata, $options);
    }

}
