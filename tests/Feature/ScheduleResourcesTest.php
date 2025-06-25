<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Schedule Basic Resources', function () {
    it('can create Schedule resource', function () {
        $resource = MlbStats::schedule();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
    });

    it('can create ScheduleEventTypes resource', function () {
        $resource = MlbStats::scheduleEventTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\ScheduleEventTypes::class);
    });

    it('can create ScheduleType resource', function () {
        $resource = MlbStats::scheduleType('regular');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\ScheduleType::class);
    });

    it('can create ScheduleTypes resource', function () {
        $resource = MlbStats::scheduleTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\ScheduleTypes::class);
    });
});

describe('Schedule Postseason Resources', function () {
    it('can create SchedulePostSeasonTuneIn resource', function () {
        $resource = MlbStats::schedulePostSeasonTuneIn();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\SchedulePostSeasonTuneIn::class);
    });

    it('can create SchedulePostseason resource', function () {
        $resource = MlbStats::schedulePostseason();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\SchedulePostseason::class);
    });

    it('can create SchedulePostseasonSeries resource', function () {
        $resource = MlbStats::schedulePostseasonSeries();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\SchedulePostseasonSeries::class);
    });
});

describe('Schedule Special Resources', function () {
    it('can create ScheduleTiedGames resource', function () {
        $resource = MlbStats::scheduleTiedGames();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\ScheduleTiedGames::class);
    });

    it('can create ScheduleTrackingEvents resource', function () {
        $resource = MlbStats::scheduleTrackingEvents();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\ScheduleTrackingEvents::class);
    });
});
