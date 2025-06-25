<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\StatTypes;

trait HasStatType
{
    protected $statType;

    /**
     * No Description Provided
     */
    public function statType(StatTypes|string $statType)
    {
        $this->statType = $statType instanceof StatTypes
            ? $statType->value
            : $statType;

        return $this;
    }

    /**
     * Set statType to PROJECTED
     */
    public function projected()
    {
        return $this->statType(StatTypes::PROJECTED);
    }

    /**
     * Set statType to PROJECTED_ROS
     */
    public function projectedRos()
    {
        return $this->statType(StatTypes::PROJECTED_ROS);
    }

    /**
     * Set statType to YEAR_BY_YEAR
     */
    public function yearByYear()
    {
        return $this->statType(StatTypes::YEAR_BY_YEAR);
    }

    /**
     * Set statType to YEAR_BY_YEAR_ADVANCED
     */
    public function yearByYearAdvanced()
    {
        return $this->statType(StatTypes::YEAR_BY_YEAR_ADVANCED);
    }

    /**
     * Set statType to YEAR_BY_YEAR_PLAYOFFS
     */
    public function yearByYearPlayoffs()
    {
        return $this->statType(StatTypes::YEAR_BY_YEAR_PLAYOFFS);
    }

    /**
     * Set statType to SEASON
     */
    public function seasonLong()
    {
        return $this->statType(StatTypes::SEASON);
    }

    /**
     * Set statType to STANDARD
     */
    public function standard()
    {
        return $this->statType(StatTypes::STANDARD);
    }

    /**
     * Set statType to ADVANCED
     */
    public function advanced()
    {
        return $this->statType(StatTypes::ADVANCED);
    }

    /**
     * Set statType to CAREER
     */
    public function career()
    {
        return $this->statType(StatTypes::CAREER);
    }

    /**
     * Set statType to CAREER_REGULAR_SEASON
     */
    public function careerRegularSeason()
    {
        return $this->statType(StatTypes::CAREER_REGULAR_SEASON);
    }

    /**
     * Set statType to CAREER_ADVANCED
     */
    public function careerAdvanced()
    {
        return $this->statType(StatTypes::CAREER_ADVANCED);
    }

    /**
     * Set statType to SEASON_ADVANCED
     */
    public function seasonAdvanced()
    {
        return $this->statType(StatTypes::SEASON_ADVANCED);
    }

    /**
     * Set statType to CAREER_STAT_SPLITS
     */
    public function careerStatSplits()
    {
        return $this->statType(StatTypes::CAREER_STAT_SPLITS);
    }

    /**
     * Set statType to CAREER_PLAYOFFS
     */
    public function careerPlayoffs()
    {
        return $this->statType(StatTypes::CAREER_PLAYOFFS);
    }

    /**
     * Set statType to GAME_LOG
     */
    public function gameLog()
    {
        return $this->statType(StatTypes::GAME_LOG);
    }

    /**
     * Set statType to PLAY_LOG
     */
    public function playLog()
    {
        return $this->statType(StatTypes::PLAY_LOG);
    }

    /**
     * Set statType to PITCH_LOG
     */
    public function pitchLog()
    {
        return $this->statType(StatTypes::PITCH_LOG);
    }

    /**
     * Set statType to METRIC_LOG
     */
    public function metricLog()
    {
        return $this->statType(StatTypes::METRIC_LOG);
    }

    /**
     * Set statType to METRIC_AVERAGES
     */
    public function metricAverages()
    {
        return $this->statType(StatTypes::METRIC_AVERAGES);
    }

    /**
     * Set statType to PITCH_ARSENAL
     */
    public function pitchArsenal()
    {
        return $this->statType(StatTypes::PITCH_ARSENAL);
    }

    /**
     * Set statType to OUTS_ABOVE_AVERAGE
     */
    public function outsAboveAverage()
    {
        return $this->statType(StatTypes::OUTS_ABOVE_AVERAGE);
    }

    /**
     * Set statType to EXPECTED_STATISTICS
     */
    public function expectedStatistics()
    {
        return $this->statType(StatTypes::EXPECTED_STATISTICS);
    }

    /**
     * Set statType to SABERMETRICS
     */
    public function sabermetrics()
    {
        return $this->statType(StatTypes::SABERMETRICS);
    }

    /**
     * Set statType to SPRAY_CHART
     */
    public function sprayChart()
    {
        return $this->statType(StatTypes::SPRAY_CHART);
    }

    /**
     * Set statType to TRACKING_STATISTICS
     */
    public function trackingStatistics()
    {
        return $this->statType(StatTypes::TRACKING_STATISTICS);
    }

    /**
     * Set statType to VS_PLAYER
     */
    public function vsPlayer()
    {
        return $this->statType(StatTypes::VS_PLAYER);
    }

    /**
     * Set statType to VS_PLAYER_TOTAL
     */
    public function vsPlayerTotal()
    {
        return $this->statType(StatTypes::VS_PLAYER_TOTAL);
    }

    /**
     * Set statType to VS_PLAYER_5Y
     */
    public function vsPlayer5y()
    {
        return $this->statType(StatTypes::VS_PLAYER_5Y);
    }

    /**
     * Set statType to VS_TEAM
     */
    public function vsTeam()
    {
        return $this->statType(StatTypes::VS_TEAM);
    }

