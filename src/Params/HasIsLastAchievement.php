<?php

namespace Zacksmash\MlbStats\Params;

trait HasIsLastAchievement
{
    protected $isLastAchievement;

    /**
     * Filters out milestones that have already been surpassed.
     */
    public function isLastAchievement(bool $isLastAchievement = true)
    {
        $this->isLastAchievement = $isLastAchievement;

        return $this;
    }
}
