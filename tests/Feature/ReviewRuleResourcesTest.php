<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Review Resources', function () {
    it('can create ReviewReasons resource', function () {
        $resource = MlbStats::reviewReasons();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\ReviewReasons::class);
    });

    it('can create Reviews resource', function () {
        $resource = MlbStats::reviews();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Reviews::class);
    });
});

describe('Roof and Roster Resources', function () {
    it('can create RoofTypes resource', function () {
        $resource = MlbStats::roofTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\RoofTypes::class);
    });

    it('can create RosterTypes resource', function () {
        $resource = MlbStats::rosterTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\RosterTypes::class);
    });
});

describe('Rule Resources', function () {
    it('can create RuleSettings resource', function () {
        $resource = MlbStats::ruleSettings();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\RuleSettings::class);
    });

    it('can create RunnerDetailTypes resource', function () {
        $resource = MlbStats::runnerDetailTypes();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\RunnerDetailTypes::class);
    });
});
