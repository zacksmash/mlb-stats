<?php

namespace Zacksmash\MlbStats;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Zacksmash\MlbStats\Attributes\RequiresAllOf;
use Zacksmash\MlbStats\Attributes\RequiresOneOf;

abstract class MlbStatsRequest
{
    protected string $endpoint = '';

    protected string $version = 'v1';

    protected string $method = 'GET';

    protected array $headers = [];

    private array $params = [];

    /**
     * Catch-all for additional parameters.
     */
    public function params(array $params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Send the request to the MLB Stats API.
     */
    public function get(): MlbStatsResponse|array
    {
        return (new MlbStatsClient)->send($this->request());
    }

    /**
     * Get the pending request object before sending it.
     */
    public function request()
    {
        return new MlbStatsPendingRequest(
            method: $this->method,
            version: $this->version,
            endpoint: $this->endpoint,
            query: $this->getQuery(),
            headers: $this->headers
        );
    }

    /**
     * Get the query parameters for the request.
     *
     * This method retrieves the protected properties of the class and merges them
     * with any additional parameters set via the `params` method. It also validates
     * the parameters against the requirements specified in the `Requires*` attribute.
     */
    private function getQuery(): array
    {
        $reflection = new \ReflectionClass($this);

        $props = collect($reflection->getProperties(
            \ReflectionProperty::IS_PROTECTED
        ));

        $props = $props->reject(function ($prop) {
            return collect([
                'endpoint',
                'version',
                'method',
            ])->contains($prop->name);
        });

        // $this->validate($props, $reflection);

        $params = collect([]);

        foreach ($props as $prop) {
            if (filled($this->{$prop->name})) {
                $params[$prop->name] = $this->{$prop->name};
            }
        }

        return $params
            ->merge($this->params)
            ->toArray();
    }

    /**
     * Validate class attributes.
     *
     * This method checks for the `RequiresOneOf` and `RequiresAllOf` attributes and validates
     * the parameters of the class against the requirements specified in the attributes.
     */
    private function validate(Collection $props, \ReflectionClass $reflection): void
    {
        $request = $props->mapWithKeys(
            fn ($prop) => [$prop->name => $this->{$prop->name}]
        );

        // Check RequiresOneOf attributes (at least one parameter required)
        $requiresOneOfAttributes = $reflection->getAttributes(RequiresOneOf::class);
        foreach ($requiresOneOfAttributes as $attribute) {
            $requiresOneOf = $attribute->newInstance();
            $requiresOneOf->validate($request);
        }

        // Check RequiresAllOf attributes (all parameters required)
        $requiresAllOfAttributes = $reflection->getAttributes(RequiresAllOf::class);
        foreach ($requiresAllOfAttributes as $attribute) {
            $requiresAllOf = $attribute->newInstance();
            $requiresAllOf->validate($request);
        }
    }
}
