<?php

namespace Zacksmash\MlbStats\Enums;

enum LeagueListIds: string
{
    case MILB_FULL = 'MILB_FULL';
    case MILB_SHORT = 'MILB_SHORT';
    case MILB_COMPLEX = 'MILB_COMPLEX';
    case MILB_ALL = 'MILB_ALL';
    case MILB_ALL_NOMEX = 'MILB_ALL_NOMEX';
    case MILB_ALL_DOMESTIC = 'MILB_ALL_DOMESTIC';
    case MILB_NONCOMP = 'MILB_NONCOMP';
    case MILB_NONCOMP_NOMEX = 'MILB_NONCOMP_NOMEX';
    case MILB_DOMCOMP = 'MILB_DOMCOMP';
    case MILB_INTCOMP = 'MILB_INTCOMP';
    case WIN_NOABL = 'WIN_NOABL';
    case WIN_CARIBBEAN = 'WIN_CARIBBEAN';
    case WIN_ALL = 'WIN_ALL';
    case ABL = 'ABL';
    case MEX_ALL = 'MEX_ALL';
    case MLB = 'MLB';
    case MLB_HIST = 'MLB_HIST';
    case MLB_MILB = 'MLB_MILB';
    case MLB_MILB_HIST = 'MLB_MILB_HIST';
    case MLB_MILB_WIN = 'MLB_MILB_WIN';
    case BASEBALL_ALL = 'BASEBALL_ALL';
    case MLB_SPRING = 'MLB_SPRING';
    case MLB_AL_NL = 'MLB_AL_NL';
    case MLB_NEGRO = 'MLB_NEGRO';
    case NEGRO_ALL = 'NEGRO_ALL';

}
