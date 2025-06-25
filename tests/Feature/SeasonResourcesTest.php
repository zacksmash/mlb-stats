<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Season Resources', function () {
    it('can create Season resource', function () {
        $resource = MlbStats::season('2024');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Season::class);
    });

    it('can create Seasons resource', function () {
        $resource = MlbStats::seasons();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Seasons::class);
    });

    it('can create SeasonsAll resource', function () {
        $resource = MlbStats::seasonsAll();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\SeasonsAll::class);
    });
});

describe('Situation Code Resources', function () {
    it('can create SitCodes resource', function () {
        $resource = MlbStats::sitCodes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\SitCodes::class);
    });

    it('can create Sky resource', function () {
        $resource = MlbStats::sky();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Sky::class);
    });
});

describe('Sort Resources', function () {
    it('can create SortModifiers resource', function () {
        $resource = MlbStats::sortModifiers();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\SortModifiers::class);
    });
});
