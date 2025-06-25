<?php

namespace Zacksmash\MlbStats;

/**
 *  ________  _________  ______
 * |_   __  ||  _   _  ||_   _ `.
 *   | |_ \_||_/ | | \_|  | | `. \
 *   |  _|       | |      | |  | |
 *  _| |_       _| |_    _| |_.' /
 * |_____|     |_____|  |______.'
 */
class MlbStats
{
    public function achievementStatuses(): Resources\AchievementStatuses
    {
        return new Resources\AchievementStatuses;
    }

    public function allSportBallot(int|string $sportId = 1): Resources\AllSportBallot
    {
        return new Resources\AllSportBallot($sportId);
    }

    public function attendance(): Resources\Attendance
    {
        return new Resources\Attendance;
    }

    public function award(string $awardId): Resources\Award
    {
        return new Resources\Award($awardId);
    }

    public function awardRecipients(string $awardId): Resources\AwardRecipients
    {
        return new Resources\AwardRecipients($awardId);
    }

    public function awards(): Resources\Awards
    {
        return new Resources\Awards;
    }

    public function baseballStats(): Resources\BaseballStats
    {
        return new Resources\BaseballStats;
    }

    /**
     * 401 Unauthorized
     */
    public function batTrackingByPlay(int|string $gamePk, string $playId): Resources\BatTrackingByPlay
    {
        return new Resources\BatTrackingByPlay($gamePk, $playId);
    }

    public function broadcastAvailability(): Resources\BroadcastAvailability
    {
        return new Resources\BroadcastAvailability;
    }

    public function broadcasters(): Resources\Broadcasters
    {
        return new Resources\Broadcasters;
    }

    public function broadcasts(): Resources\Broadcasts
    {
        return new Resources\Broadcasts;
    }

    public function coachingVideoTypes(): Resources\CoachingVideoTypes
    {
        return new Resources\CoachingVideoTypes;
    }

    public function conference(int|string $conferenceId): Resources\Conference
    {
        return new Resources\Conference($conferenceId);
    }

    public function conferences(): Resources\Conferences
    {
        return new Resources\Conferences;
    }

    public function division(int|string $divisionId): Resources\Division
    {
        return new Resources\Division($divisionId);
    }

    public function divisions(): Resources\Divisions
    {
        return new Resources\Divisions;
    }

    public function draft(int|string|null $year = null): Resources\Draft
    {
        return new Resources\Draft($year);
    }

    public function draftLatest(int|string $year): Resources\DraftLatest
    {
        return new Resources\DraftLatest($year);
    }

    public function draftProspects(int|string $year): Resources\DraftProspects
    {
        return new Resources\DraftProspects($year);
    }

    public function eventStatuses(): Resources\EventStatuses
    {
        return new Resources\EventStatuses;
    }

    public function eventTypes(): Resources\EventTypes
    {
        return new Resources\EventTypes;
    }

    public function fielderDetailTypes(): Resources\FielderDetailTypes
    {
        return new Resources\FielderDetailTypes;
    }

    public function freeGameTypes(): Resources\FreeGameTypes
    {
        return new Resources\FreeGameTypes;
    }

    /**
     * 401 Unauthorized
     */
    public function gameAnalytics(): Resources\GameAnalytics
    {
        return new Resources\GameAnalytics;
    }

    /**
     * 401 Unauthorized
     */
    public function gameAnalyticsGuids(): Resources\GameAnalyticsGuids
    {
        return new Resources\GameAnalyticsGuids;
    }

    public function gameBoxscore(int|string $gamePk): Resources\GameBoxscore
    {
        return new Resources\GameBoxscore($gamePk);
    }

    public function gameChanges(): Resources\GameChanges
    {
        return new Resources\GameChanges;
    }

    /**
     * 404 Not Found
     */
    public function gameColorFeed(int|string $gamePk): Resources\GameColorFeed
    {
        return new Resources\GameColorFeed($gamePk);
    }

    /**
     * 404 Not Found
     */
    public function gameColorFeedTimestamps(int|string $gamePk): Resources\GameColorFeedTimestamps
    {
        return new Resources\GameColorFeedTimestamps($gamePk);
    }

    public function gameContent(int|string $gamePk): Resources\GameContent
    {
        return new Resources\GameContent($gamePk);
    }