    /**
     * Set statType to VS_TEAM_5Y
     */
    public function vsTeam5y()
    {
        return $this->statType(StatTypes::VS_TEAM_5Y);
    }

    /**
     * Set statType to VS_TEAM_TOTAL
     */
    public function vsTeamTotal()
    {
        return $this->statType(StatTypes::VS_TEAM_TOTAL);
    }

    /**
     * Set statType to LAST_X_GAMES
     */
    public function lastXGames()
    {
        return $this->statType(StatTypes::LAST_X_GAMES);
    }

    /**
     * Set statType to BY_DATE_RANGE
     */
    public function byDateRange()
    {
        return $this->statType(StatTypes::BY_DATE_RANGE);
    }

    /**
     * Set statType to BY_DATE_RANGE_ADVANCED
     */
    public function byDateRangeAdvanced()
    {
        return $this->statType(StatTypes::BY_DATE_RANGE_ADVANCED);
    }

    /**
     * Set statType to BY_MONTH
     */
    public function byMonth()
    {
        return $this->statType(StatTypes::BY_MONTH);
    }

    /**
     * Set statType to BY_MONTH_PLAYOFFS
     */
    public function byMonthPlayoffs()
    {
        return $this->statType(StatTypes::BY_MONTH_PLAYOFFS);
    }

    /**
     * Set statType to BY_DAY_OF_WEEK
     */
    public function byDayOfWeek()
    {
        return $this->statType(StatTypes::BY_DAY_OF_WEEK);
    }

    /**
     * Set statType to BY_DAY_OF_WEEK_PLAYOFFS
     */
    public function byDayOfWeekPlayoffs()
    {
        return $this->statType(StatTypes::BY_DAY_OF_WEEK_PLAYOFFS);
    }

    /**
     * Set statType to HOME_AND_AWAY
     */
    public function homeAndAway()
    {
        return $this->statType(StatTypes::HOME_AND_AWAY);
    }

    /**
     * Set statType to HOME_AND_AWAY_PLAYOFFS
     */
    public function homeAndAwayPlayoffs()
    {
        return $this->statType(StatTypes::HOME_AND_AWAY_PLAYOFFS);
    }

    /**
     * Set statType to WIN_LOSS
     */
    public function winLoss()
    {
        return $this->statType(StatTypes::WIN_LOSS);
    }

    /**
     * Set statType to WIN_LOSS_PLAYOFFS
     */
    public function winLossPlayoffs()
    {
        return $this->statType(StatTypes::WIN_LOSS_PLAYOFFS);
    }

    /**
     * Set statType to RANKINGS
     */
    public function rankings()
    {
        return $this->statType(StatTypes::RANKINGS);
    }

    /**
     * Set statType to RANKINGS_BY_YEAR
     */
    public function rankingsByYear()
    {
        return $this->statType(StatTypes::RANKINGS_BY_YEAR);
    }

    /**
     * Set statType to STATS_SINGLE_SEASON
     */
    public function statsSingleSeason()
    {
        return $this->statType(StatTypes::STATS_SINGLE_SEASON);
    }

    /**
     * Set statType to STATS_SINGLE_SEASON_ADVANCED
     */
    public function statsSingleSeasonAdvanced()
    {
        return $this->statType(StatTypes::STATS_SINGLE_SEASON_ADVANCED);
    }

    /**
     * Set statType to HOT_COLD_ZONES
     */
    public function hotColdZones()
    {
        return $this->statType(StatTypes::HOT_COLD_ZONES);
    }

    /**
     * Set statType to AVAILABLE_STATS
     */
    public function availableStats()
    {
        return $this->statType(StatTypes::AVAILABLE_STATS);
    }

    /**
     * Set statType to OPPONENTS_FACED
     */
    public function opponentsFaced()
    {
        return $this->statType(StatTypes::OPPONENTS_FACED);
    }

    /**
     * Set statType to GAME_TYPE_STATS
     */
    public function gameTypeStats()
    {
        return $this->statType(StatTypes::GAME_TYPE_STATS);
    }

    /**
     * Set statType to FIRST_YEAR_STATS
     */
    public function firstYearStats()
    {
        return $this->statType(StatTypes::FIRST_YEAR_STATS);
    }

    /**
     * Set statType to LAST_YEAR_STATS
     */
    public function lastYearStats()
    {
        return $this->statType(StatTypes::LAST_YEAR_STATS);
    }

    /**
     * Set statType to STAT_SPLITS
     */
    public function statSplits()
    {
        return $this->statType(StatTypes::STAT_SPLITS);
    }

    /**
     * Set statType to STAT_SPLITS_ADVANCED
     */
    public function statSplitsAdvanced()
    {
        return $this->statType(StatTypes::STAT_SPLITS_ADVANCED);
    }

    /**
     * Set statType to AT_GAME_START
     */
    public function atGameStart()
    {
        return $this->statType(StatTypes::AT_GAME_START);
    }

    /**
     * Set statType to VS_OPPONENTS
     */
    public function vsOpponents()
    {
        return $this->statType(StatTypes::VS_OPPONENTS);
    }

    /**
     * Set statType to SABERMETRICS_MULTI_TEAM
     */
    public function sabermetricsMultiTeam()
    {
        return $this->statType(StatTypes::SABERMETRICS_MULTI_TEAM);
    }
}
