<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Weather Resources', function () {
    it('can create WeatherBasic resource', function () {
        $resource = MlbStats::weatherBasic(2602);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\WeatherBasic::class);
    });

    it('can create WeatherByPlay resource', function () {
        $resource = MlbStats::weatherByPlay(663149, 'play123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\WeatherByPlay::class);
    });

    it('can create WeatherForecast resource', function () {
        $resource = MlbStats::weatherForecast(663149, 'open');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\WeatherForecast::class);
    });

    it('can create WeatherFull resource', function () {
        $resource = MlbStats::weatherFull(2602);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\WeatherFull::class);
    });

    it('can create WeatherTrajectoryConfidences resource', function () {
        $resource = MlbStats::weatherTrajectoryConfidences();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\WeatherTrajectoryConfidences::class);
    });
});

describe('Wind Resources', function () {
    it('can create WindDirection resource', function () {
        $resource = MlbStats::windDirection();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\WindDirection::class);
    });
});
