<?php

namespace Zacksmash\MlbStats\Exceptions;

use Exception;
use Illuminate\Http\Client\Response;

class RequestFailedException extends Exception
{
    public function __construct($response)
    {
        $reason = $response instanceof Response
            ? json_decode($response->body(), true)
            : $response;

        $error = $reason['message']
            ?? $this->getMessageFromStatusCode($response->status())
            ?? "Unknown error - check the endpoint you\'re attempting to access and try again.";

        parent::__construct('Request failed: '.$error);
    }

    private function getMessageFromStatusCode($code)
    {
        $messages = match ($code) {
            400 => 'Bad Request - The request was invalid or cannot be served.',
            401 => 'Unauthorized - Authentication credentials were missing or incorrect.',
            403 => 'Forbidden - The request is understood, but it has been refused or access is not allowed.',
            404 => 'Not Found - The requested resource could not be found.',
            500 => 'Internal Server Error - An error occurred on the server side.',
            default => null
        };

        return "{$code} | $messages";
    }
}
