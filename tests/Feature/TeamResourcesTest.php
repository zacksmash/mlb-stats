<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Team Basic Resources', function () {
    it('can create Team resource', function () {
        $resource = MlbStats::team(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Team::class);
    });

    it('can create Teams resource', function () {
        $resource = MlbStats::teams();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Teams::class);
    });
});

describe('Team Information Resources', function () {
    it('can create TeamAffiliates resource', function () {
        $resource = MlbStats::teamAffiliates(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamAffiliates::class);
    });

    it('can create TeamAlumni resource', function () {
        $resource = MlbStats::teamAlumni(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamAlumni::class);
    });

    it('can create TeamCoaches resource', function () {
        $resource = MlbStats::teamCoaches(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamCoaches::class);
    });

    it('can create TeamHistory resource', function () {
        $resource = MlbStats::teamHistory(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamHistory::class);
    });

    it('can create TeamPersonnel resource', function () {
        $resource = MlbStats::teamPersonnel(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamPersonnel::class);
    });
});

describe('Team Stats and Leadership Resources', function () {
    it('can create TeamLeaders resource', function () {
        $resource = MlbStats::teamLeaders(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamLeaders::class);
    });

    it('can create TeamStats resource', function () {
        $resource = MlbStats::teamStats(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamStats::class);
    });
});