    public function gameContextMetrics(int|string $gamePk): Resources\GameContextMetrics
    {
        return new Resources\GameContextMetrics($gamePk);
    }

    /**
     * 401 Unauthorized
     */
    public function gameGuidAnalytics(int|string $gamePk, string $guid): Resources\GameGuidAnalytics
    {
        return new Resources\GameGuidAnalytics($gamePk, $guid);
    }

    /**
     * 401 Unauthorized
     */
    public function gameGuidContextMetrics(int|string $gamePk, string $guid): Resources\GameGuidContextMetrics
    {
        return new Resources\GameGuidContextMetrics($gamePk, $guid);
    }

    /**
     * 401 Unauthorized
     */
    public function gameGuidContextMetricsAverages(int|string $gamePk, string $guid): Resources\GameGuidContextMetricsAverages
    {
        return new Resources\GameGuidContextMetricsAverages($gamePk, $guid);
    }

    public function gameGuidHomeRunBallparks(int|string $gamePk, string $guid): Resources\GameGuidHomeRunBallparks
    {
        return new Resources\GameGuidHomeRunBallparks($gamePk, $guid);
    }

    /**
     * 401 Unauthorized
     */
    public function gameGuids(int|string $gamePk): Resources\GameGuids
    {
        return new Resources\GameGuids($gamePk);
    }

    /**
     * 401 Unauthorized
     */
    public function gameLastPitch(): Resources\GameLastPitch
    {
        return new Resources\GameLastPitch;
    }

    public function gameLinescore(int|string $gamePk): Resources\GameLinescore
    {
        return new Resources\GameLinescore($gamePk);
    }

    public function gameLiveFeed(int|string $gamePk): Resources\GameLiveFeed
    {
        return new Resources\GameLiveFeed($gamePk);
    }

    public function gameLiveFeedDiffPatch(int|string $gamePk): Resources\GameLiveFeedDiffPatch
    {
        return new Resources\GameLiveFeedDiffPatch($gamePk);
    }

    public function gameLiveFeedTimestamps(int|string $gamePk): Resources\GameLiveFeedTimestamps
    {
        return new Resources\GameLiveFeedTimestamps($gamePk);
    }

    public function gameMetrics(int|string $gamePk): Resources\GameMetrics
    {
        return new Resources\GameMetrics($gamePk);
    }

    public function gamePace(): Resources\GamePace
    {
        return new Resources\GamePace;
    }

    /**
     * 401 Unauthorized
     */
    public function gamePlayBiomechanics(int|string $gamePk, string $playId, int|string $positionId): Resources\GamePlayBiomechanics
    {
        return new Resources\GamePlayBiomechanics($gamePk, $playId, $positionId);
    }

    public function gamePlayByPlay(int|string $gamePk): Resources\GamePlayByPlay
    {
        return new Resources\GamePlayByPlay($gamePk);
    }

    /**
     * 401 Unauthorized
     */
    public function gamePlaySkeletalChunked(int|string $gamePk, string $playId): Resources\GamePlaySkeletalChunked
    {
        return new Resources\GamePlaySkeletalChunked($gamePk, $playId);
    }

    /**
     * 401 Unauthorized
     */
    public function gamePlaySkeletalFiles(int|string $gamePk, string $playId): Resources\GamePlaySkeletalFiles
    {
        return new Resources\GamePlaySkeletalFiles($gamePk, $playId);
    }

    public function gameStatuses(): Resources\GameStatuses
    {
        return new Resources\GameStatuses;
    }

    public function gameTypes(): Resources\GameTypes
    {
        return new Resources\GameTypes;
    }

    public function gameWinProbability(int|string $gamePk): Resources\GameWinProbability
    {
        return new Resources\GameWinProbability($gamePk);
    }

    public function gamedayTypes(): Resources\GamedayTypes
    {
        return new Resources\GamedayTypes;
    }

    public function groupByTypes(): Resources\GroupByTypes
    {
        return new Resources\GroupByTypes;
    }

    public function highLow(string $highLowType): Resources\HighLow
    {
        return new Resources\HighLow($highLowType);
    }

    public function highLowTypes(): Resources\HighLowTypes
    {
        return new Resources\HighLowTypes;
    }

