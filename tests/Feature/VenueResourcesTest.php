<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Venue Resources', function () {
    it('can create Venue resource', function () {
        $resource = MlbStats::venue(2602);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Venue::class);
    });

    it('can create Venues resource', function () {
        $resource = MlbStats::venues();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Venues::class);
    });
});

describe('Video Resources', function () {
    it('can create VideoResolutionTypes resource', function () {
        $resource = MlbStats::videoResolutionTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\VideoResolutionTypes::class);
    });
});

describe('Violation Resources', function () {
    it('can create ViolationTypes resource', function () {
        $resource = MlbStats::violationTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\ViolationTypes::class);
    });
});
