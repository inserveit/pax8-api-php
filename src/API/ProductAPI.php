<?php

namespace Inserve\Pax8API\API;

use Inserve\Pax8API\Exception\Pax8APIException;
use Inserve\Pax8API\Models\PaginatedProductResponse;
use Inserve\Pax8API\Models\Product;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class ProductAPI extends AbstractAPIClient
{
    /**
     * @param string $productId
     *
     * @return Product|null
     *
     * @throws Pax8APIException|ExceptionInterface
     */
    public function get(string $productId): ?Product
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('products/%s', $productId)
        );

        /** @var Product|null */
        return $this->apiClient->denormalize($response, Product::class);
    }

    /**
     * @param int $limit
     * @param int $offset
     *
     * @return PaginatedProductResponse|null
     *
     * @throws ExceptionInterface
     * @throws Pax8APIException
     */
    public function list(int $limit = 25, int $offset = 0): ?PaginatedProductResponse
    {
        $url = sprintf('products?%s', http_build_query(['page' => $offset, 'size' => $limit]));
        $response = $this->apiClient->call(
            'GET',
            $url
        );

        /** @var PaginatedProductResponse|null */
        return $this->apiClient->denormalize($response, PaginatedProductResponse::class);
    }
}
