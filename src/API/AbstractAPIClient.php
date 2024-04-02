<?php

namespace Inserve\Pax8API\API;

use Inserve\Pax8API\Client\APIClient;
use SensitiveParameter;

/**
 *
 */
abstract class AbstractAPIClient
{
    /**
     * @param APIClient $apiClient
     */
    public function __construct(#[SensitiveParameter] protected APIClient $apiClient)
    {
    }
}
