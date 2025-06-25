<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Stats Advanced Resources', function () {
    it('can create StatsMetrics resource', function () {
        $resource = MlbStats::statsMetrics();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsMetrics::class);
    });

    it('can create StatsOutsAboveAverage resource', function () {
        $resource = MlbStats::statsOutsAboveAverage();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsOutsAboveAverage::class);
    });

    it('can create StatsSprayChart resource', function () {
        $resource = MlbStats::statsSprayChart();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsSprayChart::class);
    });

    it('can create StatsStolenBaseProbability resource', function () {
        $resource = MlbStats::statsStolenBaseProbability();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStolenBaseProbability::class);
    });
});

describe('Stats Search Resources', function () {
    it('can create StatsSearch resource', function () {
        $resource = MlbStats::statsSearch();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsSearch::class);
    });

    it('can create StatsSearchBeast resource', function () {
        $resource = MlbStats::statsSearchBeast();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsSearchBeast::class);
    });

    it('can create StatsSearchConfig resource', function () {
        $resource = MlbStats::statsSearchConfig();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsSearchConfig::class);
    });

    it('can create StatsSearchGroupByTypes resource', function () {
        $resource = MlbStats::statsSearchGroupByTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsSearchGroupByTypes::class);
    });

    it('can create StatsSearchParams resource', function () {
        $resource = MlbStats::statsSearchParams();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsSearchParams::class);
    });
});

describe('Streak Resources', function () {
    it('can create StreakTypes resource', function () {
        $resource = MlbStats::streakTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StreakTypes::class);
    });

    it('can create Streaks resource', function () {
        $resource = MlbStats::streaks();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Streaks::class);
    });
});
