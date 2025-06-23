<?php

namespace Zacksmash\MlbStats;

use Zacksmash\MlbStats\Enums\HighLowOrgType;

class MlbStats
{
    public function attendance(): Resources\Attendance
    {
        return new Resources\Attendance;
    }

    public function awardRecipients(int|string $awardId): Resources\AwardRecipients
    {
        return new Resources\AwardRecipients($awardId);
    }

    public function conference(int|string $conferenceId): Resources\Conference
    {
        return new Resources\Conference($conferenceId);
    }

    public function conferences(): Resources\Conferences
    {
        return new Resources\Conferences;
    }

    public function divisions(): Resources\Divisions
    {
        return new Resources\Divisions;
    }

    public function draft(string $year): Resources\Draft
    {
        return new Resources\Draft($year);
    }

    public function draftLatest(string $year): Resources\DraftLatest
    {
        return new Resources\DraftLatest($year);
    }

    public function draftProspects(string $year): Resources\DraftProspects
    {
        return new Resources\DraftProspects($year);
    }

    public function gameAnalyticsGame(): Resources\GameAnalyticsGame
    {
        return new Resources\GameAnalyticsGame;
    }

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

    public function gameColorFeed(int|string $gamePk): Resources\GameColorFeed
    {
        return new Resources\GameColorFeed($gamePk);
    }

    public function gameColorFeedDiffPatch(int|string $gamePk): Resources\GameColorFeedDiffPatch
    {
        return new Resources\GameColorFeedDiffPatch($gamePk);
    }

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

    public function gameGuidAnalytics(int|string $gamePk, string $guid): Resources\GameGuidAnalytics
    {
        return new Resources\GameGuidAnalytics($gamePk, $guid);
    }

    public function gameGuidContextMetricsAverages(int|string $gamePk, string $guid): Resources\GameGuidContextMetricsAverages
    {
        return new Resources\GameGuidContextMetricsAverages($gamePk, $guid);
    }