    public function hitTrajectories(): Resources\HitTrajectories
    {
        return new Resources\HitTrajectories;
    }

    /**
     * 500 Internal Server Error
     */
    public function homeRunDerby(): Resources\HomeRunDerby
    {
        return new Resources\HomeRunDerby;
    }

    /**
     * 500 Internal Server Error
     */
    public function homeRunDerbyBracket(): Resources\HomeRunDerbyBracket
    {
        return new Resources\HomeRunDerbyBracket;
    }

    /**
     * 500 Internal Server Error
     */
    public function homeRunDerbyMixed(int|string $gamePk): Resources\HomeRunDerbyMixed
    {
        return new Resources\HomeRunDerbyMixed($gamePk);
    }

    /**
     * 500 Internal Server Error
     */
    public function homeRunDerbyPool(int|string $gamePk): Resources\HomeRunDerbyPool
    {
        return new Resources\HomeRunDerbyPool($gamePk);
    }

    public function homeRunDerbyGame(int|string $gamePk): Resources\HomeRunDerbyGame
    {
        return new Resources\HomeRunDerbyGame($gamePk);
    }

    public function homeRunDerbyGameBracket(int|string $gamePk): Resources\HomeRunDerbyGameBracket
    {
        return new Resources\HomeRunDerbyGameBracket($gamePk);
    }

    public function homeRunDerbyGameMixed(int|string $gamePk): Resources\HomeRunDerbyGameMixed
    {
        return new Resources\HomeRunDerbyGameMixed($gamePk);
    }

    public function homeRunDerbyGamePool(int|string $gamePk): Resources\HomeRunDerbyGamePool
    {
        return new Resources\HomeRunDerbyGamePool($gamePk);
    }

    public function jobTypes(): Resources\JobTypes
    {
        return new Resources\JobTypes;
    }

    public function jobs(): Resources\Jobs
    {
        return new Resources\Jobs;
    }

    public function jobsDatacasters(): Resources\JobsDatacasters
    {
        return new Resources\JobsDatacasters;
    }

    public function jobsOfficialScorers(): Resources\JobsOfficialScorers
    {
        return new Resources\JobsOfficialScorers;
    }

    /**
     * 401 Unauthorized
     */
    public function jobsUmpireSchedule(int|string $umpireId): Resources\JobsUmpireSchedule
    {
        return new Resources\JobsUmpireSchedule($umpireId);
    }

    public function jobsUmpires(): Resources\JobsUmpires
    {
        return new Resources\JobsUmpires;
    }

    public function languages(): Resources\Languages
    {
        return new Resources\Languages;
    }

    public function league(int|string $leagueId): Resources\League
    {
        return new Resources\League($leagueId);
    }

    public function leagueAllStarBallot(int|string $leagueId): Resources\LeagueAllStarBallot
    {
        return new Resources\LeagueAllStarBallot($leagueId);
    }

    public function leagueAllStarFinalVote(int|string $leagueId): Resources\LeagueAllStarFinalVote
    {
        return new Resources\LeagueAllStarFinalVote($leagueId);
    }

    public function leagueAllStarWriteIns(int|string $leagueId): Resources\LeagueAllStarWriteIns
    {
        return new Resources\LeagueAllStarWriteIns($leagueId);
    }

    public function leagueLeaderTypes(): Resources\LeagueLeaderTypes
    {
        return new Resources\LeagueLeaderTypes;
    }

    public function leagues(): Resources\Leagues
    {
        return new Resources\Leagues;
    }

    /**
     * 500 Internal Server Error
     */
    public function leaguesAllStarBallot(): Resources\LeaguesAllStarBallot
    {
        return new Resources\LeaguesAllStarBallot;
    }

    public function logicalEvents(): Resources\LogicalEvents
    {
        return new Resources\LogicalEvents;
    }

    public function lookupValues(): Resources\LookupValues
    {
        return new Resources\LookupValues;
    }

    public function mediaStateTypes(): Resources\MediaStateTypes
    {
        return new Resources\MediaStateTypes;
    }

    public function metrics(): Resources\Metrics
    {
        return new Resources\Metrics;
    }

    public function milestoneDurations(): Resources\MilestoneDurations
    {
        return new Resources\MilestoneDurations;
    }

    public function milestoneLookups(): Resources\MilestoneLookups
    {
        return new Resources\MilestoneLookups;
    }

