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
- 🧪 **Tested** - Comprehensive test suite with lots of coverage for core functionality
- 🔥 **Custom Collection** - Includes an extension to the Laravel Collection class that allows for deepGet's

```php
$response = MlbStats::gameLIveFeed($gamePk)->get();

$response->data->deepGet('liveData.plays.allPlays.{first}');
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

### Standalone Usage

For non-Laravel projects, you can use the package directly:

```php
require_once 'vendor/autoload.php';

use Zacksmash\MlbStats\MlbStats;

$mlbStats = new MlbStats();
$teams = $mlbStats->teams()->get();
```

## Usage

This package provides a simple and elegant way to access the MLB Stats API. You can use either the Facade or the underlying service class directly.

### Basic Examples

#### Using the Facade (Recommended)

```php
use Zacksmash\MlbStats\Facades\MlbStats;

// Get all MLB teams
$teams = MlbStats::teams()->get();

// Get a specific team with additional data
$team = MlbStats::team(147) // New York Yankees
    ->hydrate(['roster', 'stats'])
    ->get();

// Get current standings for a league
$standings = MlbStats::standings()
    ->leagueId(103) // American League
    ->season(2024)
    ->get();

// Get schedule for a specific date
$schedule = MlbStats::schedule()
    ->sportId(1) // MLB
    ->date('2024-07-04')
    ->hydrate(['team', 'linescore'])
    ->get();
```

### Config Resources Examples

The API provides various configuration endpoints that return reference data:

```php
use Zacksmash\MlbStats\Facades\MlbStats;

// Get all available positions
$positions = MlbStats::positions()->get();

// Get all game types
$gameTypes = MlbStats::gameTypes()->get();

// Get all stat types with descriptions
$statTypes = MlbStats::statTypes()->get();

// Get available awards
$awards = MlbStats::awards()->get();
```

### Advanced Examples with Parameters

#### Team Statistics and Leaders

```php
// Get team stats for the 2024 season
$teamStats = MlbStats::teamStats(147) // Yankees
    ->season(2024)
    ->statGroup('hitting')
    ->group('hitting')
    ->stats('byDateRange')
    ->get();

// Get team leaders in various categories
$teamLeaders = MlbStats::teamLeaders(147)
    ->leaderCategories(['homeRuns', 'rbi', 'battingAverage'])
    ->season(2024)
    ->get();

// Get league-wide stat leaders
$statLeaders = MlbStats::statsLeaders()
    ->leaderCategories(['homeRuns'])
    ->season(2024)
    ->limit(10)
    ->get();
```

#### Player and Personnel Information

```php
// Get team roster for current season
$roster = MlbStats::teamRoster(147)
    ->rosterType('active')
    ->season(2024)
    ->hydrate(['person'])
    ->get();

// Get free agents
$freeAgents = MlbStats::peopleFreeAgents()
    ->season(2024)
    ->get();

// Get coaching staff
$coaches = MlbStats::teamCoaches(147)
    ->season(2024)
    ->get();
```

#### Game Data and Analytics

```php
// Get live game feed
$liveFeed = MlbStats::gameLiveFeed(663149)
    ->hydrate(['linescore', 'boxscore'])
    ->get();

// Get game play-by-play
$playByPlay = MlbStats::gamePlayByPlay(663149)->get();

// Get game content (highlights, recap, etc.)
$content = MlbStats::gameContent(663149)
    ->highlightLimit(5)
    ->get();
```

### Using Enums and Helper Methods

The package includes convenient enums and helper methods for common parameters:

```php
use Zacksmash\MlbStats\Facades\MlbStats;
use Zacksmash\MlbStats\Enums\Position;
use Zacksmash\MlbStats\Enums\LeagueListId;

// Using enum values
$stats = MlbStats::stats()
    ->stats('season')
    ->group('hitting')
    ->position(Position::FIRST_BASE)
    ->get();

// Using helper methods
$schedule = MlbStats::schedule()
    ->date('2024-07-04')
    ->get();

// Get stats for specific positions using helper methods
$pitcherStats = MlbStats::stats()
    ->stats('season')
    ->group('pitching')
    ->pitcher() // Helper for position('P')
    ->season(2024)
    ->get();
```

### Error Handling

```php
use Zacksmash\MlbStats\Facades\MlbStats;
use Zacksmash\MlbStats\Exceptions\RequestFailedException;
use Zacksmash\MlbStats\Exceptions\InvalidParameterException;

try {
    $stats = MlbStats::stats()
        ->stats('season')
        ->group('hitting')
        ->season(2024)
        ->get();
} catch (InvalidParameterException $e) {
    // Handle missing required parameters
    echo "Missing required parameter: " . $e->getMessage();
} catch (RequestFailedException $e) {
    // Handle API request failures
    echo "API request failed: " . $e->getMessage();
}
```

### Method Chaining

All parameter methods support chaining for clean, readable code:

```php
$complexQuery = MlbStats::schedule()
  ->sportId(1)
  ->startDate('2024-07-01')
  ->endDate('2024-07-31')
  ->teamId(147)
  ->hydrate(['team', 'linescore', 'weather'])
  ->get();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

DBAA, PR's Accepted!

## Credits

- [Zack Warren](https://github.com/zacksmash)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
