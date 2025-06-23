<?php

use Zacksmash\MlbStats\Enums\HighLowOrgType;
use Zacksmash\MlbStats\Enums\LeagueListId;
use Zacksmash\MlbStats\Enums\Position;
use Zacksmash\MlbStats\Enums\StreakSpan;
use Zacksmash\MlbStats\Enums\StreakType;
use Zacksmash\MlbStats\MlbStats;

beforeEach(function () {
    $this->mlb = new MlbStats;
});

describe('Resource Instantiation Tests', function () {
    describe('Resources with Constructor Parameters', function () {
        it('can create Team resource', function () {
            $team = $this->mlb->team(147)
                ->fields('id,name');

            expect($team)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Team::class);
        });

        it('can create Person resource', function () {
            $person = $this->mlb->person(545361)
                ->fields('id,fullName');

            expect($person)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Person::class);
        });

        it('can create Draft resource', function () {
            $draft = $this->mlb->draft('2023')
                ->fields('drafts');

            expect($draft)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Draft::class);
        });

        it('can create HighLow resource with required orgType', function () {
            $highLow = $this->mlb->highLow(HighLowOrgType::TEAM)
                ->statGroup('pitching')
                ->season(2023)
                ->fields('stats');

            expect($highLow)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HighLow::class);
        });

        it('can create PersonGameStats with required parameters', function () {
            $personStats = $this->mlb->personGameStats(545361, 663243)
                ->fields('people');

            expect($personStats)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\PersonGameStats::class);
        });

        it('can create HomeRunDerby with required gamePk', function () {
            $derby = $this->mlb->homeRunDerby(663243)
                ->fields('rounds');

            expect($derby)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HomeRunDerby::class);
        });
    });

    describe('Schedule Resource', function () {
        it('can use Schedule with required parameters', function () {
            $schedule = $this->mlb->schedule()
                ->sportId(1)
                ->date('2023-07-01')
                ->teamId(147)
                ->fields('dates,games');

            expect($schedule)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        });

        it('can use Schedule with gamePks instead of sportId', function () {
            $schedule = $this->mlb->schedule()
                ->gamePks('663243,663244')
                ->date('2023-07-01')
                ->fields('dates,games');

            expect($schedule)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        });
    });

    describe('Stats Resource', function () {
        it('can use Stats with required parameters', function () {
            $stats = $this->mlb->stats()
                ->stats('season')
                ->group('hitting')
                ->season(2023)
                ->position(Position::FIRST_BASE)
                ->fields('stats');

            expect($stats)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
        });
    });

    describe('Teams Resource', function () {
        it('can use Teams with correct parameters', function () {
            $teams = $this->mlb->teams()
                ->season(2023)
                ->sportIds(1)
                ->leagueIds(103, 104)
                ->activeStatus('Y')
                ->fields('id,name');

            expect($teams)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Teams::class);
        });
    });

    describe('Basic Resources', function () {
        it('can use Attendance resource', function () {
            $attendance = $this->mlb->attendance()
                ->teamId(147)
                ->season(2023)
                ->fields('attendance');

            expect($attendance)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Attendance::class);
        });

        it('can use People resource', function () {
            $people = $this->mlb->people()
                ->personIds('545361,592450')
                ->fields('id,fullName');

            expect($people)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\People::class);
        });

        it('can use Standings resource', function () {
            $standings = $this->mlb->standings()
                ->season(2023)
                ->leagueId(103)
                ->standingsTypes('regularSeason')
                ->fields('records');

            expect($standings)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Standings::class);
        });

        it('can use Venues resource', function () {
            $venues = $this->mlb->venues()
                ->venueIds('2392,2394')
                ->season(2023)
                ->fields('venues');

            expect($venues)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Venues::class);
        });

        it('can use Sports resource', function () {
            $sports = $this->mlb->sports()
                ->sportId(1)
                ->fields('sports');

            expect($sports)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Sports::class);
        });

        it('can use Divisions resource', function () {
            $divisions = $this->mlb->divisions()
                ->leagueId(103)
                ->sportId(1);

            expect($divisions)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Divisions::class);
        });

        it('can use Conferences resource', function () {
            $conferences = $this->mlb->conferences()
                ->fields('conferences');

            expect($conferences)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Conferences::class);
        });
    });

    describe('Game Resources', function () {
        it('can use GameLiveFeed resource', function () {
            $liveFeed = $this->mlb->gameLiveFeed(663243)
                ->timecode('20230701_150000')
                ->fields('gameData');

            expect($liveFeed)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameLiveFeed::class);
        });

        it('can use GameBoxscore resource', function () {
            $boxscore = $this->mlb->gameBoxscore(663243)
                ->timecode('20230701_150000')
                ->fields('teams');

            expect($boxscore)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameBoxscore::class);
        });

        it('can use GameContent resource', function () {
            $content = $this->mlb->gameContent(663243)
                ->highlightLimit(5);

            expect($content)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GameContent::class);
        });

        it('can use GamePlayByPlay resource', function () {
            $playByPlay = $this->mlb->gamePlayByPlay(663243)
                ->timecode('20230701_150000')
                ->fields('allPlays');

            expect($playByPlay)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePlayByPlay::class);
        });
    });

    describe('Team Related Resources', function () {
        it('can use TeamRoster resource', function () {
            $roster = $this->mlb->teamRoster(147)
                ->season(2023)
                ->rosterType('active')
                ->fields('roster');

            expect($roster)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamRoster::class);
        });

        it('can use TeamStats resource', function () {
            $teamStats = $this->mlb->teamStats(147)
                ->season(2023)
                ->stats('season')
                ->fields('stats');

            expect($teamStats)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamStats::class);
        });

        it('can use TeamAffiliates resource', function () {
            $affiliates = $this->mlb->teamAffiliates(147)
                ->season(2023)
                ->fields('teams');

            expect($affiliates)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamAffiliates::class);
        });

        it('can use TeamCoaches resource', function () {
            $coaches = $this->mlb->teamCoaches(147)
                ->season(2023)
                ->fields('roster');

            expect($coaches)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamCoaches::class);
        });
    });

    describe('League Resources with Value Conversion', function () {
        it('can use LeagueAllStarBallot resource', function () {
            $ballot = $this->mlb->leagueAllStarBallot('mlb')
                ->season(2023)
                ->fields('people');

            expect($ballot)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LeagueAllStarBallot::class);
        });

        it('can use LeagueAllStarBallot with enum value', function () {
            $ballot = $this->mlb->leagueAllStarBallot(LeagueListId::MLB->value)
                ->season(2023)
                ->fields('people');

            expect($ballot)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\LeagueAllStarBallot::class);
        });
    });

    describe('Stats Leaders Resources', function () {
        it('can use StatsLeaders resource', function () {
            $leaders = $this->mlb->statsLeaders()
                ->leaderCategories('homeRuns')
                ->season(2023)
                ->limit(10)
                ->fields('leagueLeaders');

            expect($leaders)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsLeaders::class);
        });

        it('can use TeamLeaders resource', function () {
            $teamLeaders = $this->mlb->teamLeaders(147)
                ->leaderCategories('homeRuns')
                ->season(2023)
                ->fields('teamLeaders');

            expect($teamLeaders)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\TeamLeaders::class);
        });
    });

    describe('Streak Resources', function () {
        it('can use StatsStreaks resource', function () {
            $streaks = $this->mlb->statsStreaks()
                ->streakType(StreakType::HITTING_STREAK_OVERALL)
                ->streakSpan(StreakSpan::SEASON)
                ->season(2023)
                ->fields('streaks');

            expect($streaks)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);
        });
    });

    describe('Jobs Resources', function () {
        it('can use Jobs resource', function () {
            $jobs = $this->mlb->jobs()
                ->jobType('umpire')
                ->sportId(1)
                ->date('2023-07-01')
                ->fields('dates');

            expect($jobs)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Jobs::class);
        });

        it('can use JobsUmpires resource', function () {
            $umpires = $this->mlb->jobsUmpires()
                ->sportId(1)
                ->date('2023-07-01')
                ->fields('dates');

            expect($umpires)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\JobsUmpires::class);
        });

        it('can use JobsDatacasters resource', function () {
            $datacasters = $this->mlb->jobsDatacasters()
                ->fields('dates');

            expect($datacasters)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\JobsDatacasters::class);
        });
    });

    describe('Season Resources', function () {
        it('can use Season resource', function () {
            $season = $this->mlb->season(2023)
                ->fields('seasonId');

            expect($season)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Season::class);
        });

        it('can use Seasons resource', function () {
            $seasons = $this->mlb->seasons()
                ->sportId(1)
                ->fields('seasons');

            expect($seasons)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Seasons::class);
        });

        it('can use SeasonsAll resource', function () {
            $seasonsAll = $this->mlb->seasonsAll()
                ->sportId(1)
                ->fields('seasons');

            expect($seasonsAll)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\SeasonsAll::class);
        });
    });
});

