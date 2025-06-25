# Access the MLB Stats API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zacksmash/mlb-stats.svg?style=flat-square)](https://packagist.org/packages/zacksmash/mlb-stats)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/zacksmash/mlb-stats/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/zacksmash/mlb-stats/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/zacksmash/mlb-stats/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/zacksmash/mlb-stats/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zacksmash/mlb-stats.svg?style=flat-square)](https://packagist.org/packages/zacksmash/mlb-stats)

A comprehensive PHP client for the MLB Stats API that provides easy access to baseball statistics, game data, team information, player stats, and more. This package offers a clean, fluent interface with full parameter validation, enum support, and Laravel integration.

**Key Features:**
- 🏟️ **Complete API Coverage** - Access all MLB Stats API endpoints including games, teams, players, stats, and configuration data
- ⚡ **Fluent Interface** - Chainable methods for building complex queries with ease
- 🔒 **Parameter Validation** - Built-in validation ensures required parameters are provided
- 📊 **Enum Support** - Type-safe enums for positions, leagues, stat types, and more with helper methods
- 🎯 **Laravel Integration** - Seamless Laravel support with service provider and facade
- 🧪 **Tested** - Comprehensive test suite with coverage for core functionality
- 🔥 **Custom Collection** - Includes an extension to the Laravel Collection class that allows for deepGet's

```php
$response = MlbStats::gameLIveFeed($gamePk)->get();

// Get the most recent play
$response->data->deepGet('liveData.plays.allPlays.{last}');
```

## Installation

You can install the package via composer:

```bash
composer require zacksmash/mlb-stats
```

### Laravel Integration

If you're using Laravel, the package will be auto-discovered. You can optionally publish the configuration file:

```bash
php artisan vendor:publish --tag="mlb-stats-config"
```

## Usage

This package provides a simple and elegant way to access the MLB Stats API. You can use either the Facade or the underlying service class directly.

### Basic Examples

#### Using the Facade (Recommended)

```php
use Zacksmash\MlbStats\Facades\MlbStats;

// Get all MLB teams
$teams = MlbStats::teams()->get();

// Get San Francisco Giants team information
$giants = MlbStats::team(137) // San Francisco Giants
    ->get();

// Get Giants schedule for July 4th weekend
$schedule = MlbStats::schedule()
    ->sportId(1) // MLB
    ->teamId(137) // Giants
    ->startDate('2025-07-03')
    ->endDate('2025-07-05')
    ->get();

// Get Giants player information
$busterPosey = MlbStats::person(457763) // Buster Posey
    ->get();
```

### Config Resources Examples

The API provides various configuration endpoints that return reference data:

```php
use Zacksmash\MlbStats\Facades\MlbStats;

// Get all available positions
$positions = MlbStats::positions()->get();

// Get all game types and statuses
$gameTypes = MlbStats::gameTypes()->get();
$gameStatuses = MlbStats::gameStatuses()->get();

// Get all stat types with descriptions
$statTypes = MlbStats::statTypes()->get();
$statGroups = MlbStats::statGroups()->get();

// Get available awards and achievement statuses
$awards = MlbStats::awards()->get();
$achievements = MlbStats::achievementStatuses()->get();

// Get venue information for Oracle Park (Giants home stadium)
$oraclePark = MlbStats::venue(2395) // Oracle Park
    ->get();

// Get all MLB venues
$venues = MlbStats::venues()->get();

$statTypes = MlbStats::statTypes()->get();

// Get available awards
$awards = MlbStats::awards()->get();
```

### Advanced Examples with Parameters

#### Team Statistics and Leaders

```php
// Get Giants team stats for the 2024 season
$giantsStats = MlbStats::teamStats(137) // Giants
    ->season(2024)
    ->statGroup('hitting')
    ->group('hitting')
    ->stats('season')
    ->get();

// Get league-wide stat leaders (find where Giants players rank)
$statLeaders = MlbStats::statsLeaders()
    ->leaderCategories(['homeRuns', 'strikeouts'])
    ->season(2024)
    ->leagueId(104) // National League
    ->limit(10)
    ->get();

// Get Giants team history and affiliates
$giantsHistory = MlbStats::teamHistory(137)->get();
$giantsAffiliates = MlbStats::teamAffiliates(137)->get();

// Get teams stats comparison across the league
$allTeamsStats = MlbStats::teamsStats()
    ->season(2024)
    ->statGroup('hitting')
    ->get();
```