    public function milestoneStatistics(): Resources\MilestoneStatistics
    {
        return new Resources\MilestoneStatistics;
    }

    public function milestoneTypes(): Resources\MilestoneTypes
    {
        return new Resources\MilestoneTypes;
    }

    public function milestones(): Resources\Milestones
    {
        return new Resources\Milestones;
    }

    public function moundVisitTypes(): Resources\MoundVisitTypes
    {
        return new Resources\MoundVisitTypes;
    }

    public function people(): Resources\People
    {
        return new Resources\People;
    }

    public function peopleSearch(): Resources\PeopleSearch
    {
        return new Resources\PeopleSearch;
    }

    public function performerTypes(): Resources\PerformerTypes
    {
        return new Resources\PerformerTypes;
    }

    public function person(int|string $personId): Resources\Person
    {
        return new Resources\Person($personId);
    }

    /**
     * 500 Internal Server Error
     */
    public function personAward(int|string $personId): Resources\PersonAward
    {
        return new Resources\PersonAward($personId);
    }

    /**
     * 401 Unauthorized
     */
    public function personStatsMetrics(int|string $personId): Resources\PersonStatsMetrics
    {
        return new Resources\PersonStatsMetrics($personId);
    }

    public function pitchCodes(): Resources\PitchCodes
    {
        return new Resources\PitchCodes;
    }

    public function pitchTypes(): Resources\PitchTypes
    {
        return new Resources\PitchTypes;
    }

    public function platforms(): Resources\Platforms
    {
        return new Resources\Platforms;
    }

    public function playerChanges(): Resources\PlayerChanges
    {
        return new Resources\PlayerChanges;
    }

    public function playerGameStats(int|string $playerId, int|string $gamePk): Resources\PlayerGameStats
    {
        return new Resources\PlayerGameStats($playerId, $gamePk);
    }

    public function playerFreeAgents(): Resources\PlayerFreeAgents
    {
        return new Resources\PlayerFreeAgents;
    }

    public function playerStatusCodes(): Resources\PlayerStatusCodes
    {
        return new Resources\PlayerStatusCodes;
    }

    public function playerStats(int|string $personId): Resources\PlayerStats
    {
        return new Resources\PlayerStats($personId);
    }

    public function positions(): Resources\Positions
    {
        return new Resources\Positions;
    }

    /**
     * 401 Unauthorized
     */
    public function propsPredictions(): Resources\PropsPredictions
    {
        return new Resources\PropsPredictions;
    }

    /**
     * 401 Unauthorized
     */
    public function propsPredictionsAdjust(): Resources\PropsPredictionsAdjust
    {
        return new Resources\PropsPredictionsAdjust;
    }

    public function reviewReasons(): Resources\ReviewReasons
    {
        return new Resources\ReviewReasons;
    }

    /**
     * 500 Internal Server Error
     */
    public function reviews(): Resources\Reviews
    {
        return new Resources\Reviews;
    }

    public function roofTypes(): Resources\RoofTypes
    {
        return new Resources\RoofTypes;
    }

    public function rosterTypes(): Resources\RosterTypes
    {
        return new Resources\RosterTypes;
    }

    public function ruleSettings(): Resources\RuleSettings
    {
        return new Resources\RuleSettings;
    }

    public function runnerDetailTypes(): Resources\RunnerDetailTypes
    {
        return new Resources\RunnerDetailTypes;
    }

    public function schedule(): Resources\Schedule
    {
        return new Resources\Schedule;
    }

    public function scheduleEventTypes(): Resources\ScheduleEventTypes
    {
        return new Resources\ScheduleEventTypes;
    }

    public function schedulePostSeasonTuneIn(): Resources\SchedulePostSeasonTuneIn
    {
        return new Resources\SchedulePostSeasonTuneIn;
    }

    public function schedulePostseason(): Resources\SchedulePostseason
    {
        return new Resources\SchedulePostseason;
    }

    public function schedulePostseasonSeries(): Resources\SchedulePostseasonSeries
    {
        return new Resources\SchedulePostseasonSeries;
    }

    public function scheduleTiedGames(): Resources\ScheduleTiedGames
    {
        return new Resources\ScheduleTiedGames;
    }

