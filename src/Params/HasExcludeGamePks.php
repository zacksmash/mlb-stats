<?php

namespace Zacksmash\MlbStats\Params;

trait HasExcludeGamePks
{
    protected $excludeGamePks;

    /**
     * Comma delimited list of unique primary keys
     */
    public function excludeGamePks(mixed $args)
    {
        $excludeGamePks = is_array($args) ? $args : func_get_args();

        $this->excludeGamePks = implode(',', $excludeGamePks);

        return $this;
    }
}
