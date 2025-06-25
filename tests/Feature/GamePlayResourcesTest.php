<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Game Play Resources', function () {
    it('can create GamePace resource', function () {
        $resource = MlbStats::gamePace();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePace::class);
    });

    it('can create GamePlayBiomechanics resource', function () {
        $resource = MlbStats::gamePlayBiomechanics(663149, 'play123', 1);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePlayBiomechanics::class);
    });

    it('can create GamePlayByPlay resource', function () {
        $resource = MlbStats::gamePlayByPlay(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePlayByPlay::class);
    });

    it('can create GamePlaySkeletalChunked resource', function () {
        $resource = MlbStats::gamePlaySkeletalChunked(663149, 'play123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePlaySkeletalChunked::class);
    });

    it('can create GamePlaySkeletalFiles resource', function () {
        $resource = MlbStats::gamePlaySkeletalFiles(663149, 'play123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePlaySkeletalFiles::class);
    });
});

describe('Game Status and Type Resources', function () {
    it('can create GameStatuses resource', function () {
        $resource = MlbStats::gameStatuses();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameStatuses::class);
    });

    it('can create GameTypes resource', function () {
        $resource = MlbStats::gameTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameTypes::class);
    });

    it('can create GamedayTypes resource', function () {
        $resource = MlbStats::gamedayTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamedayTypes::class);
    });
});

describe('Game Win Probability Resources', function () {
    it('can create GameWinProbability resource', function () {
        $resource = MlbStats::gameWinProbability(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameWinProbability::class);
    });
});
