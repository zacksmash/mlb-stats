<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\FilterLevels;

trait HasFilterLevel
{
    protected $filterLevel;

    /**
     * Categories of filters for stat search
     */
    public function filterLevel(FilterLevels|string $filterLevel)
    {
        $this->filterLevel = $filterLevel instanceof FilterLevels
            ? $filterLevel->value
            : $filterLevel;

        return $this;
    }

    /**
     * Set filterLevel to PITCH
     */
    public function pitch()
    {
        return $this->filterLevel(FilterLevels::PITCH);
    }

    /**
     * Set filterLevel to AT_BAT
     */
    public function atBat()
    {
        return $this->filterLevel(FilterLevels::AT_BAT);
    }

    /**
     * Set filterLevel to INNING
     */
    public function inning()
    {
        return $this->filterLevel(FilterLevels::INNING);
    }

    /**
     * Set filterLevel to PITCH_TYPE
     */
    public function pitchType()
    {
        return $this->filterLevel(FilterLevels::PITCH_TYPE);
    }

    /**
     * Set filterLevel to GAME
     */
    public function game()
    {
        return $this->filterLevel(FilterLevels::GAME);
    }

    /**
     * Set filterLevel to SEASON
     */
    public function season()
    {
        return $this->filterLevel(FilterLevels::SEASON);
    }

    /**
     * Set filterLevel to CAREER
     */
    public function career()
    {
        return $this->filterLevel(FilterLevels::CAREER);
    }

    /**
     * Set filterLevel to NONE
     */
    public function none()
    {
        return $this->filterLevel(FilterLevels::NONE);
    }
}
