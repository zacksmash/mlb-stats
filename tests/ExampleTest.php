<?php

use Zacksmash\MlbStats\Facades\MlbStats;
use Zacksmash\MlbStats\MlbStats as MlbStatsClient;

describe('MLB Stats Package', function () {
    it('can instantiate the main client class', function () {
        $client = new MlbStatsClient;

        expect($client)->toBeInstanceOf(MlbStatsClient::class);
    });

    it('can access resources through the facade', function () {
        expect(MlbStats::schedule())
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
    });

    it('provides comprehensive API coverage', function () {
        $reflection = new ReflectionClass(MlbStatsClient::class);
        $methods = $reflection->getMethods(ReflectionMethod::IS_PUBLIC);

        // Filter out magic methods and constructor
        $resourceMethods = array_filter($methods, function ($method) {
            return ! str_starts_with($method->getName(), '__');
        });

        // Should have a substantial number of resource methods
        expect(count($resourceMethods))->toBeGreaterThan(150);
    });
});
