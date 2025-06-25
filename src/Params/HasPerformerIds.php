<?php

namespace Zacksmash\MlbStats\Params;

trait HasPerformerIds
{
    protected $performerIds;

    /**
     * A unique identifier for non-team event performers
     */
    public function performerIds(mixed $args)
    {
        $performerIds = is_array($args) ? $args : func_get_args();

        $this->performerIds = implode(',', $performerIds);

        return $this;
    }
}
