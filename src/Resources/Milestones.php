<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasAchievementStatuses;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasGamePks;
use Zacksmash\MlbStats\Params\HasIsLastAchievement;
use Zacksmash\MlbStats\Params\HasLeagueIds;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasMilestoneStatistics;
use Zacksmash\MlbStats\Params\HasMilestoneTypes;
use Zacksmash\MlbStats\Params\HasMilestoneValues;
use Zacksmash\MlbStats\Params\HasOrgType;
use Zacksmash\MlbStats\Params\HasPlayerIds;
use Zacksmash\MlbStats\Params\HasSeason;
use Zacksmash\MlbStats\Params\HasSeasons;
use Zacksmash\MlbStats\Params\HasShowFirsts;
use Zacksmash\MlbStats\Params\HasStatGroup;
use Zacksmash\MlbStats\Params\HasTeamIds;
use Zacksmash\MlbStats\Params\HasVenueIds;

class Milestones extends MlbStatsRequest
{
    use HasAchievementStatuses;
    use HasFields;
    use HasGamePks;
    use HasIsLastAchievement;
    use HasLeagueIds;
    use HasLimit;
    use HasMilestoneStatistics;
    use HasMilestoneTypes;
    use HasMilestoneValues;
    use HasOrgType;
    use HasPlayerIds;
    use HasSeason;
    use HasSeasons;
    use HasShowFirsts;
    use HasStatGroup;
    use HasTeamIds;
    use HasVenueIds;

    protected string $endpoint = 'milestones';
}
