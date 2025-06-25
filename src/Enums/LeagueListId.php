<?php

namespace Zacksmash\MlbStats\Enums;

enum LeagueListId: string
{
    case MILB_FULL = 'milb_full';
    case MILB_SHORT = 'milb_short';
    case MILB_COMPLEX = 'milb_complex';
    case MILB_ALL = 'milb_all';
    case MILB_ALL_NOMEX = 'milb_all_nomex';
    case MILB_ALL_DOMESTIC = 'milb_all_domestic';
    case MILB_NONCOMP = 'milb_noncomp';
    case MILB_NONCOMP_NOMEX = 'milb_noncomp_nomex';
    case MILB_DOMCOMP = 'milb_domcomp';
    case MILB_INTCOMP = 'milb_intcomp';
    case WIN_NOABL = 'win_noabl';
    case WIN_CARIBBEAN = 'win_caribbean';
    case WIN_ALL = 'win_all';
    case ABL = 'abl';
    case MLB = 'mlb';
    case MLB_HIST = 'mlb_hist';
    case MLB_MILB = 'mlb_milb';
    case MLB_MILB_HIST = 'mlb_milb_hist';
    case MLB_MILB_WIN = 'mlb_milb_win';
    case BASEBALL_ALL = 'baseball_all';
}
