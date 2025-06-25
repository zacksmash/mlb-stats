<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\SortModifiers;

trait HasSortModifier
{
    protected $sortModifier;

    /**
     * The prefix modifier for the sort stat.  avg, min, max. I.E minExitVelocity, maxLaunchAngle, avgHitDistance
     */
    public function sortModifier(SortModifiers|string $sortModifier)
    {
        $this->sortModifier = $sortModifier instanceof SortModifiers
            ? $sortModifier->value
            : $sortModifier;

        return $this;
    }

    /**
     * Set sortModifier to AVG
     */
    public function avg()
    {
        return $this->sortModifier(SortModifiers::AVG);
    }

    /**
     * Set sortModifier to MAX
     */
    public function max()
    {
        return $this->sortModifier(SortModifiers::MAX);
    }

    /**
     * Set sortModifier to MIN
     */
    public function min()
    {
        return $this->sortModifier(SortModifiers::MIN);
    }

    /**
     * Set sortModifier to NUM
     */
    public function num()
    {
        return $this->sortModifier(SortModifiers::NUM);
    }

    /**
     * Set sortModifier to P50
     */
    public function p50()
    {
        return $this->sortModifier(SortModifiers::P50);
    }

    /**
     * Set sortModifier to P75
     */
    public function p75()
    {
        return $this->sortModifier(SortModifiers::P75);
    }

    /**
     * Set sortModifier to P90
     */
    public function p90()
    {
        return $this->sortModifier(SortModifiers::P90);
    }

    /**
     * Set sortModifier to COMP
     */
    public function comp()
    {
        return $this->sortModifier(SortModifiers::COMP);
    }

    /**
     * Set sortModifier to NUM_COMP
     */
    public function numComp()
    {
        return $this->sortModifier(SortModifiers::NUM_COMP);
    }
}
