<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\LeagueListId;

trait HasLeagueListId
{
    protected $leagueListId;

    public function leagueListId(LeagueListId|string|int $leagueListId)
    {
        $this->leagueListId = $leagueListId instanceof LeagueListId
            ? $leagueListId->value
            : (string) $leagueListId;

        return $this;
    }

    public function milbFull()
    {
        return $this->leagueListId(LeagueListId::MILB_FULL);
    }

    public function milbShort()
    {
        return $this->leagueListId(LeagueListId::MILB_SHORT);
    }

    public function milbComplex()
    {
        return $this->leagueListId(LeagueListId::MILB_COMPLEX);
    }

    public function milbAll()
    {
        return $this->leagueListId(LeagueListId::MILB_ALL);
    }

    public function milbAllNoMex()
    {
        return $this->leagueListId(LeagueListId::MILB_ALL_NOMEX);
    }

    public function milbAllDomestic()
    {
        return $this->leagueListId(LeagueListId::MILB_ALL_DOMESTIC);
    }

    public function milbNonComp()
    {
        return $this->leagueListId(LeagueListId::MILB_NONCOMP);
    }

    public function milbNonCompNoMex()
    {
        return $this->leagueListId(LeagueListId::MILB_NONCOMP_NOMEX);
    }

    public function milbDomComp()
    {
        return $this->leagueListId(LeagueListId::MILB_DOMCOMP);
    }

    public function milbIntComp()
    {
        return $this->leagueListId(LeagueListId::MILB_INTCOMP);
    }

    public function winNoAbl()
    {
        return $this->leagueListId(LeagueListId::WIN_NOABL);
    }

    public function winCaribbean()
    {
        return $this->leagueListId(LeagueListId::WIN_CARIBBEAN);
    }

    public function winAll()
    {
        return $this->leagueListId(LeagueListId::WIN_ALL);
    }

    public function abl()
    {
        return $this->leagueListId(LeagueListId::ABL);
    }

    public function mlb()
    {
        return $this->leagueListId(LeagueListId::MLB);
    }

    public function mlbHist()
    {
        return $this->leagueListId(LeagueListId::MLB_HIST);
    }

    public function mlbMilb()
    {
        return $this->leagueListId(LeagueListId::MLB_MILB);
    }

    public function mlbMilbHist()
    {
        return $this->leagueListId(LeagueListId::MLB_MILB_HIST);
    }

    public function mlbMilbWin()
    {
        return $this->leagueListId(LeagueListId::MLB_MILB_WIN);
    }

    public function baseballAll()
    {
        return $this->leagueListId(LeagueListId::BASEBALL_ALL);
    }
}