    public function gameGuids(int|string $gamePk): Resources\GameGuids
    {
        return new Resources\GameGuids($gamePk);
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

    public function gamePace(): Resources\GamePace
    {
        return new Resources\GamePace;
    }

    public function gamePlayByPlay(int|string $gamePk): Resources\GamePlayByPlay
    {
        return new Resources\GamePlayByPlay($gamePk);
    }

    public function gameWinProbability(int|string $gamePk): Resources\GameWinProbability
    {
        return new Resources\GameWinProbability($gamePk);
    }

    public function highLow(HighLowOrgType|string $orgType): Resources\HighLow
    {
        return new Resources\HighLow($orgType);
    }

    public function homeRunDerby(int|string $gamePk): Resources\HomeRunDerby
    {
        return new Resources\HomeRunDerby($gamePk);
    }

    public function homeRunDerbyBracket(int|string $gamePk): Resources\HomeRunDerbyBracket
    {
        return new Resources\HomeRunDerbyBracket($gamePk);
    }

    public function homeRunDerbyPool(int|string $gamePk): Resources\HomeRunDerbyPool
    {
        return new Resources\HomeRunDerbyPool($gamePk);
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

    public function jobsUmpireGames(int|string $umpireId): Resources\JobsUmpireGames
    {
        return new Resources\JobsUmpireGames($umpireId);
    }

    public function jobsUmpires(): Resources\JobsUmpires
    {
        return new Resources\JobsUmpires;
    }

    public function league(): Resources\League
    {
        return new Resources\League;
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

    public function people(): Resources\People
    {
        return new Resources\People;
    }

    public function peopleFreeAgents(): Resources\PeopleFreeAgents
    {
        return new Resources\PeopleFreeAgents;
    }

    public function person(int|string $personId): Resources\Person
    {
        return new Resources\Person($personId);
    }

    public function personCurrentGameStats(int|string $personId): Resources\PersonCurrentGameStats
    {
        return new Resources\PersonCurrentGameStats($personId);
    }

    public function personGameStats(int|string $personId, int|string $gamePk): Resources\PersonGameStats
    {
        return new Resources\PersonGameStats($personId, $gamePk);
    }

    public function schedule(): Resources\Schedule
    {
        return new Resources\Schedule;
    }

    public function scheduleGamesTied(): Resources\ScheduleGamesTied
    {
        return new Resources\ScheduleGamesTied;
    }

    public function schedulePostseason(): Resources\SchedulePostseason
    {
        return new Resources\SchedulePostseason;
    }

    public function schedulePostseasonSeries(): Resources\SchedulePostseasonSeries
    {
        return new Resources\SchedulePostseasonSeries;
    }

    public function schedulePostseasonTuneIn(): Resources\SchedulePostseasonTuneIn
    {
        return new Resources\SchedulePostseasonTuneIn;
    }

    public function season(int|string $seasonId): Resources\Season
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

    public function sport(int|string $sportId): Resources\Sport
    {
        return new Resources\Sport($sportId);
    }

    public function sportPlayers(int|string $sportId): Resources\SportPlayers
    {
        return new Resources\SportPlayers($sportId);
    }

    public function sports(): Resources\Sports
    {
        return new Resources\Sports;
    }

    public function standings(): Resources\Standings
    {
        return new Resources\Standings;
    }

    public function stats(): Resources\Stats
    {
        return new Resources\Stats;
    }

    public function statsLeaders(): Resources\StatsLeaders
    {
        return new Resources\StatsLeaders;
    }

    public function statsMetrics(): Resources\StatsMetrics
    {
        return new Resources\StatsMetrics;
    }

    public function statsStreaks(): Resources\StatsStreaks
    {
        return new Resources\StatsStreaks;
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

    public function teamStats(int|string $teamId): Resources\TeamStats
    {
        return new Resources\TeamStats($teamId);
    }

    public function teamsStats(): Resources\TeamsStats
    {
        return new Resources\TeamsStats;
    }

    public function teamsStatsLeaders(): Resources\TeamsStatsLeaders
    {
        return new Resources\TeamsStatsLeaders;
    }

    public function venues(): Resources\Venues
    {
        return new Resources\Venues;
    }

    /**
     * Config Resources
     */
    public function awards(): Resources\Config\Awards
    {
        return new Resources\Config\Awards;
    }

    public function baseballStats(): Resources\Config\BaseballStats
    {
        return new Resources\Config\BaseballStats;
    }

    public function eventTypes(): Resources\Config\EventTypes
    {
        return new Resources\Config\EventTypes;
    }

    public function fielderDetailTypes(): Resources\Config\FielderDetailTypes
    {
        return new Resources\Config\FielderDetailTypes;
    }

    public function gameStatus(): Resources\Config\GameStatus
    {
        return new Resources\Config\GameStatus;
    }

    public function gameTypes(): Resources\Config\GameTypes
    {
        return new Resources\Config\GameTypes;
    }

    public function highLowTypes(): Resources\Config\HighLowTypes
    {
        return new Resources\Config\HighLowTypes;
    }

    public function hitTrajectories(): Resources\Config\HitTrajectories
    {
        return new Resources\Config\HitTrajectories;
    }

    public function jobTypes(): Resources\Config\JobTypes
    {
        return new Resources\Config\JobTypes;
    }

    public function languages(): Resources\Config\Languages
    {
        return new Resources\Config\Languages;
    }

    public function leagueLeaderTypes(): Resources\Config\LeagueLeaderTypes
    {
        return new Resources\Config\LeagueLeaderTypes;
    }

    public function logicalEvents(): Resources\Config\LogicalEvents
    {
        return new Resources\Config\LogicalEvents;
    }

    public function metrics(): Resources\Config\Metrics
    {
        return new Resources\Config\Metrics;
    }

    public function pitchCodes(): Resources\Config\PitchCodes
    {
        return new Resources\Config\PitchCodes;
    }

    public function pitchTypes(): Resources\Config\PitchTypes
    {
        return new Resources\Config\PitchTypes;
    }

    public function playerStatusCodes(): Resources\Config\PlayerStatusCodes
    {
        return new Resources\Config\PlayerStatusCodes;
    }

    public function positions(): Resources\Config\Positions
    {
        return new Resources\Config\Positions;
    }

    public function reviewReasons(): Resources\Config\ReviewReasons
    {
        return new Resources\Config\ReviewReasons;
    }

    public function rosterTypes(): Resources\Config\RosterTypes
    {
        return new Resources\Config\RosterTypes;
    }

    public function runnerDetailTypes(): Resources\Config\RunnerDetailTypes
    {
        return new Resources\Config\RunnerDetailTypes;
    }

    public function scheduleEventTypes(): Resources\Config\ScheduleEventTypes
    {
        return new Resources\Config\ScheduleEventTypes;
    }

    public function situationCodes(): Resources\Config\SituationCodes
    {
        return new Resources\Config\SituationCodes;
    }

    public function sky(): Resources\Config\Sky
    {
        return new Resources\Config\Sky;
    }

    public function standingsTypes(): Resources\Config\StandingsTypes
    {
        return new Resources\Config\StandingsTypes;
    }

    public function statGroups(): Resources\Config\StatGroups
    {
        return new Resources\Config\StatGroups;
    }

    public function statTypes(): Resources\Config\StatTypes
    {
        return new Resources\Config\StatTypes;
    }

    public function windDirection(): Resources\Config\WindDirection
    {
        return new Resources\Config\WindDirection;
    }
}
