<?php

namespace Themsaid\Forge\Resources;

class Region extends Resource
{
    /**
     * @return mixed
     */
    public function listRegions()
    {
        return $this->forge->regions();
    }
}

