<?php

namespace Zacksmash\MlbStats\Params;

trait HasFields
{
    protected $fields;

    /**
     * Comma delimited list of specific fields to be returned. Format: topLevelNode, childNode, attribute
     */
    public function fields(mixed $args)
    {
        $fields = is_array($args) ? $args : func_get_args();

        $this->fields = implode(',', $fields);

        return $this;
    }
}
