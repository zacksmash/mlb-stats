<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\GameTypes;

trait HasGameType
{
    protected $gameType;

    /**
     * Type of Game. Available types in /api/v1/gameTypes
     */
    public function gameType(GameTypes|string $gameType)
    {
        $this->gameType = $gameType instanceof GameTypes
            ? $gameType->value
            : $gameType;

        return $this;
    }

    /**
     * Set gameType to SPRING_TRAINING
     */
    public function springTraining()
    {
        return $this->gameType(GameTypes::SPRING_TRAINING);
    }

    /**
     * Set gameType to REGULAR_SEASON
     */
    public function regularSeason()
    {
        return $this->gameType(GameTypes::REGULAR_SEASON);
    }

    /**
     * Set gameType to FIRST_ROUND
     */
    public function firstRound()
    {
        return $this->gameType(GameTypes::FIRST_ROUND);
    }

    /**
     * Set gameType to DIVISION_SERIES
     */
    public function divisionSeries()
    {
        return $this->gameType(GameTypes::DIVISION_SERIES);
    }

    /**
     * Set gameType to LEAGUE_CHAMPIONSHIP_SERIES
     */
    public function leagueChampionshipSeries()
    {
        return $this->gameType(GameTypes::LEAGUE_CHAMPIONSHIP_SERIES);
    }

    /**
     * Set gameType to WORLD_SERIES
     */
    public function worldSeries()
    {
        return $this->gameType(GameTypes::WORLD_SERIES);
    }

    /**
     * Set gameType to CHAMPIONSHIP
     */
    public function championship()
    {
        return $this->gameType(GameTypes::CHAMPIONSHIP);
    }

    /**
     * Set gameType to NINETEENTH_CENTURY_SERIES
     */
    public function nineteenthCenturySeries()
    {
        return $this->gameType(GameTypes::NINETEENTH_CENTURY_SERIES);
    }

    /**
     * Set gameType to PLAYOFFS
     */
    public function playoffs()
    {
        return $this->gameType(GameTypes::PLAYOFFS);
    }

    /**
     * Set gameType to ALL_STAR
     */
    public function allStar()
    {
        return $this->gameType(GameTypes::ALL_STAR);
    }

    /**
     * Set gameType to INTRASQUAD
     */
    public function intrasquad()
    {
        return $this->gameType(GameTypes::INTRASQUAD);
    }

    /**
     * Set gameType to EXHIBITION
     */
    public function exhibition()
    {
        return $this->gameType(GameTypes::EXHIBITION);
    }
}
