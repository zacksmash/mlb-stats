<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Broadcast Resources', function () {
    it('can create BroadcastAvailability resource', function () {
        $resource = MlbStats::broadcastAvailability();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\BroadcastAvailability::class);
    });

    it('can create Broadcasters resource', function () {
        $resource = MlbStats::broadcasters();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Broadcasters::class);
    });

    it('can create Broadcasts resource', function () {
        $resource = MlbStats::broadcasts();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Broadcasts::class);
    });
});

describe('Conference and Division Resources', function () {
    it('can create Conference resource with ID', function () {
        $resource = MlbStats::conference(1);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Conference::class);
    });

    it('can create Conferences resource', function () {
        $resource = MlbStats::conferences();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Conferences::class);
    });

    it('can create Division resource with ID', function () {
        $resource = MlbStats::division(201);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Division::class);
    });

    it('can create Divisions resource', function () {
        $resource = MlbStats::divisions();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Divisions::class);
    });
});

describe('Coaching and Video Resources', function () {
    it('can create CoachingVideoTypes resource', function () {
        $resource = MlbStats::coachingVideoTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\CoachingVideoTypes::class);
    });
});
