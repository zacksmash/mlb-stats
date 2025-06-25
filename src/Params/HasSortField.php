<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\SortFields;

trait HasSortField
{
    protected $sortField;

    /**
     * Baseball statField to sort on.  If no statField is given, sortField defaults to BASIC.  If 1 statField is given, that is the default sortField.
     */
    public function sortField(SortFields|string $sortField)
    {
        $this->sortField = $sortField instanceof SortFields
            ? $sortField->value
            : $sortField;

        return $this;
    }

    /**
     * Set sortField to STANDARD
     */
    public function standard()
    {
        return $this->sortField(SortFields::STANDARD);
    }

    /**
     * Set sortField to ADVANCED
     */
    public function advanced()
    {
        return $this->sortField(SortFields::ADVANCED);
    }

    /**
     * Set sortField to TRACKING
     */
    public function tracking()
    {
        return $this->sortField(SortFields::TRACKING);
    }

    /**
     * Set sortField to EXPECTED
     */
    public function expected()
    {
        return $this->sortField(SortFields::EXPECTED);
    }

    /**
     * Set sortField to SABERMETRICS
     */
    public function sabermetrics()
    {
        return $this->sortField(SortFields::SABERMETRICS);
    }

    /**
     * Set sortField to RANKING
     */
    public function ranking()
    {
        return $this->sortField(SortFields::RANKING);
    }

    /**
     * Set sortField to PERCENTILE
     */
    public function percentile()
    {
        return $this->sortField(SortFields::PERCENTILE);
    }
}
