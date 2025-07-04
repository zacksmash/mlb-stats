<?php

namespace Zacksmash\MlbStats\Enums;

enum SortStats: string
{
    case AIROUTS = 'AIROUTS';
    case ASSISTS = 'ASSISTS';
    case AT_BATS = 'AT_BATS';
    case AT_BATS_PER_HOMERUN = 'AT_BATS_PER_HOMERUN';
    case BALK = 'BALK';
    case BATTING_AVERAGE = 'BATTING_AVERAGE';
    case BATTING_AVERAGE_BALLS_IN_PLAY = 'BATTING_AVERAGE_BALLS_IN_PLAY';
    case QUALITY_STARTS = 'QUALITY_STARTS';
    case BEQUEATHED_RUNNERS = 'BEQUEATHED_RUNNERS';
    case BEQUEATHED_RUNNERS_SCORED = 'BEQUEATHED_RUNNERS_SCORED';
    case BLOWN_SAVES = 'BLOWN_SAVES';
    case CATCHER_ERA = 'CATCHER_ERA';
    case CATCHERS_INTERFERENCE = 'CATCHERS_INTERFERENCE';
    case CAUGHT_STEALING = 'CAUGHT_STEALING';
    case CHANCES = 'CHANCES';
    case COMPLETE_GAME = 'COMPLETE_GAME';
    case DOUBLE_PLAYS = 'DOUBLE_PLAYS';
    case DOUBLES = 'DOUBLES';
    case EARNED_RUN = 'EARNED_RUN';
    case EARNED_RUN_AVERAGE = 'EARNED_RUN_AVERAGE';
    case ERRORS = 'ERRORS';
    case EXIT_VELOCITY = 'EXIT_VELOCITY';
    case EXTRA_BASE_HITS = 'EXTRA_BASE_HITS';
    case FIELDING_PERCENTAGE = 'FIELDING_PERCENTAGE';
    case FLYOUTS = 'FLYOUTS';
    case GAMES_FINISHED = 'GAMES_FINISHED';
    case GAMES_PLAYED = 'GAMES_PLAYED';
    case GAMES_STARTED = 'GAMES_STARTED';
    case GROUND_INTO_DOUBLE_PLAYS = 'GROUND_INTO_DOUBLE_PLAYS';
    case GROUND_INTO_DOUBLE_PLAY_OPPORTUNITIES = 'GROUND_INTO_DOUBLE_PLAY_OPPORTUNITIES';
    case GROUND_INTO_TRIPLE_PLAYS = 'GROUND_INTO_TRIPLE_PLAYS';
    case GROUNDOUTS = 'GROUNDOUTS';
    case GROUNDOUT_TO_FLYOUT_RATIO = 'GROUNDOUT_TO_FLYOUT_RATIO';
    case HITS = 'HITS';
    case HITS_RISP = 'HITS_RISP';
    case HIT_BATSMAN = 'HIT_BATSMAN';
    case HIT_BY_PITCHES = 'HIT_BY_PITCHES';
    case HITS_PER_9_INN = 'HITS_PER_9_INN';
    case HOLDS = 'HOLDS';
    case HOME_RUNS = 'HOME_RUNS';
    case HOME_RUNS_PER_PLATE_APPEARANCE = 'HOME_RUNS_PER_PLATE_APPEARANCE';
    case INHERITED_RUNNER = 'INHERITED_RUNNER';
    case INHERITED_RUNNER_SCORED = 'INHERITED_RUNNER_SCORED';
    case INNINGS = 'INNINGS';
    case OUTS_PITCHED = 'OUTS_PITCHED';
    case INNINGS_PITCHED = 'INNINGS_PITCHED';
    case INTENTIONAL_WALKS = 'INTENTIONAL_WALKS';
    case ISO = 'ISO';
    case LEFT_ON_BASE = 'LEFT_ON_BASE';
    case LEFT_ON_BASE_RISP = 'LEFT_ON_BASE_RISP';
    case LOSSES = 'LOSSES';
    case NUMBER_OF_STRIKES = 'NUMBER_OF_STRIKES';
    case NUMBER_OF_BALLS = 'NUMBER_OF_BALLS';
    case NUMBER_OF_PITCHES = 'NUMBER_OF_PITCHES';
    case ON_BASE_PERCENTAGE = 'ON_BASE_PERCENTAGE';
    case ON_BASE_PLUS_SLUGGING = 'ON_BASE_PLUS_SLUGGING';
    case OUTFIELD_ASSISTS = 'OUTFIELD_ASSISTS';
    case UZR = 'UZR';
    case PASSED_BALLS = 'PASSED_BALLS';
    case PICKOFFS = 'PICKOFFS';
    case PITCHES_PER_INNING = 'PITCHES_PER_INNING';
    case PITCHES_PER_PLATE_APPEARANCE = 'PITCHES_PER_PLATE_APPEARANCE';
    case PUT_OUTS = 'PUT_OUTS';
    case RANGE_FACTOR_PER_GAME = 'RANGE_FACTOR_PER_GAME';
    case RANGE_FACTOR_PER_9_INN = 'RANGE_FACTOR_PER_9_INN';
    case REACHED_ON_ERROR = 'REACHED_ON_ERROR';
    case RUNS = 'RUNS';
    case RUNS_BATTED_IN = 'RUNS_BATTED_IN';
    case SACRIFICE_BUNTS = 'SACRIFICE_BUNTS';
    case SACRIFICE_FLIES = 'SACRIFICE_FLIES';
    case SAVES = 'SAVES';
    case SAVE_OPPORTUNITIES = 'SAVE_OPPORTUNITIES';
    case SHUTOUTS = 'SHUTOUTS';
    case SLUGGING_PERCENTAGE = 'SLUGGING_PERCENTAGE';
    case STOLEN_BASES = 'STOLEN_BASES';
    case STOLEN_BASE_PERCENTAGE = 'STOLEN_BASE_PERCENTAGE';
    case STRIKEOUTS = 'STRIKEOUTS';
    case STRIKEOUTS_PER_9_INN = 'STRIKEOUTS_PER_9_INN';
    case STRIKEOUTS_PER_PLATE_APPEARANCE = 'STRIKEOUTS_PER_PLATE_APPEARANCE';
    case STRIKEOUT_WALK_RATIO = 'STRIKEOUT_WALK_RATIO';
    case THROWING_ERRORS = 'THROWING_ERRORS';
    case TOTAL_BASES = 'TOTAL_BASES';
    case TOTAL_BATTERS_FACED = 'TOTAL_BATTERS_FACED';
    case TOTAL_PLATE_APPEARANCES = 'TOTAL_PLATE_APPEARANCES';
    case TRIPLE_PLAYS = 'TRIPLE_PLAYS';
    case TRIPLES = 'TRIPLES';
    case WALKS_PER_STRIKEOUT = 'WALKS_PER_STRIKEOUT';
    case WALKS_PER_PLATE_APPEARANCE = 'WALKS_PER_PLATE_APPEARANCE';
    case WALKS_HITS_PER_INNING_PITCHED = 'WALKS_HITS_PER_INNING_PITCHED';
    case WALKS = 'WALKS';
    case WALKS_PER_9_INN = 'WALKS_PER_9_INN';
    case WALKOFFS = 'WALKOFFS';
    case WILD_PITCH = 'WILD_PITCH';
    case WINS = 'WINS';
    case WIN_PERCENTAGE = 'WIN_PERCENTAGE';
    case ATTENDANCE = 'ATTENDANCE';
    case DURATION = 'DURATION';
    case WIN_STREAK = 'WIN_STREAK';
    case LOSS_STREAK = 'LOSS_STREAK';
    case WOBA = 'WOBA';
    case XWOBA = 'XWOBA';
    case XWOBACON = 'XWOBACON';
    case XAVG = 'XAVG';
    case XSLG = 'XSLG';
    case LAUNCH_ANGLE = 'LAUNCH_ANGLE';
    case HOME_RUN_DISTANCE = 'HOME_RUN_DISTANCE';
    case HIT_DISTANCE = 'HIT_DISTANCE';
    case HANG_TIME = 'HANG_TIME';
    case MAX_HEIGHT = 'MAX_HEIGHT';
    case HIT_PROBABILITY = 'HIT_PROBABILITY';
    case CATCH_PROBABILITY = 'CATCH_PROBABILITY';
    case BARRELS = 'BARRELS';
    case PITCH_SPEED = 'PITCH_SPEED';
    case SPIN_RATE = 'SPIN_RATE';
    case EXTENSION = 'EXTENSION';
    case HORIZONTAL_BREAK = 'HORIZONTAL_BREAK';
    case ARM_STRENGTH = 'ARM_STRENGTH';
    case DISTANCE_COVERED = 'DISTANCE_COVERED';
    case EXCHANGE = 'EXCHANGE';
    case FIELDER_BURST_DISTANCE = 'FIELDER_BURST_DISTANCE';
    case FIELDER_JUMP_DISTANCE = 'FIELDER_JUMP_DISTANCE';
    case FIELDER_REACTION_DISTANCE = 'FIELDER_REACTION_DISTANCE';
    case FIRST_STEP = 'FIRST_STEP';
    case FIRST_STEP_EFFICIENCY = 'FIRST_STEP_EFFICIENCY';
    case POP_TIME_1B = 'POP_TIME_1B';
    case POP_TIME_2B = 'POP_TIME_2B';
    case POP_TIME_3B = 'POP_TIME_3B';
    case ROUTE_EFFICIENCY = 'ROUTE_EFFICIENCY';
    case SPRINT_SPEED = 'SPRINT_SPEED';
    case THROW_ACCURACY = 'THROW_ACCURACY';
    case THROW_DISTANCE = 'THROW_DISTANCE';
    case THROW_DISTANCE_WITH_BOUNCES = 'THROW_DISTANCE_WITH_BOUNCES';
    case ACCELERATION = 'ACCELERATION';
    case BURST = 'BURST';
    case FIRST_TO_HOME = 'FIRST_TO_HOME';
    case FIRST_TO_SECOND = 'FIRST_TO_SECOND';
    case FIRST_TO_THIRD = 'FIRST_TO_THIRD';
    case HOME_RUN_TROT = 'HOME_RUN_TROT';
    case HOME_TO_FIRST = 'HOME_TO_FIRST';
    case HOME_TO_SECOND = 'HOME_TO_SECOND';
    case HOME_TO_THIRD = 'HOME_TO_THIRD';
    case LEAD_DISTANCE = 'LEAD_DISTANCE';
    case OUT_OF_BOX = 'OUT_OF_BOX';
    case SECOND_TO_HOME = 'SECOND_TO_HOME';
    case SECOND_TO_THIRD = 'SECOND_TO_THIRD';
    case SECONDARY_LEAD_DISTANCE = 'SECONDARY_LEAD_DISTANCE';
    case STEAL_FIRST_TO_SECOND = 'STEAL_FIRST_TO_SECOND';
    case STEAL_SECOND_TO_THIRD = 'STEAL_SECOND_TO_THIRD';
    case STEAL_THIRD_TO_HOME = 'STEAL_THIRD_TO_HOME';
    case TAG_FIRST_STEP = 'TAG_FIRST_STEP';
    case TAG_FIRST_TO_SECOND = 'TAG_FIRST_TO_SECOND';
    case TAG_SECOND_TO_THIRD = 'TAG_SECOND_TO_THIRD';
    case TAG_THIRD_TO_HOME = 'TAG_THIRD_TO_HOME';
    case THIRD_TO_HOME = 'THIRD_TO_HOME';
    case OUTS_ABOVE_AVERAGE = 'OUTS_ABOVE_AVERAGE';
    case FIELDING_RUNS_PREVENTED = 'FIELDING_RUNS_PREVENTED';
    case STREAK = 'STREAK';
    case WINS_ABOVE_REPLACEMENT = 'WINS_ABOVE_REPLACEMENT';
    case GAME_DATE = 'GAME_DATE';
    case VERTICAL_BREAK = 'VERTICAL_BREAK';
    case BURST_DISTANCE = 'BURST_DISTANCE';
    case WEIGHTED_RUNS_ABOVE_AVERAGE = 'WEIGHTED_RUNS_ABOVE_AVERAGE';
    case WEIGHTED_RUNS_CREATED = 'WEIGHTED_RUNS_CREATED';
    case WEIGHTED_RUNS_CREATED_PLUS = 'WEIGHTED_RUNS_CREATED_PLUS';
    case RUNS_ABOVE_REPLACEMENT = 'RUNS_ABOVE_REPLACEMENT';
    case BATTING_RUNS_ABOVE_AVG = 'BATTING_RUNS_ABOVE_AVG';
    case FIELDING_RUNS_ABOVE_AVG = 'FIELDING_RUNS_ABOVE_AVG';
    case POSITIONAL_RUNS_ABOVE_AVG = 'POSITIONAL_RUNS_ABOVE_AVG';
    case BASE_RUNNING_RUNS_ABOVE_AVG = 'BASE_RUNNING_RUNS_ABOVE_AVG';
    case WEIGHTED_LEAGUE_ADJUST = 'WEIGHTED_LEAGUE_ADJUST';
    case REPLACEMENT_RUNS = 'REPLACEMENT_RUNS';
    case SPEED_SCORE = 'SPEED_SCORE';
    case ULTIMATE_BASE_RUNNING = 'ULTIMATE_BASE_RUNNING';
    case WEIGHTED_NOT_GROUND_INTO_DP_RUNS = 'WEIGHTED_NOT_GROUND_INTO_DP_RUNS';
    case WEIGHTED_STOLEN_BASE_RUNS = 'WEIGHTED_STOLEN_BASE_RUNS';
    case FIELDING_INDEPENDENT_PITCHING = 'FIELDING_INDEPENDENT_PITCHING';
    case EXPECTED_FIELDING_INDEPENDENT_PITCHING = 'EXPECTED_FIELDING_INDEPENDENT_PITCHING';
    case FIELDING_INDEPENDENT_PITCHING_MINUS = 'FIELDING_INDEPENDENT_PITCHING_MINUS';
    case RUNS_ALLOWED_BASED_WAR = 'RUNS_ALLOWED_BASED_WAR';
    case SHUTDOWNS = 'SHUTDOWNS';
    case MELTDOWNS = 'MELTDOWNS';
    case PITCHER_AVERAGE_LEVERAGE_INDEX = 'PITCHER_AVERAGE_LEVERAGE_INDEX';
    case INNING_AVERAGE_LEVERAGE_INDEX = 'INNING_AVERAGE_LEVERAGE_INDEX';
    case GAME_AVERAGE_LEVERAGE_INDEX = 'GAME_AVERAGE_LEVERAGE_INDEX';
    case END_OF_APPEARANCE_AVERAGE_LEVERAGE_INDEX = 'END_OF_APPEARANCE_AVERAGE_LEVERAGE_INDEX';
    case ERA_MINUS = 'ERA_MINUS';
    case JUMP_DISTANCE = 'JUMP_DISTANCE';
    case ATTACK_ANGLE = 'ATTACK_ANGLE';
    case BAT_SPEED = 'BAT_SPEED';
    case HOME_RUN_X_BALLPARKS = 'HOME_RUN_X_BALLPARKS';
    case HOME_RUN_VENUE_IDS = 'HOME_RUN_VENUE_IDS';

}
