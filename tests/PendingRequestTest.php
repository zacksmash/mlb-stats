<?php

use Zacksmash\MlbStats\MlbStatsPendingRequest;

describe('MlbStatsPendingRequest', function () {
    it('can be created with basic parameters', function () {
        $request = new MlbStatsPendingRequest('teams');

        expect($request->endpoint)->toBe('teams');
        expect($request->query)->toBe([]);
        expect($request->version)->toBe('v1');
        expect($request->method)->toBe('GET');
    });

    it('can be created with custom parameters', function () {
        $request = new MlbStatsPendingRequest(
            endpoint: 'teams',
            query: ['season' => 2024],
            version: 'v1.1',
            method: 'POST'
        );

        expect($request->endpoint)->toBe('teams');
        expect($request->query)->toBe(['season' => 2024]);
        expect($request->version)->toBe('v1.1');
        expect($request->method)->toBe('POST');
    });

    it('generates correct path', function () {
        $request = new MlbStatsPendingRequest('teams');
        expect($request->getPath())->toBe('/v1/teams');

        $requestWithVersion = new MlbStatsPendingRequest('teams', version: 'v2');
        expect($requestWithVersion->getPath())->toBe('/v2/teams');
    });

    it('generates correct query string', function () {
        $request = new MlbStatsPendingRequest('teams', ['season' => 2024, 'limit' => 10]);
        expect($request->getQueryString())->toBe('season=2024&limit=10');

        $emptyRequest = new MlbStatsPendingRequest('teams');
        expect($emptyRequest->getQueryString())->toBe('');
    });

    it('generates correct URL', function () {
        $request = new MlbStatsPendingRequest('teams', ['season' => 2024]);
        expect($request->getUrl())->toBe('/v1/teams?season=2024');

        $requestWithoutQuery = new MlbStatsPendingRequest('teams');
        expect($requestWithoutQuery->getUrl())->toBe('/v1/teams');
    });

    it('converts to array correctly', function () {
        $request = new MlbStatsPendingRequest('teams', ['season' => 2024]);
        $array = $request->toArray();

        expect($array)->toHaveKeys(['endpoint', 'query', 'version', 'method', 'path', 'url']);
        expect($array['endpoint'])->toBe('teams');
        expect($array['query'])->toBe(['season' => 2024]);
        expect($array['path'])->toBe('/v1/teams');
        expect($array['url'])->toBe('/v1/teams?season=2024');
    });

    it('validates endpoint', function () {
        expect(fn () => new MlbStatsPendingRequest(''))->toThrow(InvalidArgumentException::class);
        expect(fn () => new MlbStatsPendingRequest('   '))->toThrow(InvalidArgumentException::class);
    });

    it('validates version format', function () {
        expect(fn () => new MlbStatsPendingRequest('teams', version: 'invalid'))
            ->toThrow(InvalidArgumentException::class);
        expect(fn () => new MlbStatsPendingRequest('teams', version: '1'))
            ->toThrow(InvalidArgumentException::class);

        // Valid versions should work (test by creating them without exception)
        $request1 = new MlbStatsPendingRequest('teams', version: 'v1');
        expect($request1->version)->toBe('v1');

        $request2 = new MlbStatsPendingRequest('teams', version: 'v1.1');
        expect($request2->version)->toBe('v1.1');

        $request3 = new MlbStatsPendingRequest('teams', version: 'v2.0');
        expect($request3->version)->toBe('v2.0');
    });

    it('validates HTTP method', function () {
        expect(fn () => new MlbStatsPendingRequest('teams', method: 'INVALID'))
            ->toThrow(InvalidArgumentException::class);

        // Valid methods should work
        $validMethods = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'];
        foreach ($validMethods as $method) {
            $request = new MlbStatsPendingRequest('teams', method: $method);
            expect($request->method)->toBe($method);
        }

        // Case insensitive (should be validated but not normalized)
        $request = new MlbStatsPendingRequest('teams', method: 'get');
        expect($request->method)->toBe('get');
    });
});
