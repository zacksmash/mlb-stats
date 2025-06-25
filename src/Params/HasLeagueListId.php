<?php

namespace Zacksmash\MlbStats\Params;

use Zacksmash\MlbStats\Enums\LeagueListIds;

trait HasLeagueListId
{
    protected $leagueListId;

    /**
     * Unique League List Identifier
     */
    public function leagueListId(LeagueListIds|string $leagueListId)
    {
        $this->leagueListId = $leagueListId instanceof LeagueListIds
            ? $leagueListId->value
            : $leagueListId;

        return $this;
    }

    /**
     * Set leagueListId to MILB_FULL
     */
    public function milbFull()
    {
        return $this->leagueListId(LeagueListIds::MILB_FULL);
    }

    /**
     * Set leagueListId to MILB_SHORT
     */
    public function milbShort()
    {
        return $this->leagueListId(LeagueListIds::MILB_SHORT);
    }

    /**
     * Set leagueListId to MILB_COMPLEX
     */
    public function milbComplex()
    {
        return $this->leagueListId(LeagueListIds::MILB_COMPLEX);
    }

    /**
     * Set leagueListId to MILB_ALL
     */
    public function milbAll()
    {
        return $this->leagueListId(LeagueListIds::MILB_ALL);
    }

    /**
     * Set leagueListId to MILB_ALL_NOMEX
     */
    public function milbAllNomex()
    {
        return $this->leagueListId(LeagueListIds::MILB_ALL_NOMEX);
    }

    /**
     * Set leagueListId to MILB_ALL_DOMESTIC
     */
    public function milbAllDomestic()
    {
        return $this->leagueListId(LeagueListIds::MILB_ALL_DOMESTIC);
    }

    /**
     * Set leagueListId to MILB_NONCOMP
     */
    public function milbNoncomp()
    {
        return $this->leagueListId(LeagueListIds::MILB_NONCOMP);
    }

    /**
     * Set leagueListId to MILB_NONCOMP_NOMEX
     */
    public function milbNoncompNomex()
    {
        return $this->leagueListId(LeagueListIds::MILB_NONCOMP_NOMEX);
    }

    /**
     * Set leagueListId to MILB_DOMCOMP
     */
    public function milbDomcomp()
    {
        return $this->leagueListId(LeagueListIds::MILB_DOMCOMP);
    }

    /**
     * Set leagueListId to MILB_INTCOMP
     */
    public function milbIntcomp()
    {
        return $this->leagueListId(LeagueListIds::MILB_INTCOMP);
    }

    /**
     * Set leagueListId to WIN_NOABL
     */
    public function winNoabl()
    {
        return $this->leagueListId(LeagueListIds::WIN_NOABL);
    }

    /**
     * Set leagueListId to WIN_CARIBBEAN
     */
    public function winCaribbean()
    {
        return $this->leagueListId(LeagueListIds::WIN_CARIBBEAN);
    }

    /**
     * Set leagueListId to WIN_ALL
     */
    public function winAll()
    {
        return $this->leagueListId(LeagueListIds::WIN_ALL);
    }

    /**
     * Set leagueListId to ABL
     */
    public function abl()
    {
        return $this->leagueListId(LeagueListIds::ABL);
    }

    /**
     * Set leagueListId to MEX_ALL
     */
    public function mexAll()
    {
        return $this->leagueListId(LeagueListIds::MEX_ALL);
    }

    /**
     * Set leagueListId to MLB
     */
    public function mlb()
    {
        return $this->leagueListId(LeagueListIds::MLB);
    }

    /**
     * Set leagueListId to MLB_HIST
     */
    public function mlbHist()
    {
        return $this->leagueListId(LeagueListIds::MLB_HIST);
    }

    /**
     * Set leagueListId to MLB_MILB
     */
    public function mlbMilb()
    {
        return $this->leagueListId(LeagueListIds::MLB_MILB);
    }

    /**
     * Set leagueListId to MLB_MILB_HIST
     */
    public function mlbMilbHist()
    {
        return $this->leagueListId(LeagueListIds::MLB_MILB_HIST);
    }

    /**
     * Set leagueListId to MLB_MILB_WIN
     */
    public function mlbMilbWin()
    {
        return $this->leagueListId(LeagueListIds::MLB_MILB_WIN);
    }

    /**
     * Set leagueListId to BASEBALL_ALL
     */
    public function baseballAll()
    {
        return $this->leagueListId(LeagueListIds::BASEBALL_ALL);
    }

    /**
     * Set leagueListId to MLB_SPRING
     */
    public function mlbSpring()
    {
        return $this->leagueListId(LeagueListIds::MLB_SPRING);
    }

    /**
     * Set leagueListId to MLB_AL_NL
     */
    public function mlbAlNl()
    {
        return $this->leagueListId(LeagueListIds::MLB_AL_NL);
    }

    /**
     * Set leagueListId to MLB_NEGRO
     */
    public function mlbNegro()
    {
        return $this->leagueListId(LeagueListIds::MLB_NEGRO);
    }

    /**
     * Set leagueListId to NEGRO_ALL
     */
    public function negroAll()
    {
        return $this->leagueListId(LeagueListIds::NEGRO_ALL);
    }
}
