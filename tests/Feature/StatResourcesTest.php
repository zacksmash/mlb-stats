<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Stat Field Resources', function () {
    it('can create StatFields resource', function () {
        $resource = MlbStats::statFields();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatFields::class);
    });

    it('can create StatGroups resource', function () {
        $resource = MlbStats::statGroups();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatGroups::class);
    });

    it('can create StatTypes resource', function () {
        $resource = MlbStats::statTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatTypes::class);
    });
});

describe('Statcast Resources', function () {
    it('can create StatcastPositionTypes resource', function () {
        $resource = MlbStats::statcastPositionTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatcastPositionTypes::class);
    });
});

describe('Stats Basic Resources', function () {
    it('can create Stats resource', function () {
        $resource = MlbStats::stats();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
    });

    it('can create StatsGrouped resource', function () {
        $resource = MlbStats::statsGrouped();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsGrouped::class);
    });

    it('can create StatsLeaders resource', function () {
        $resource = MlbStats::statsLeaders();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsLeaders::class);
    });
});
