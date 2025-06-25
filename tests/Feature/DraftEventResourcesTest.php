<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Draft Resources', function () {
    it('can create Draft resource with no year', function () {
        $resource = MlbStats::draft();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Draft::class);
    });

    it('can create Draft resource with year', function () {
        $resource = MlbStats::draft(2024);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Draft::class);
    });

    it('can create DraftLatest resource', function () {
        $resource = MlbStats::draftLatest(2024);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\DraftLatest::class);
    });

    it('can create DraftProspects resource', function () {
        $resource = MlbStats::draftProspects(2024);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\DraftProspects::class);
    });
});

describe('Event Resources', function () {
    it('can create EventStatuses resource', function () {
        $resource = MlbStats::eventStatuses();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\EventStatuses::class);
    });

    it('can create EventTypes resource', function () {
        $resource = MlbStats::eventTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\EventTypes::class);
    });
});

describe('Detail Type Resources', function () {
    it('can create FielderDetailTypes resource', function () {
        $resource = MlbStats::fielderDetailTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\FielderDetailTypes::class);
    });

    it('can create FreeGameTypes resource', function () {
        $resource = MlbStats::freeGameTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\FreeGameTypes::class);
    });
});
