<?php

namespace Zacksmash\MlbStats\Params;

trait HasMilestoneValues
{
    protected $milestoneValues;

    /**
     * Comma delimited list of milestone values
     */
    public function milestoneValues(mixed $args)
    {
        $milestoneValues = is_array($args) ? $args : func_get_args();

        $this->milestoneValues = implode(',', $milestoneValues);

        return $this;
    }
}
