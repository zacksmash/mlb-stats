<?php

namespace Zacksmash\MlbStats\Params;

trait HasTransactionTypes
{
    protected $transactionTypes;

    /**
     * No Description Provided
     */
    public function transactionTypes(mixed $args)
    {
        $transactionTypes = is_array($args) ? $args : func_get_args();

        $this->transactionTypes = implode(',', $transactionTypes);

        return $this;
    }
}
