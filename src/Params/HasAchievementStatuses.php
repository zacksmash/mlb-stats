<?php

namespace Zacksmash\MlbStats\Params;

trait HasAchievementStatuses
{
    protected $achievementStatuses;

    /**
     * Comma delimited list of milestone achievement types
     */
    public function achievementStatuses(mixed $args)
    {
        $achievementStatuses = is_array($args) ? $args : func_get_args();

        $this->achievementStatuses = implode(',', $achievementStatuses);

        return $this;
    }
}
