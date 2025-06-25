<?php

namespace Zacksmash\MlbStats\Params;

trait HasOpponentId
{
    protected $opponentId;

    /**
     * A unique identifier for the opposing team. Must be used with Team ID
     */
    public function opponentId(mixed $args)
    {
        $opponentId = is_array($args) ? $args : func_get_args();

        $this->opponentId = implode(',', $opponentId);

        return $this;
    }
}
