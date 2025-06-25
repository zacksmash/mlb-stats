<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Team Roster Resources', function () {
    it('can create TeamRoster resource', function () {
        $resource = MlbStats::teamRoster(147);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamRoster::class);
    });

    it('can create TeamRosterType resource', function () {
        $resource = MlbStats::teamRosterType(147, 'active');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamRosterType::class);
    });
});

describe('Teams Aggregate Resources', function () {
    it('can create TeamsAffiliates resource', function () {
        $resource = MlbStats::teamsAffiliates();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamsAffiliates::class);
    });

    it('can create TeamsHistory resource', function () {
        $resource = MlbStats::teamsHistory();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamsHistory::class);
    });

    it('can create TeamsStats resource', function () {
        $resource = MlbStats::teamsStats();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamsStats::class);
    });

    it('can create TeamsStatsLeaders resource', function () {
        $resource = MlbStats::teamsStatsLeaders();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamsStatsLeaders::class);
    });
});