    /**
     * 401 Unauthorized
     */
    public function scheduleTrackingEvents(): Resources\ScheduleTrackingEvents
    {
        return new Resources\ScheduleTrackingEvents;
    }

    public function scheduleType(string $scheduleType): Resources\ScheduleType
    {
        return new Resources\ScheduleType($scheduleType);
    }

    public function scheduleTypes(): Resources\ScheduleTypes
    {
        return new Resources\ScheduleTypes;
    }

    public function season(string $seasonId): Resources\Season
    {
        return new Resources\Season($seasonId);
    }

    public function seasons(): Resources\Seasons
    {
        return new Resources\Seasons;
    }

    public function seasonsAll(): Resources\SeasonsAll
    {
        return new Resources\SeasonsAll;
    }

    public function sitCodes(): Resources\SitCodes
    {
        return new Resources\SitCodes;
    }

    public function sky(): Resources\Sky
    {
        return new Resources\Sky;
    }

    public function sortModifiers(): Resources\SortModifiers
    {
        return new Resources\SortModifiers;
    }

    public function sport(int|string $sportId): Resources\Sport
    {
        return new Resources\Sport($sportId);
    }

    public function sportPlayers(int|string $sportId): Resources\SportPlayers
    {
        return new Resources\SportPlayers($sportId);
    }

    public function sports(int|string $sportId): Resources\Sports
    {
        return new Resources\Sports($sportId);
    }

    public function standings(string $standingsType): Resources\Standings
    {
        return new Resources\Standings($standingsType);
    }

    public function standingsTypes(): Resources\StandingsTypes
    {
        return new Resources\StandingsTypes;
    }

    public function statFields(): Resources\StatFields
    {
        return new Resources\StatFields;
    }

    public function statGroups(): Resources\StatGroups
    {
        return new Resources\StatGroups;
    }

    public function statTypes(): Resources\StatTypes
    {
        return new Resources\StatTypes;
    }

    public function statcastPositionTypes(): Resources\StatcastPositionTypes
    {
        return new Resources\StatcastPositionTypes;
    }

    public function stats(): Resources\Stats
    {
        return new Resources\Stats;
    }

    public function statsGrouped(): Resources\StatsGrouped
    {
        return new Resources\StatsGrouped;
    }

    public function statsLeaders(): Resources\StatsLeaders
    {
        return new Resources\StatsLeaders;
    }

    /**
     * 401 Unauthorized
     */
    public function statsMetrics(): Resources\StatsMetrics
    {
        return new Resources\StatsMetrics;
    }

    /**
     * 401 Unauthorized
     */
    public function statsOutsAboveAverage(): Resources\StatsOutsAboveAverage
    {
        return new Resources\StatsOutsAboveAverage;
    }

    public function statsSearch(): Resources\StatsSearch
    {
        return new Resources\StatsSearch;
    }

    /**
     * 401 Unauthorized
     */
    public function statsSearchBeast(): Resources\StatsSearchBeast
    {
        return new Resources\StatsSearchBeast;
    }

    public function statsSearchConfig(): Resources\StatsSearchConfig
    {
        return new Resources\StatsSearchConfig;
    }

    public function statsSearchGroupByTypes(): Resources\StatsSearchGroupByTypes
    {
        return new Resources\StatsSearchGroupByTypes;
    }

    public function statsSearchParams(): Resources\StatsSearchParams
    {
        return new Resources\StatsSearchParams;
    }

    /**
     * 401 Unauthorized
     */
    public function statsSprayChart(): Resources\StatsSprayChart
    {
        return new Resources\StatsSprayChart;
    }

    /**
     * 401 Unauthorized
     */
    public function statsStolenBaseProbability(): Resources\StatsStolenBaseProbability
    {
        return new Resources\StatsStolenBaseProbability;
    }

    public function streakTypes(): Resources\StreakTypes
    {
        return new Resources\StreakTypes;
    }

    /**
     * 401 Unauthorized
     */
    public function streaks(): Resources\Streaks
    {
        return new Resources\Streaks;
    }

    public function team(int|string $teamId): Resources\Team
    {
        return new Resources\Team($teamId);
    }

    public function teamAffiliates(int|string $teamId): Resources\TeamAffiliates
    {
        return new Resources\TeamAffiliates($teamId);
    }

