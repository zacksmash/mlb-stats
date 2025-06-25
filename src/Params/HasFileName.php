<?php

namespace Zacksmash\MlbStats\Params;

trait HasFileName
{
    protected $fileName;

    /**
     * Skeletal chunked file name
     */
    public function fileName(string $fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }
}
