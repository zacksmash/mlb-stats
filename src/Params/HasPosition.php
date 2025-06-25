<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\Positions;

trait HasPosition
{
    protected $position;

    /**
     * Position number. Format: 1, 2, 3, etc
     */
    public function position(Positions|string $position)
    {
        $this->position = $position instanceof Positions
            ? $position->value
            : $position;

        return $this;
    }

    /**
     * Set position to PITCHER
     */
    public function pitcher()
    {
        return $this->position(Positions::PITCHER);
    }

    /**
     * Set position to CATCHER
     */
    public function catcher()
    {
        return $this->position(Positions::CATCHER);
    }

    /**
     * Set position to FIRST_BASE
     */
    public function firstBase()
    {
        return $this->position(Positions::FIRST_BASE);
    }

    /**
     * Set position to SECOND_BASE
     */
    public function secondBase()
    {
        return $this->position(Positions::SECOND_BASE);
    }

    /**
     * Set position to THIRD_BASE
     */
    public function thirdBase()
    {
        return $this->position(Positions::THIRD_BASE);
    }

    /**
     * Set position to SHORTSTOP
     */
    public function shortstop()
    {
        return $this->position(Positions::SHORTSTOP);
    }

    /**
     * Set position to LEFT_FIELD
     */
    public function leftField()
    {
        return $this->position(Positions::LEFT_FIELD);
    }

    /**
     * Set position to CENTER_FIELD
     */
    public function centerField()
    {
        return $this->position(Positions::CENTER_FIELD);
    }

    /**
     * Set position to RIGHT_FIELD
     */
    public function rightField()
    {
        return $this->position(Positions::RIGHT_FIELD);
    }

    /**
     * Set position to DESIGNATED_HITTER
     */
    public function designatedHitter()
    {
        return $this->position(Positions::DESIGNATED_HITTER);
    }

    /**
     * Set position to PINCH_HITTER
     */
    public function pinchHitter()
    {
        return $this->position(Positions::PINCH_HITTER);
    }

    /**
     * Set position to PINCH_RUNNER
     */
    public function pinchRunner()
    {
        return $this->position(Positions::PINCH_RUNNER);
    }

    /**
     * Set position to EXTRA_HITTER
     */
    public function extraHitter()
    {
        return $this->position(Positions::EXTRA_HITTER);
    }

    /**
     * Set position to BASE_RUNNER
     */
    public function baseRunner()
    {
        return $this->position(Positions::BASE_RUNNER);
    }

    /**
     * Set position to OUTFIELD
     */
    public function outfield()
    {
        return $this->position(Positions::OUTFIELD);
    }

    /**
     * Set position to INFIELD
     */
    public function infield()
    {
        return $this->position(Positions::INFIELD);
    }

    /**
     * Set position to STARTING_PITCHER
     */
    public function startingPitcher()
    {
        return $this->position(Positions::STARTING_PITCHER);
    }

    /**
     * Set position to RELIEF_PITCHER
     */
    public function reliefPitcher()
    {
        return $this->position(Positions::RELIEF_PITCHER);
    }

    /**
     * Set position to CLOSER
     */
    public function closer()
    {
        return $this->position(Positions::CLOSER);
    }

    /**
     * Set position to UTLITY
     */
    public function utlity()
    {
        return $this->position(Positions::UTLITY);
    }

    /**
     * Set position to UTLITY_INFIELDER
     */
    public function utlityInfielder()
    {
        return $this->position(Positions::UTLITY_INFIELDER);
    }

    /**
     * Set position to UTLITY_OUTFIELDER
     */
    public function utlityOutfielder()
    {
        return $this->position(Positions::UTLITY_OUTFIELDER);
    }

    /**
     * Set position to RIGHT_HANDED_PITCHER
     */
    public function rightHandedPitcher()
    {
        return $this->position(Positions::RIGHT_HANDED_PITCHER);
    }

    /**
     * Set position to LEFT_HANDED_PITCHER
     */
    public function leftHandedPitcher()
    {
        return $this->position(Positions::LEFT_HANDED_PITCHER);
    }

    /**
     * Set position to RIGHT_HANDED_STARTER
     */
    public function rightHandedStarter()
    {
        return $this->position(Positions::RIGHT_HANDED_STARTER);
    }

    /**
     * Set position to LEFT_HANDED_STARTER
     */
    public function leftHandedStarter()
    {
        return $this->position(Positions::LEFT_HANDED_STARTER);
    }

    /**
     * Set position to LEFT_HANDED_RELIEVER
     */
    public function leftHandedReliever()
    {
        return $this->position(Positions::LEFT_HANDED_RELIEVER);
    }

    /**
     * Set position to RIGHT_HANDED_RELIEVER
     */
    public function rightHandedReliever()
    {
        return $this->position(Positions::RIGHT_HANDED_RELIEVER);
    }

    /**
     * Set position to TWO_WAY_PITCHER_INFIELDER
     */
    public function twoWayPitcherInfielder()
    {
        return $this->position(Positions::TWO_WAY_PITCHER_INFIELDER);
    }

    /**
     * Set position to TWO_WAY_PITCHER_OUTFIELDER
     */
    public function twoWayPitcherOutfielder()
    {
        return $this->position(Positions::TWO_WAY_PITCHER_OUTFIELDER);
    }

    /**
     * Set position to TWO_WAY_PITCHER_UTILITY
     */
    public function twoWayPitcherUtility()
    {
        return $this->position(Positions::TWO_WAY_PITCHER_UTILITY);
    }

    /**
     * Set position to TWO_WAY_PLAYER
     */
    public function twoWayPlayer()
    {
        return $this->position(Positions::TWO_WAY_PLAYER);
    }

    /**
     * Set position to BATTER
     */
    public function batter()
    {
        return $this->position(Positions::BATTER);
    }

    /**
     * Set position to UNKNOWN
     */
    public function unknown()
    {
        return $this->position(Positions::UNKNOWN);
    }

    /**
     * Set position to RUNNER_ON_FIRST
     */
    public function runnerOnFirst()
    {
        return $this->position(Positions::RUNNER_ON_FIRST);
    }

    /**
     * Set position to RUNNER_ON_SECOND
     */
    public function runnerOnSecond()
    {
        return $this->position(Positions::RUNNER_ON_SECOND);
    }

    /**
     * Set position to RUNNER_ON_THIRD
     */
    public function runnerOnThird()
    {
        return $this->position(Positions::RUNNER_ON_THIRD);
    }
}
