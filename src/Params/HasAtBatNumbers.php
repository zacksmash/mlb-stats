<?php

namespace Zacksmash\MlbStats\Params;

trait HasAtBatNumbers
{
    protected $atBatNumbers;

    /**
     * The at bat number of a given game. Format: 1, 2, 3, etc
     */
    public function atBatNumbers(mixed $args)
    {
        $atBatNumbers = is_array($args) ? $args : func_get_args();

        $this->atBatNumbers = implode(',', $atBatNumbers);

        return $this;
    }
}
