<?php

namespace Zacksmash\MlbStats\Params;

trait HasStatFields
{
    protected $statFields;

    /**
     * Baseball stat fields to populate
     */
    public function statFields(mixed $args)
    {
        $statFields = is_array($args) ? $args : func_get_args();

        $this->statFields = implode(',', $statFields);

        return $this;
    }
}
