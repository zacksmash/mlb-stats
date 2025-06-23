<?php

namespace Zacksmash\MlbStats\Params;

trait HasFields
{
    protected $fields;

    public function fields(mixed $fields)
    {
        $fields = is_array($fields) ? $fields : func_get_args();

        $this->fields = implode(',', $fields);

        return $this;
    }
}
