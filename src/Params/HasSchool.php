<?php

namespace Zacksmash\MlbStats\Params;

trait HasSchool
{
    protected $school;

    /**
     * Filter players by the first letter of their school using using the specific character
     */
    public function school(string $school)
    {
        $this->school = $school;

        return $this;
    }
}
