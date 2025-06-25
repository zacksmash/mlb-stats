<?php

namespace Zacksmash\MlbStats\Params;

trait HasMilestoneTypes
{
    protected $milestoneTypes;

    /**
     * Comma delimited list of milestone types
     */
    public function milestoneTypes(mixed $args)
    {
        $milestoneTypes = is_array($args) ? $args : func_get_args();

        $this->milestoneTypes = implode(',', $milestoneTypes);

        return $this;
    }
}
