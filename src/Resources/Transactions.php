<?php

namespace Zacksmash\MlbStats\Resources;

use Zacksmash\MlbStats\MlbStatsRequest;
use Zacksmash\MlbStats\Params\HasDate;
use Zacksmash\MlbStats\Params\HasDivisionIds;
use Zacksmash\MlbStats\Params\HasEndDate;
use Zacksmash\MlbStats\Params\HasFields;
use Zacksmash\MlbStats\Params\HasLeagueId;
use Zacksmash\MlbStats\Params\HasLimit;
use Zacksmash\MlbStats\Params\HasOrder;
use Zacksmash\MlbStats\Params\HasPlayerId;
use Zacksmash\MlbStats\Params\HasSportId;
use Zacksmash\MlbStats\Params\HasStartDate;
use Zacksmash\MlbStats\Params\HasTeamId;
use Zacksmash\MlbStats\Params\HasTransactionIds;
use Zacksmash\MlbStats\Params\HasTransactionTypes;

#[RequiresAllOf('teamId', 'playerId', 'transactionIds', 'date', 'startDate', 'endDate')]
class Transactions extends MlbStatsRequest
{
    use HasDate;
    use HasDivisionIds;
    use HasEndDate;
    use HasFields;
    use HasLeagueId;
    use HasLimit;
    use HasOrder;
    use HasPlayerId;
    use HasSportId;
    use HasStartDate;
    use HasTeamId;
    use HasTransactionIds;
    use HasTransactionTypes;

    protected string $endpoint = 'transactions';
}
