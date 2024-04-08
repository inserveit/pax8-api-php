<?php

namespace Inserve\Pax8API;

use GuzzleHttp\Client;
use Inserve\Pax8API\API\CompanyAPI;
use Inserve\Pax8API\API\ProductAPI;
use Inserve\Pax8API\API\SubscriptionAPI;
use Inserve\Pax8API\Client\APIClient;
use Inserve\Pax8API\Models\AccessToken;
use Psr\Log\LoggerInterface;
use SensitiveParameter;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * @property CompanyAPI      $company
 * @property ProductAPI      $product
 * @property SubscriptionAPI $subscription
 */
class Pax8APIClient
{
    protected APIClient $apiClient;

    /**
     * @param APIClient|null       $apiClient
     * @param LoggerInterface|null $logger
     */
    public function __construct(?APIClient $apiClient = null, ?LoggerInterface $logger = null)
    {
        if (! $apiClient) {
            $apiClient = new APIClient(
                new Client(['base_uri' => 'https://api.pax8.com'])
            );
        }

        if ($logger) {
            $apiClient->setLogger($logger);
        }

        $this->apiClient = $apiClient;
    }

    /**
     * @param string        $name
     * @param array<string> $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments): mixed
    {
        return $this->__get($name);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name): mixed
    {
        $fqdnClass = sprintf('%s\\API\\%sAPI', __NAMESPACE__, ucfirst($name));

        if (class_exists($fqdnClass)) {
            return new $fqdnClass($this->apiClient);
        }

        return null;
    }

    /**
     * @param string $clientId
     * @param string $clientSecret
     *
     * @return AccessToken|null
     *
     * @throws Exception\Pax8APIException
     * @throws ExceptionInterface
     */
    public function authenticate(string $clientId, #[SensitiveParameter] string $clientSecret): ?AccessToken
    {
        $loginData = [
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'audience' => 'api://p8p.client',
            'grant_type' => 'client_credentials',
        ];

        $tokenResponse = $this->apiClient->call(
            method: 'POST',
            url: 'token',
            body: (string) json_encode($loginData)
        );

        /** @var AccessToken|null $accessToken */
        $accessToken = $this->apiClient->denormalize($tokenResponse, AccessToken::class);
        if ($accessToken instanceof AccessToken) {
            $this->apiClient->setAccessToken($accessToken);
        }

        return $accessToken;
    }
}
