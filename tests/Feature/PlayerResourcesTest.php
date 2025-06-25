<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Player Resources', function () {
    it('can create PlayerChanges resource', function () {
        $resource = MlbStats::playerChanges();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PlayerChanges::class);
    });

    it('can create PlayerGameStats resource', function () {
        $resource = MlbStats::playerGameStats(571912, 663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PlayerGameStats::class);
    });

    it('can create PlayerFreeAgents resource', function () {
        $resource = MlbStats::playerFreeAgents();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PlayerFreeAgents::class);
    });

    it('can create PlayerStatusCodes resource', function () {
        $resource = MlbStats::playerStatusCodes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PlayerStatusCodes::class);
    });

    it('can create PlayerStats resource', function () {
        $resource = MlbStats::playerStats(571912);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PlayerStats::class);
    });
});

describe('Position Resources', function () {
    it('can create Positions resource', function () {
        $resource = MlbStats::positions();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Positions::class);
    });
});

describe('Props Predictions Resources', function () {
    it('can create PropsPredictions resource', function () {
        $resource = MlbStats::propsPredictions();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PropsPredictions::class);
    });

    it('can create PropsPredictionsAdjust resource', function () {
        $resource = MlbStats::propsPredictionsAdjust();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PropsPredictionsAdjust::class);
    });
});
