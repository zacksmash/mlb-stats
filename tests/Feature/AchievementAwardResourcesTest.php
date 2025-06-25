<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Achievement and Award Resources', function () {
    it('can create AchievementStatuses resource', function () {
        $resource = MlbStats::achievementStatuses();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\AchievementStatuses::class);
    });

    it('can create Award resource with award ID', function () {
        $resource = MlbStats::award('AWARD_123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Award::class);
    });

    it('can create AwardRecipients resource with award ID', function () {
        $resource = MlbStats::awardRecipients('AWARD_123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\AwardRecipients::class);
    });

    it('can create Awards resource', function () {
        $resource = MlbStats::awards();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Awards::class);
    });
});

describe('All Sport and Attendance Resources', function () {
    it('can create AllSportBallot resource with default sport ID', function () {
        $resource = MlbStats::allSportBallot();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\AllSportBallot::class);
    });

    it('can create AllSportBallot resource with custom sport ID', function () {
        $resource = MlbStats::allSportBallot(2);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\AllSportBallot::class);
    });

    it('can create Attendance resource', function () {
        $resource = MlbStats::attendance();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Attendance::class);
    });
});

describe('Baseball Stats Resources', function () {
    it('can create BaseballStats resource', function () {
        $resource = MlbStats::baseballStats();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\BaseballStats::class);
    });

    it('can create BatTrackingByPlay resource', function () {
        $resource = MlbStats::batTrackingByPlay(663149, 'play123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\BatTrackingByPlay::class);
    });
});
