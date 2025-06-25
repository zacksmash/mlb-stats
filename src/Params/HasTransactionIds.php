<?php

namespace Zacksmash\MlbStats\Params;

trait HasTransactionIds
{
    protected $transactionIds;

    /**
     * No Description Provided
     */
    public function transactionIds(mixed $args)
    {
        $transactionIds = is_array($args) ? $args : func_get_args();

        $this->transactionIds = implode(',', $transactionIds);

        return $this;
    }
}
