<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Media Resources', function () {
    it('can create MediaStateTypes resource', function () {
        $resource = MlbStats::mediaStateTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\MediaStateTypes::class);
    });
});

describe('Metrics Resources', function () {
    it('can create Metrics resource', function () {
        $resource = MlbStats::metrics();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Metrics::class);
    });
});

describe('Milestone Resources', function () {
    it('can create MilestoneDurations resource', function () {
        $resource = MlbStats::milestoneDurations();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\MilestoneDurations::class);
    });

    it('can create MilestoneLookups resource', function () {
        $resource = MlbStats::milestoneLookups();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\MilestoneLookups::class);
    });

    it('can create MilestoneStatistics resource', function () {
        $resource = MlbStats::milestoneStatistics();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\MilestoneStatistics::class);
    });

    it('can create MilestoneTypes resource', function () {
        $resource = MlbStats::milestoneTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\MilestoneTypes::class);
    });

    it('can create Milestones resource', function () {
        $resource = MlbStats::milestones();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Milestones::class);
    });
});

describe('Mound Visit Resources', function () {
    it('can create MoundVisitTypes resource', function () {
        $resource = MlbStats::moundVisitTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\MoundVisitTypes::class);
    });
});
