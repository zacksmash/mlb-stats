<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Group and High Low Resources', function () {
    it('can create GroupByTypes resource', function () {
        $resource = MlbStats::groupByTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GroupByTypes::class);
    });

    it('can create HighLow resource', function () {
        $resource = MlbStats::highLow('season');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HighLow::class);
    });

    it('can create HighLowTypes resource', function () {
        $resource = MlbStats::highLowTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HighLowTypes::class);
    });
});

describe('Hit Trajectory Resources', function () {
    it('can create HitTrajectories resource', function () {
        $resource = MlbStats::hitTrajectories();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HitTrajectories::class);
    });
});

describe('Home Run Derby Resources', function () {
    it('can create HomeRunDerby resource', function () {
        $resource = MlbStats::homeRunDerby();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerby::class);
    });

    it('can create HomeRunDerbyBracket resource', function () {
        $resource = MlbStats::homeRunDerbyBracket();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerbyBracket::class);
    });

    it('can create HomeRunDerbyMixed resource', function () {
        $resource = MlbStats::homeRunDerbyMixed(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerbyMixed::class);
    });

    it('can create HomeRunDerbyPool resource', function () {
        $resource = MlbStats::homeRunDerbyPool(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerbyPool::class);
    });

    it('can create HomeRunDerbyGame resource', function () {
        $resource = MlbStats::homeRunDerbyGame(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerbyGame::class);
    });

    it('can create HomeRunDerbyGameBracket resource', function () {
        $resource = MlbStats::homeRunDerbyGameBracket(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerbyGameBracket::class);
    });

    it('can create HomeRunDerbyGameMixed resource', function () {
        $resource = MlbStats::homeRunDerbyGameMixed(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerbyGameMixed::class);
    });

    it('can create HomeRunDerbyGamePool resource', function () {
        $resource = MlbStats::homeRunDerbyGamePool(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerbyGamePool::class);
    });
});
