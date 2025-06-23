<?php

namespace Zacksmash\MlbStats\Params;

trait HasConferenceId
{
    protected $conferenceId;

    public function conferenceId(mixed $args)
    {
        $conferenceIds = is_array($args) ? $args : func_get_args();

        $this->conferenceId = implode(',', $conferenceIds);

        return $this;
    }
}
