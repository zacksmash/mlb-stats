<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('League Resources', function () {
    it('can create League resource', function () {
        $resource = MlbStats::league(103);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\League::class);
    });

    it('can create Leagues resource', function () {
        $resource = MlbStats::leagues();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Leagues::class);
    });

    it('can create LeagueLeaderTypes resource', function () {
        $resource = MlbStats::leagueLeaderTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LeagueLeaderTypes::class);
    });
});

describe('League All Star Resources', function () {
    it('can create LeagueAllStarBallot resource', function () {
        $resource = MlbStats::leagueAllStarBallot(103);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LeagueAllStarBallot::class);
    });

    it('can create LeagueAllStarFinalVote resource', function () {
        $resource = MlbStats::leagueAllStarFinalVote(103);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LeagueAllStarFinalVote::class);
    });

    it('can create LeagueAllStarWriteIns resource', function () {
        $resource = MlbStats::leagueAllStarWriteIns(103);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LeagueAllStarWriteIns::class);
    });

    it('can create LeaguesAllStarBallot resource', function () {
        $resource = MlbStats::leaguesAllStarBallot();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LeaguesAllStarBallot::class);
    });
});

describe('Logical Events and Lookup Resources', function () {
    it('can create LogicalEvents resource', function () {
        $resource = MlbStats::logicalEvents();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LogicalEvents::class);
    });

    it('can create LookupValues resource', function () {
        $resource = MlbStats::lookupValues();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LookupValues::class);
    });
});
