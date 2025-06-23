<?php

it('can use enum values for leagueListId parameter', function () {
    $attendance = (new \Zacksmash\MlbStats\MlbStats)->attendance();

    // Test with enum
    $attendanceWithEnum = $attendance->leagueListId(\Zacksmash\MlbStats\Enums\LeagueListId::MLB);
    expect($attendanceWithEnum)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Attendance::class);

    // Test with string
    $attendanceWithString = $attendance->leagueListId('mlb');
    expect($attendanceWithString)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Attendance::class);
});

it('can use enum values for position parameter', function () {
    $stats = (new \Zacksmash\MlbStats\MlbStats)->stats();

    // Test with enum
    $statsWithEnum = $stats->position(\Zacksmash\MlbStats\Enums\Position::PITCHER);
    expect($statsWithEnum)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);

    // Test with string
    $statsWithString = $stats->position('P');
    expect($statsWithString)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
});

it('can use enum values for orgType parameter in highLow', function () {
    // Test with enum
    $highLowWithEnum = (new \Zacksmash\MlbStats\MlbStats)->highLow(\Zacksmash\MlbStats\Enums\HighLowOrgType::TEAM);
    expect($highLowWithEnum)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HighLow::class);

    // Test with string
    $highLowWithString = (new \Zacksmash\MlbStats\MlbStats)->highLow('TEAM');
    expect($highLowWithString)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\HighLow::class);
});

it('can use enum values for streak parameters', function () {
    $streaks = (new \Zacksmash\MlbStats\MlbStats)->statsStreaks();

    // Test with enums
    $streaksWithEnums = $streaks
        ->streakType(\Zacksmash\MlbStats\Enums\StreakType::HITTING_STREAK_OVERALL)
        ->streakSpan(\Zacksmash\MlbStats\Enums\StreakSpan::SEASON);
    expect($streaksWithEnums)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);

    // Test with strings
    $streaksWithStrings = $streaks
        ->streakType('hittingStreakOverall')
        ->streakSpan('season');
    expect($streaksWithStrings)->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);
});

it('can use helper methods for position parameter', function () {
    $stats = (new \Zacksmash\MlbStats\MlbStats)->stats();

    // Test various position helper methods
    expect($stats->pitcher())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
    expect($stats->catcher())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
    expect($stats->firstBase())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
    expect($stats->outfield())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
    expect($stats->startingPitcher())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Stats::class);
});

it('can use helper methods for orgType parameter', function () {
    $gamePace = (new \Zacksmash\MlbStats\MlbStats)->gamePace();

    // Test orgType helper methods
    expect($gamePace->orgTypeTeam())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePace::class);
    expect($gamePace->orgTypeLeague())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePace::class);
    expect($gamePace->orgTypeSport())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\GamePace::class);
});

it('can use helper methods for streak parameters', function () {
    $streaks = (new \Zacksmash\MlbStats\MlbStats)->statsStreaks();

    // Test streakType helper methods
    expect($streaks->hittingStreakOverall())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);
    expect($streaks->onBaseOverall())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);

    // Test streakSpan helper methods
    expect($streaks->career())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);
    expect($streaks->spanSeason())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);
    expect($streaks->currentStreak())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);
    expect($streaks->notable())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\StatsStreaks::class);
});

it('can use helper methods for leagueListId parameter', function () {
    $attendance = (new \Zacksmash\MlbStats\MlbStats)->attendance();

    // Test existing leagueListId helper methods
    expect($attendance->mlb())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Attendance::class);
    expect($attendance->milbFull())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Attendance::class);
    expect($attendance->milbShort())->toBeInstanceOf(\Zacksmash\MlbStats\Resources\Attendance::class);
});
