<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Sport Resources', function () {
    it('can create Sport resource', function () {
        $resource = MlbStats::sport(1);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Sport::class);
    });

    it('can create SportPlayers resource', function () {
        $resource = MlbStats::sportPlayers(1);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\SportPlayers::class);
    });

    it('can create Sports resource', function () {
        $resource = MlbStats::sports(1);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Sports::class);
    });
});

describe('Standings Resources', function () {
    it('can create Standings resource', function () {
        $resource = MlbStats::standings('regularSeason');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Standings::class);
    });

    it('can create StandingsTypes resource', function () {
        $resource = MlbStats::standingsTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StandingsTypes::class);
    });
});
