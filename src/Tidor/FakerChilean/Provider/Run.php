<?php

namespace Tidor\FakerChilean\Provider;

use Faker\Provider\Base as ProviderBase;

/**
 * Provider RUNs
 */
class Run extends ProviderBase
{
    public function run()
    {
        return rand(9000000, 25000000);
    }

    public function rut()
    {
        return $this->run();
    }
}