#### Player and Personnel Information

```php
// Get Giants current roster
$giantsRoster = MlbStats::teamRoster(137) // Giants
    ->rosterType('active')
    ->season(2024)
    ->get();

// Get specific Giants players
$mattChapman = MlbStats::person(656305) // Matt Chapman (3B)
    ->get();

$loganWebb = MlbStats::person(657277) // Logan Webb (P)
    ->get();

// Get player stats for a specific game
$playerGameStats = MlbStats::playerGameStats(656305, 745927) // Chapman in specific game
    ->get();

// Get Giants coaching staff
$giantsCoaches = MlbStats::teamCoaches(137)
    ->season(2024)
    ->get();

// Get Giants personnel (front office, etc.)
$giantsPersonnel = MlbStats::teamPersonnel(137)->get();

// Search for players by name
$playerSearch = MlbStats::peopleSearch()
    ->names(['Logan Webb'])
    ->get();

// Get free agents who might join the Giants
$freeAgents = MlbStats::playerFreeAgents()
    ->season(2024)
    ->get();
```

#### Game Data and Analytics

```php
// Get Giants live game feed (example game)
$liveFeed = MlbStats::gameLiveFeed(745927) // Giants vs Dodgers
    ->get();

// Get detailed game play-by-play
$playByPlay = MlbStats::gamePlayByPlay(745927)->get();

// Get game boxscore with detailed stats
$boxscore = MlbStats::gameBoxscore(745927)
    ->timecode('20240701_150000')
    ->fields('teams,players')
    ->get();

// Get game content (highlights, recap, etc.)
$gameContent = MlbStats::gameContent(745927)
    ->highlightLimit(10)
    ->get();

// Get game context metrics and analytics
$gameMetrics = MlbStats::gameContextMetrics(745927)->get();
$winProbability = MlbStats::gameWinProbability(745927)->get();

// Get weather information for Oracle Park games
$weatherForecast = MlbStats::weatherForecast(745927, 'open')
    ->get();

// Get Giants schedule for the season
$giantsSchedule = MlbStats::schedule()
    ->teamId(137)
    ->season(2024)
    ->scheduleType('regularSeason')
    ->get();

// Get postseason schedule if Giants make playoffs
$postseason = MlbStats::schedulePostseason()
    ->season(2024)
    ->teamId(137)
    ->get();
```

### Advanced Statistics and Analytics

```php
use Zacksmash\MlbStats\Facades\MlbStats;
use Zacksmash\MlbStats\Enums\Position;
use Zacksmash\MlbStats\Enums\StatGroups;

// Get advanced hitting stats for Giants players
$giantsHittingStats = MlbStats::stats()
    ->stats('season')
    ->group(StatGroups::HITTING)
    ->teamId(137) // Giants
    ->season(2024)
    ->get();

// Get pitching stats for Giants rotation
$giantsPitchingStats = MlbStats::stats()
    ->stats('season')
    ->group(StatGroups::PITCHING)
    ->teamId(137)
    ->season(2024)
    ->get();

// Get stats for specific position (Giants catchers)
$giantsCatchers = MlbStats::stats()
    ->stats('season')
    ->group('hitting')
    ->position(Position::CATCHER)
    ->teamId(137)
    ->season(2024)
    ->get();

// Search for specific statistical achievements
$giantsSearch = MlbStats::statsSearch()
    ->group('hitting')
    ->season(2024)
    ->teamId(137)
    ->get();

// Get high/low stats across the league
$seasonHighs = MlbStats::highLow('season')
    ->sortStat('homeRuns')
    ->season(2024)
    ->get();

// Get milestone achievements
$milestones = MlbStats::milestones()
    ->fields(['milestones'])
    ->get();
```

