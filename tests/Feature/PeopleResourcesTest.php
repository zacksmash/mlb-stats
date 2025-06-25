<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('People Resources', function () {
    it('can create People resource', function () {
        $resource = MlbStats::people();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\People::class);
    });

    it('can create PeopleSearch resource', function () {
        $resource = MlbStats::peopleSearch();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PeopleSearch::class);
    });

    it('can create Person resource', function () {
        $resource = MlbStats::person(571912);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Person::class);
    });

    it('can create PersonAward resource', function () {
        $resource = MlbStats::personAward(571912);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PersonAward::class);
    });

    it('can create PersonStatsMetrics resource', function () {
        $resource = MlbStats::personStatsMetrics(571912);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PersonStatsMetrics::class);
    });
});

describe('Performer Resources', function () {
    it('can create PerformerTypes resource', function () {
        $resource = MlbStats::performerTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PerformerTypes::class);
    });
});

describe('Pitch Resources', function () {
    it('can create PitchCodes resource', function () {
        $resource = MlbStats::pitchCodes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PitchCodes::class);
    });

    it('can create PitchTypes resource', function () {
        $resource = MlbStats::pitchTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PitchTypes::class);
    });
});

describe('Platform Resources', function () {
    it('can create Platforms resource', function () {
        $resource = MlbStats::platforms();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Platforms::class);
    });
});
