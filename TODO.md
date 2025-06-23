## Caching implementation of some kind
## Attributes validation doesn't seem to be working

## Improvements
- Doesn't seem to be working, further testing needed
```php
$test = MlbStats::highLow(HighLowOrgType::PLAYER);
```

- Home Run Derby Endpoints are hard to find a PK for

- 'current' doesn't seem to be working as a gamePk
```php
$response = MlbStats::personCurrentGameStats($personId);
$response = MlbStats:personGameStats($personId, 'current');
```

## Not working or depracated
// 404 Not Found
// $test = MlbStats::gameAnalyticsGame();

// 401 Unauthorized
// $test = MlbStats::gameAnalyticsGuids();

// 401 Unauthorized
// $test = MlbStats::gameGuidContextMetricsAverages();

// 404 Not Found
// $test = MlbStats::gameColorFeed($gamePk);

// 404 Not Found
// $test = MlbStats::gameColorFeedTimestamps($gamePk);

// 404 Not Found
// $test = MlbStats::gameColorFeedDiffPatch($gamePk);

// 401 Unauthorized
// $response = MlbStats::jobsUmpireGames(596809)->season(2025);

// 401 Unauthorized
// $response = MlbStats::statsMetrics();

// 404 Not Found
// $response = MlbStats::statsStreaks()->season(2023);
