<?php

namespace Zacksmash\MlbStats\Params;

trait HasOrder
{
    protected $order;

    public function order(string $order)
    {
        $this->order = $order;

        return $this;
    }
}
