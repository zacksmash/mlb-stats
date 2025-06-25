<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\Orders;

trait HasOrder
{
    protected $order;

    /**
     * The order of sorting, ascending or descending
     */
    public function order(Orders|string $order = Orders::ASC)
    {
        $this->order = $order instanceof Orders
            ? $order->value
            : $order;

        return $this;
    }

    /**
     * Set order to ASC
     */
    public function orderAsc()
    {
        return $this->order(Orders::ASC);
    }

    /**
     * Set order to DESC
     */
    public function orderDesc()
    {
        return $this->order(Orders::DESC);
    }
}
