<?php

namespace Zacksmash\MlbStats\Params;

trait HasGameDate
{
    protected $gameDate;

    /**
     * Date of Game. Format: YYYY-MM-DD
     */
    public function gameDate(string $gameDate)
    {
        $this->gameDate = $gameDate;

        return $this;
    }
}