### Error Handling

```php
use Zacksmash\MlbStats\Facades\MlbStats;
use Zacksmash\MlbStats\Exceptions\RequestFailedException;
use Zacksmash\MlbStats\Exceptions\InvalidParameterException;

try {
    $giantsStats = MlbStats::teamStats(137) // Giants
        ->season(2024)
        ->statGroup('hitting')
        ->get();
} catch (InvalidParameterException $e) {
    // Handle missing required parameters
    echo "Missing required parameter: " . $e->getMessage();
} catch (RequestFailedException $e) {
    // Handle API request failures
    echo "API request failed: " . $e->getMessage();
}
```

### Known API Limitations

Some endpoints in the MLB Stats API may return errors or have restricted access. The package includes documentation for these known issues:

#### Methods with Authentication Issues (401 Unauthorized)
These methods require special authorization that may not be publicly available:

- `batTrackingByPlay()` - Bat tracking data for specific plays
- `gameAnalytics()` - Advanced game analytics
- `gameAnalyticsGuids()` - Game analytics GUIDs
- `gameGuidAnalytics()` - GUID-specific analytics
- `gameGuidContextMetrics()` - GUID context metrics
- `gameGuidContextMetricsAverages()` - GUID context metric averages
- `gameLastPitch()` - Last pitch data
- `gamePlayBiomechanics()` - Play biomechanics data
- `gamePlaySkeletalChunked()` - Skeletal tracking data (chunked)
- `gamePlaySkeletalFiles()` - Skeletal tracking files
- `gameGuids()` - Game GUID data
- `jobsUmpireSchedule()` - Umpire schedule information
- `personStatsMetrics()` - Person statistics metrics
- `propsPredictions()` - Props predictions
- `propsPredictionsAdjust()` - Adjusted props predictions
- `scheduleTrackingEvents()` - Schedule tracking events
- `statsMetrics()` - Advanced statistics metrics
- `statsOutsAboveAverage()` - Outs above average stats
- `statsSearchBeast()` - Advanced stats search
- `statsSprayChart()` - Spray chart data
- `statsStolenBaseProbability()` - Stolen base probability
- `streaks()` - Player/team streaks
- `weatherBasic()` - Basic weather data
- `weatherByPlay()` - Play-specific weather
- `weatherForecast()` - Weather forecasts
- `weatherFull()` - Full weather data

#### Methods with Server Issues (404 Not Found)
These endpoints may not be currently available:

- `gameColorFeed()` - Game color feed data
- `gameColorFeedTimestamps()` - Color feed timestamps

#### Methods with Internal Server Errors (500)
These endpoints may have server-side issues:

- `homeRunDerby()` - Home Run Derby data
- `homeRunDerbyBracket()` - Home Run Derby bracket
- `homeRunDerbyMixed()` - Mixed Home Run Derby data
- `homeRunDerbyPool()` - Home Run Derby pool data
- `leaguesAllStarBallot()` - All-Star ballot (leagues endpoint)
- `personAward()` - Person award information
- `reviews()` - Game reviews data

#### Methods with Data Availability Issues
These endpoints may return empty results or object not found errors:

- `teamLeaders()` - Team statistical leaders
- `teamStats()` - Team statistics (some configurations)

**Note:** These limitations are based on the current state of the MLB Stats API and may change over time. Some methods may work with specific parameters or during certain periods (e.g., Home Run Derby methods during All-Star week).

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

DBAA, PR's Accepted!

## MLB API Docs
Read more about the API docs [here!](https://github.com/MajorLeagueBaseball/google-cloud-mlb-hackathon/tree/main/datasets/mlb-statsapi-docs)

## Credits

- [Zack Warren](https://github.com/zacksmash)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Copyright Notice

This package and its author are not affiliated with MLB or any MLB team. This API wrapper interfaces with MLB's Stats API. Use of MLB data is subject to the notice posted at http://gdx.mlb.com/components/copyright.txt.
