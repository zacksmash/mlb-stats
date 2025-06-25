<?php

namespace Zacksmash\MlbStats\Params;

trait HasOrgId
{
    protected $orgId;

    /**
     * Comma delimited list of top level organizations of a sport
     */
    public function orgId(mixed $args)
    {
        $orgId = is_array($args) ? $args : func_get_args();

        $this->orgId = implode(',', $orgId);

        return $this;
    }
}
