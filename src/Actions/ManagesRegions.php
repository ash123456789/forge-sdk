<?php

namespace Themsaid\Forge\Actions;

use Themsaid\Forge\Resources\Server;

trait ManagesRegions
{
    /**
     * @return mixed
     */
    public function regions()
    {
        return $this->get('regions');
    }
}
