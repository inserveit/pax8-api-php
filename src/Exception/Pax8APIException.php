<?php

namespace Inserve\Pax8API\Exception;

use Exception;
use Inserve\Pax8API\Models\ErrorResponse;

/**
 *
 */
final class Pax8APIException extends Exception
{
    /**
     * @param string             $message
     * @param int                $code
     * @param ErrorResponse|null $errorResponse
     */
    public function __construct(string $message = '', int $code = 0, protected ?ErrorResponse $errorResponse = null)
    {
        parent::__construct($message, $code);
    }
}