    public function teamAlumni(int|string $teamId): Resources\TeamAlumni
    {
        return new Resources\TeamAlumni($teamId);
    }

    public function teamCoaches(int|string $teamId): Resources\TeamCoaches
    {
        return new Resources\TeamCoaches($teamId);
    }

    public function teamHistory(int|string $teamId): Resources\TeamHistory
    {
        return new Resources\TeamHistory($teamId);
    }

    /**
     * Object not found?
     */
    public function teamLeaders(int|string $teamId): Resources\TeamLeaders
    {
        return new Resources\TeamLeaders($teamId);
    }

    public function teamPersonnel(int|string $teamId): Resources\TeamPersonnel
    {
        return new Resources\TeamPersonnel($teamId);
    }

    public function teamRoster(int|string $teamId): Resources\TeamRoster
    {
        return new Resources\TeamRoster($teamId);
    }

    public function teamRosterType(int|string $teamId, string $rosterType): Resources\TeamRosterType
    {
        return new Resources\TeamRosterType($teamId, $rosterType);
    }

    /**
     * Object not found?
     */
    public function teamStats(int|string $teamId): Resources\TeamStats
    {
        return new Resources\TeamStats($teamId);
    }

    public function teams(): Resources\Teams
    {
        return new Resources\Teams;
    }

    public function teamsAffiliates(): Resources\TeamsAffiliates
    {
        return new Resources\TeamsAffiliates;
    }

    public function teamsHistory(): Resources\TeamsHistory
    {
        return new Resources\TeamsHistory;
    }

    public function teamsStats(): Resources\TeamsStats
    {
        return new Resources\TeamsStats;
    }

    public function teamsStatsLeaders(): Resources\TeamsStatsLeaders
    {
        return new Resources\TeamsStatsLeaders;
    }

    public function trackingSoftwareVersions(): Resources\TrackingSoftwareVersions
    {
        return new Resources\TrackingSoftwareVersions;
    }

    public function trackingSystemOwners(): Resources\TrackingSystemOwners
    {
        return new Resources\TrackingSystemOwners;
    }

    public function trackingVendors(): Resources\TrackingVendors
    {
        return new Resources\TrackingVendors;
    }

    public function trackingVersions(): Resources\TrackingVersions
    {
        return new Resources\TrackingVersions;
    }

    public function transactionTypes(): Resources\TransactionTypes
    {
        return new Resources\TransactionTypes;
    }

    public function transactions(): Resources\Transactions
    {
        return new Resources\Transactions;
    }

    public function uniformsByGame(): Resources\UniformsByGame
    {
        return new Resources\UniformsByGame;
    }

    public function uniformsByTeam(): Resources\UniformsByTeam
    {
        return new Resources\UniformsByTeam;
    }

    public function venue(int|string $venueId): Resources\Venue
    {
        return new Resources\Venue($venueId);
    }

    public function venues(): Resources\Venues
    {
        return new Resources\Venues;
    }

    public function videoResolutionTypes(): Resources\VideoResolutionTypes
    {
        return new Resources\VideoResolutionTypes;
    }

    public function violationTypes(): Resources\ViolationTypes
    {
        return new Resources\ViolationTypes;
    }

    /**
     * 401 Unauthorized
     */
    public function weatherBasic(int|string $venueId): Resources\WeatherBasic
    {
        return new Resources\WeatherBasic($venueId);
    }

    /**
     * 401 Unauthorized
     */
    public function weatherByPlay(int|string $gamePk, string $playId): Resources\WeatherByPlay
    {
        return new Resources\WeatherByPlay($gamePk, $playId);
    }

    /**
     * 401 Unauthorized
     */
    public function weatherForecast(int|string $gamePk, string $roofType): Resources\WeatherForecast
    {
        return new Resources\WeatherForecast($gamePk, $roofType);
    }

    /**
     * 401 Unauthorized
     */
    public function weatherFull(int|string $venueId): Resources\WeatherFull
    {
        return new Resources\WeatherFull($venueId);
    }

    public function weatherTrajectoryConfidences(): Resources\WeatherTrajectoryConfidences
    {
        return new Resources\WeatherTrajectoryConfidences;
    }

    public function windDirection(): Resources\WindDirection
    {
        return new Resources\WindDirection;
    }
}
