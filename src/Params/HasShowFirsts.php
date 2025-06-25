<?php

namespace Zacksmash\MlbStats\Params;

trait HasShowFirsts
{
    protected $showFirsts;

    /**
     * True to show play first milestones, like first HR, first Save, etc
     */
    public function showFirsts(bool $showFirsts = true)
    {
        $this->showFirsts = $showFirsts;

        return $this;
    }
}
