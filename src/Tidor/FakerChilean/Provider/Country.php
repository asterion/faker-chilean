<?php

namespace Tidor\FakerChilean\Provider;

use Faker\Provider\Base as ProviderBase;

/**
 * Provider Country Names
 *
 * @link https://www.registrocivil.cl/Manuales/Validacion_de_Run.pdf Validación
 */
class Country extends ProviderBase
{
    public function country()
    {
        $data = $this->countryList();

        $codes = array_keys($data);
        $code = $codes[rand(0, count($codes) - 1)];

        return $data[$code];
    }

    public function countryList()
    {
        $filename = realpath(__DIR__ . '/data/es_CL') . '/country.php';

        return require($filename);
    }
}