describe('Parameter Testing', function () {
    describe('Array Parameter Handling', function () {
        it('handles array parameters correctly', function () {
            $resource = $this->mlb->schedule()
                ->sportId(1)
                ->teamId([147, 121])
                ->gameTypes(['R', 'P']);

            expect($resource)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        });

        it('handles variadic parameters correctly', function () {
            $resource = $this->mlb->schedule()
                ->sportId(1)
                ->teamId(147, 121, 119)
                ->gameTypes('R', 'P', 'W');

            expect($resource)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        });
    });

    describe('Method Chaining', function () {
        it('supports method chaining', function () {
            $resource = $this->mlb->schedule()
                ->sportId(1)
                ->date('2023-07-01')
                ->teamId(147)
                ->fields('dates,games')
                ->hydrate('team,venue');

            expect($resource)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        });

        it('can use params method for custom parameters', function () {
            $resource = $this->mlb->schedule()
                ->sportId(1)
                ->params(['customParam' => 'value']);

            expect($resource)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        });
    });

    describe('Enum Usage', function () {
        it('handles enum parameters correctly', function () {
            $resource = $this->mlb->stats()
                ->stats('season')
                ->group('hitting')
                ->position(Position::FIRST_BASE);

            expect($resource)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
        });

        it('handles enum value extraction', function () {
            $resource = $this->mlb->highLow(HighLowOrgType::TEAM->value)
                ->statGroup('pitching')
                ->season(2023);

            expect($resource)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HighLow::class);
        });
    });

    describe('String and Integer Parameters', function () {
        it('handles string parameters', function () {
            $resource = $this->mlb->schedule()
                ->sportId('1')
                ->date('2023-07-01');

            expect($resource)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        });

        it('handles integer parameters', function () {
            $resource = $this->mlb->schedule()
                ->sportId(1)
                ->teamId(147);

            expect($resource)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
        });
    });
});

describe('Date Parameter Testing', function () {
    it('handles date parameters correctly', function () {
        $schedule = $this->mlb->schedule()
            ->sportId(1)
            ->date('2023-07-01')
            ->startDate('2023-07-01')
            ->endDate('2023-07-07');

        expect($schedule)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
    });
});

describe('Complex Resource Testing', function () {
    it('can handle complex parameter combinations', function () {
        $stats = $this->mlb->stats()
            ->stats('season')
            ->group('hitting')
            ->season(2023)
            ->gameType('R')
            ->teamId(147)
            ->position(Position::FIRST_BASE)
            ->limit(25)
            ->offset(0)
            ->sortStat('avg')
            ->order('desc')
            ->fields('stats,people');

        expect($stats)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
    });

    it('can handle schedule with multiple parameters', function () {
        $schedule = $this->mlb->schedule()
            ->sportId(1)
            ->date('2023-07-01')
            ->teamId(147)
            ->leagueId(103)
            ->gameTypes('R', 'P')
            ->eventTypes('primary')
            ->scheduleTypes('games')
            ->venueIds(2392, 2394)
            ->fields('dates,games,totalItems')
            ->hydrate('team,venue,weather');

        expect($schedule)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Schedule::class);
    });
});
