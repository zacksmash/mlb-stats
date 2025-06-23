<?php

namespace Zacksmash\MlbStats\Enums;

enum Position: string
{
    case PITCHER = 'P';
    case CATCHER = 'C';
    case FIRST_BASE = '1B';
    case SECOND_BASE = '2B';
    case THIRD_BASE = '3B';
    case SHORTSTOP = 'SS';
    case LEFT_FIELD = 'LF';
    case CENTER_FIELD = 'CF';
    case RIGHT_FIELD = 'RF';
    case DESIGNATED_HITTER = 'DH';
    case PINCH_HITTER = 'PH';
    case PINCH_RUNNER = 'PR';
    case BENCH_RUNNER = 'BR';
    case OUTFIELD = 'OF';
    case INFIELD = 'IF';
    case STARTING_PITCHER = 'SP';
    case RELIEF_PITCHER = 'RP';
    case CLOSER_PITCHER = 'CP';
    case UTILITY = 'UT';
    case UTILITY_INFIELD = 'UI';
    case UTILITY_OUTFIELD = 'UO';
    case RIGHT_HANDED_PITCHER = 'RHP';
    case LEFT_HANDED_PITCHER = 'LHP';
    case RIGHT_HANDED_SHORTSTOP = 'RHS';
    case LEFT_HANDED_SHORTSTOP = 'LHS';
    case LEFT_HANDED_RUNNER = 'LHR';
    case RIGHT_HANDED_RUNNER = 'RHR';
    case BATTER = 'B';
    case UNKNOWN = 'X';
}
