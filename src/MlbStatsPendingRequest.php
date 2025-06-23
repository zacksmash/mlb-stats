<?php

namespace Zacksmash\MlbStats;

/**
 * Represents a pending HTTP request to the MLB Stats API.
 *
 * This immutable value object encapsulates all the information needed
 * to make an HTTP request to the MLB Stats API.
 */
readonly class MlbStatsPendingRequest
{
    public function __construct(
        public string $endpoint,
        public array $query = [],
        public string $version = 'v1',
        public string $method = 'GET'
    ) {
        $this->validateEndpoint();
        $this->validateVersion();
        $this->validateMethod();
    }

    /**
     * Get the full URL path for this request.
     */
    public function getPath(): string
    {
        return "/{$this->version}/{$this->endpoint}";
    }

    /**
     * Get the query string for this request.
     */
    public function getQueryString(): string
    {
        return http_build_query($this->query);
    }

    /**
     * Get the full URL for this request (without domain).
     */
    public function getUrl(): string
    {
        $path = $this->getPath();
        $queryString = $this->getQueryString();

        return $queryString ? "{$path}?{$queryString}" : $path;
    }

    /**
     * Convert to array representation.
     */
    public function toArray(): array
    {
        return [
            'endpoint' => $this->endpoint,
            'query' => $this->query,
            'version' => $this->version,
            'method' => $this->method,
            'path' => $this->getPath(),
            'url' => $this->getUrl(),
        ];
    }

    /**
     * Validate the endpoint.
     */
    private function validateEndpoint(): void
    {
        if (empty(trim($this->endpoint))) {
            throw new InvalidArgumentException('Endpoint cannot be empty.');
        }
    }

    /**
     * Validate the API version.
     */
    private function validateVersion(): void
    {
        if (! preg_match('/^v\d+(\.\d+)?$/', $this->version)) {
            throw new \InvalidArgumentException("Invalid API version format: {$this->version}");
        }
    }

    /**
     * Validate the HTTP method.
     */
    private function validateMethod(): void
    {
        $allowedMethods = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'];

        if (! in_array(strtoupper($this->method), $allowedMethods, true)) {
            throw new \InvalidArgumentException("Invalid HTTP method: {$this->method}");
        }
    }
}
