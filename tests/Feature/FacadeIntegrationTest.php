<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('MlbStats Facade Integration', function () {
    it('can instantiate all resources without errors', function () {
        // Test a sample of resources to ensure the facade works correctly
        expect(MlbStats::schedule())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        expect(MlbStats::teams())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Teams::class);
        expect(MlbStats::stats())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
        expect(MlbStats::standings('regularSeason'))->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Standings::class);
    });

    it('handles resources with parameters correctly', function () {
        // Test resources that require parameters
        expect(MlbStats::team(147))->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Team::class);
        expect(MlbStats::person(571912))->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Person::class);
        expect(MlbStats::gameBoxscore(663149))->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameBoxscore::class);
        expect(MlbStats::venue(2602))->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Venue::class);
    });

    it('handles resources with multiple parameters correctly', function () {
        // Test resources that require multiple parameters
        expect(MlbStats::batTrackingByPlay(663149, 'play123'))
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\BatTrackingByPlay::class);

        expect(MlbStats::gamePlayBiomechanics(663149, 'play123', 1))
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePlayBiomechanics::class);

        expect(MlbStats::teamRosterType(147, 'active'))
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamRosterType::class);
    });

    it('handles optional parameters correctly', function () {
        // Test resources with optional parameters
        expect(MlbStats::allSportBallot())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\AllSportBallot::class);
        expect(MlbStats::allSportBallot(2))->toBeInstanceOf(\Zacksmash\MlbStats\Resources\AllSportBallot::class);
        expect(MlbStats::draft())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Draft::class);
        expect(MlbStats::draft(2024))->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Draft::class);
    });
});
