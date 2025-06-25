<?php

namespace Zacksmash\MlbStats\Params;

trait HasPlayIds
{
    protected $playIds;

    /**
     * Comma delimited list of unique play identifiers
     */
    public function playIds(mixed $args)
    {
        $playIds = is_array($args) ? $args : func_get_args();

        $this->playIds = implode(',', $playIds);

        return $this;
    }
}
