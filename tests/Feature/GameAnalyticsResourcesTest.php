<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Game Analytics Resources', function () {
    it('can create GameAnalytics resource', function () {
        $resource = MlbStats::gameAnalytics();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameAnalytics::class);
    });

    it('can create GameAnalyticsGuids resource', function () {
        $resource = MlbStats::gameAnalyticsGuids();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameAnalyticsGuids::class);
    });

    it('can create GameGuidAnalytics resource', function () {
        $resource = MlbStats::gameGuidAnalytics(663149, 'guid123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameGuidAnalytics::class);
    });

    it('can create GameGuids resource', function () {
        $resource = MlbStats::gameGuids(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameGuids::class);
    });
});

describe('Game Basic Resources', function () {
    it('can create GameBoxscore resource', function () {
        $resource = MlbStats::gameBoxscore(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameBoxscore::class);
    });

    it('can create GameChanges resource', function () {
        $resource = MlbStats::gameChanges();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameChanges::class);
    });

    it('can create GameContent resource', function () {
        $resource = MlbStats::gameContent(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameContent::class);
    });

    it('can create GameLastPitch resource', function () {
        $resource = MlbStats::gameLastPitch();

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameLastPitch::class);
    });
});

describe('Game Color Feed Resources', function () {
    it('can create GameColorFeed resource', function () {
        $resource = MlbStats::gameColorFeed(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameColorFeed::class);
    });

    it('can create GameColorFeedTimestamps resource', function () {
        $resource = MlbStats::gameColorFeedTimestamps(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameColorFeedTimestamps::class);
    });
});
