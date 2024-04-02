<?php

namespace Inserve\Pax8API\Tests;

use Inserve\Pax8API\API\CompanyAPI;
use Inserve\Pax8API\Client\APIClient;
use Inserve\Pax8API\Exception\Pax8APIException;
use Inserve\Pax8API\Models\AccessToken;
use Inserve\Pax8API\Pax8APIClient;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Inserve\Pax8API\API\ProductAPI;
use Inserve\Pax8API\API\SubscriptionAPI;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class Pax8APIClientTest extends TestCase
{
    /**
     * @return void
     *
     * @throws Exception
     */
    public function testMagicMethods(): void
    {
        $apiClientMock = $this->createMock(APIClient::class);
        $apiClient = new Pax8APIClient($apiClientMock);

        self::assertInstanceOf(CompanyAPI::class, $apiClient->company);
        self::assertInstanceOf(ProductAPI::class, $apiClient->product);
        self::assertInstanceOf(SubscriptionAPI::class, $apiClient->subscription);
    }

    /**
     * @return void
     *
     * @throws Exception
     * @throws Pax8APIException
     * @throws ExceptionInterface
     */
    public function testAuthenticate(): void
    {
        $apiClientMock = $this->createMock(APIClient::class);
        $accessToken = new AccessToken();
        $accessToken->setAccessToken('test_access_token');

        $apiClientMock->expects($this->once())
            ->method('call')
            // @phpcs:ignore
            ->with('POST', 'token', [], '{"client_id":"client.id","client_secret":"client.secret","audience":"api:\/\/p8p.client","grant_type":"client_credentials"}')
            ->willReturn('token');

        $apiClientMock->expects(self::once())
            ->method('denormalize')
            ->with('token', AccessToken::class)
            ->willReturn($accessToken);

        $pax8Client = new Pax8APIClient($apiClientMock);
        $authenticateResult = $pax8Client->authenticate('client.id', 'client.secret');

        self::assertInstanceOf(AccessToken::class, $authenticateResult);
        self::assertSame($accessToken->getAccessToken(), $authenticateResult->getAccessToken());
    }
}
