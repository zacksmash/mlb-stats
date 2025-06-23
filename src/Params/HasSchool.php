<?php

namespace Zacksmash\MlbStats\Params;

trait HasSchool
{
    protected $school;

    public function school(string $school)
    {
        $this->school = $school;

        return $this;
    }
}
