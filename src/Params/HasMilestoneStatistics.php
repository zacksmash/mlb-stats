<?php

namespace Zacksmash\MlbStats\Params;

trait HasMilestoneStatistics
{
    protected $milestoneStatistics;

    /**
     * Comma delimited list of milestone statistics
     */
    public function milestoneStatistics(mixed $args)
    {
        $milestoneStatistics = is_array($args) ? $args : func_get_args();

        $this->milestoneStatistics = implode(',', $milestoneStatistics);

        return $this;
    }
}
