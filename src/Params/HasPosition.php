<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\Position;

trait HasPosition
{
    protected $position;

    public function position(Position|string $position)
    {
        $this->position = $position instanceof Position
            ? $position->value
            : $position;

        return $this;
    }

    public function pitcher()
    {
        return $this->position(Position::PITCHER);
    }

    public function catcher()
    {
        return $this->position(Position::CATCHER);
    }

    public function firstBase()
    {
        return $this->position(Position::FIRST_BASE);
    }

    public function secondBase()
    {
        return $this->position(Position::SECOND_BASE);
    }

    public function thirdBase()
    {
        return $this->position(Position::THIRD_BASE);
    }

    public function shortstop()
    {
        return $this->position(Position::SHORTSTOP);
    }

    public function leftField()
    {
        return $this->position(Position::LEFT_FIELD);
    }

    public function centerField()
    {
        return $this->position(Position::CENTER_FIELD);
    }

    public function rightField()
    {
        return $this->position(Position::RIGHT_FIELD);
    }

    public function designatedHitter()
    {
        return $this->position(Position::DESIGNATED_HITTER);
    }

    public function outfield()
    {
        return $this->position(Position::OUTFIELD);
    }

    public function infield()
    {
        return $this->position(Position::INFIELD);
    }

    public function startingPitcher()
    {
        return $this->position(Position::STARTING_PITCHER);
    }

    public function reliefPitcher()
    {
        return $this->position(Position::RELIEF_PITCHER);
    }

    public function closerPitcher()
    {
        return $this->position(Position::CLOSER_PITCHER);
    }

    public function utility()
    {
        return $this->position(Position::UTILITY);
    }

    public function utilityInfield()
    {
        return $this->position(Position::UTILITY_INFIELD);
    }

    public function utilityOutfield()
    {
        return $this->position(Position::UTILITY_OUTFIELD);
    }

    public function rightHandedPitcher()
    {
        return $this->position(Position::RIGHT_HANDED_PITCHER);
    }

    public function leftHandedPitcher()
    {
        return $this->position(Position::LEFT_HANDED_PITCHER);
    }

    public function rightHandedShortstop()
    {
        return $this->position(Position::RIGHT_HANDED_SHORTSTOP);
    }

    public function leftHandedShortstop()
    {
        return $this->position(Position::LEFT_HANDED_SHORTSTOP);
    }

    public function leftHandedRunner()
    {
        return $this->position(Position::LEFT_HANDED_RUNNER);
    }

    public function rightHandedRunner()
    {
        return $this->position(Position::RIGHT_HANDED_RUNNER);
    }

    public function batter()
    {
        return $this->position(Position::BATTER);
    }

    public function unknown()
    {
        return $this->position(Position::UNKNOWN);
    }

    public function pinchHitter()
    {
        return $this->position(Position::PINCH_HITTER);
    }

    public function pinchRunner()
    {
        return $this->position(Position::PINCH_RUNNER);
    }

    public function benchRunner()
    {
        return $this->position(Position::BENCH_RUNNER);
    }
}
