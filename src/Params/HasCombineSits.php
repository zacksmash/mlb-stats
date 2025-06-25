<?php

namespace Zacksmash\MlbStats\Params;

trait HasCombineSits
{
    protected $combineSits;

    /**
     * If true, gathers stats where all of the situational criteria are met. If false, returns stats where any of the situational criteria are met. Default: false
     */
    public function combineSits(bool $combineSits = true)
    {
        $this->combineSits = $combineSits;

        return $this;
    }
}
