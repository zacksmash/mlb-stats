<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\SortOrders;

trait HasSortOrder
{
    protected $sortOrder;

    /**
     * The order of sorting, ascending or descending
     */
    public function sortOrder(SortOrders|string $sortOrder)
    {
        $this->sortOrder = $sortOrder instanceof SortOrders
            ? $sortOrder->value
            : $sortOrder;

        return $this;
    }

    /**
     * Set sortOrder to ASC
     */
    public function sortAsc()
    {
        return $this->sortOrder(SortOrders::ASC);
    }

    /**
     * Set sortOrder to DESC
     */
    public function sortDesc()
    {
        return $this->sortOrder(SortOrders::DESC);
    }
}
