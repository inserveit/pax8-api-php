<?php

namespace Inserve\Pax8API\API;

use Inserve\Pax8API\Exception\Pax8APIException;
use Inserve\Pax8API\Models\PaginatedSubscriptionResponse;
use Inserve\Pax8API\Models\Subscription;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class SubscriptionAPI extends AbstractAPIClient
{
    /**
     * @param string $subscriptionId
     *
     * @return Subscription|null
     *
     * @throws Pax8APIException|ExceptionInterface
     */
    public function get(string $subscriptionId): ?Subscription
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('subscriptions/%s', $subscriptionId)
        );

        /** @var Subscription|null */
        return $this->apiClient->denormalize($response, Subscription::class);
    }

    /**
     * @param int $limit
     * @param int $offset
     *
     * @return PaginatedSubscriptionResponse|null
     *
     * @throws ExceptionInterface
     * @throws Pax8APIException
     */
    public function list(int $limit = 25, int $offset = 0): ?PaginatedSubscriptionResponse
    {
        $url = sprintf('subscriptions?%s', http_build_query(['page' => $offset, 'size' => $limit]));
        $response = $this->apiClient->call(
            'GET',
            $url
        );

        /** @var PaginatedSubscriptionResponse|null */
        return $this->apiClient->denormalize($response, PaginatedSubscriptionResponse::class);
    }
}
