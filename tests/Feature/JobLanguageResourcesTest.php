<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Job Resources', function () {
    it('can create JobTypes resource', function () {
        $resource = MlbStats::jobTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\JobTypes::class);
    });

    it('can create Jobs resource', function () {
        $resource = MlbStats::jobs();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Jobs::class);
    });

    it('can create JobsDatacasters resource', function () {
        $resource = MlbStats::jobsDatacasters();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\JobsDatacasters::class);
    });

    it('can create JobsOfficialScorers resource', function () {
        $resource = MlbStats::jobsOfficialScorers();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\JobsOfficialScorers::class);
    });

    it('can create JobsUmpireSchedule resource', function () {
        $resource = MlbStats::jobsUmpireSchedule(12345);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\JobsUmpireSchedule::class);
    });

    it('can create JobsUmpires resource', function () {
        $resource = MlbStats::jobsUmpires();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\JobsUmpires::class);
    });
});

describe('Language Resources', function () {
    it('can create Languages resource', function () {
        $resource = MlbStats::languages();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Languages::class);
    });
});
