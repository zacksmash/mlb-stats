<?php

use Zacksmash\MlbStats\Facades\MlbStats;

describe('Game Context and Metrics Resources', function () {
    it('can create GameContextMetrics resource', function () {
        $resource = MlbStats::gameContextMetrics(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameContextMetrics::class);
    });

    it('can create GameGuidContextMetrics resource', function () {
        $resource = MlbStats::gameGuidContextMetrics(663149, 'guid123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameGuidContextMetrics::class);
    });

    it('can create GameGuidContextMetricsAverages resource', function () {
        $resource = MlbStats::gameGuidContextMetricsAverages(663149, 'guid123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameGuidContextMetricsAverages::class);
    });

    it('can create GameMetrics resource', function () {
        $resource = MlbStats::gameMetrics(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameMetrics::class);
    });
});

describe('Game Home Run Resources', function () {
    it('can create GameGuidHomeRunBallparks resource', function () {
        $resource = MlbStats::gameGuidHomeRunBallparks(663149, 'guid123');

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameGuidHomeRunBallparks::class);
    });
});

describe('Game Feed Resources', function () {
    it('can create GameLinescore resource', function () {
        $resource = MlbStats::gameLinescore(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameLinescore::class);
    });

    it('can create GameLiveFeed resource', function () {
        $resource = MlbStats::gameLiveFeed(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameLiveFeed::class);
    });

    it('can create GameLiveFeedDiffPatch resource', function () {
        $resource = MlbStats::gameLiveFeedDiffPatch(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameLiveFeedDiffPatch::class);
    });

    it('can create GameLiveFeedTimestamps resource', function () {
        $resource = MlbStats::gameLiveFeedTimestamps(663149);

        expect($resource)
            ->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameLiveFeedTimestamps::class);
    });
});
