<?php

namespace Inserve\Pax8API\API;

use Inserve\Pax8API\Exception\Pax8APIException;
use Inserve\Pax8API\Models\Company;
use Inserve\Pax8API\Models\PaginatedCompanyResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class CompanyAPI extends AbstractAPIClient
{
    /**
     * @param string $companyId
     *
     * @return Company|null
     *
     * @throws Pax8APIException|ExceptionInterface
     */
    public function get(string $companyId): ?Company
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('companies/%s', $companyId)
        );

        /** @var Company|null */
        return $this->apiClient->denormalize($response, Company::class);
    }

    /**
     * @param int $limit
     * @param int $offset
     *
     * @return PaginatedCompanyResponse|null
     *
     * @throws ExceptionInterface
     * @throws Pax8APIException
     */
    public function list(int $limit = 25, int $offset = 0): ?PaginatedCompanyResponse
    {
        $url = sprintf('companies?%s', http_build_query(['page' => $offset, 'size' => $limit]));
        $response = $this->apiClient->call(
            'GET',
            $url
        );

        /** @var PaginatedCompanyResponse|null */
        return $this->apiClient->denormalize($response, PaginatedCompanyResponse::class);
    }
}
