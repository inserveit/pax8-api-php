<?php

namespace Inserve\Pax8API\API;

use Inserve\Pax8API\Exception\Pax8APIException;
use Inserve\Pax8API\Models\PaginatedProductResponse;
use Inserve\Pax8API\Models\Product;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
final class ProductAPI extends AbstractAPIClient
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
     * @param int $size
     * @param int $page
     *
     * @return PaginatedProductResponse|null
     *
     * @throws ExceptionInterface
     * @throws Pax8APIException
     */
    public function list(int $size = 25, int $page = 0): ?PaginatedProductResponse
    {
        $url = sprintf('products?%s', http_build_query(['page' => $page, 'size' => $size]));
        $response = $this->apiClient->call(
            'GET',
            $url
        );

        /** @var PaginatedProductResponse|null */
        return $this->apiClient->denormalize($response, PaginatedProductResponse::class);
    }
}
