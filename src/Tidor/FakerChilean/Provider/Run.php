<?php

namespace Tidor\FakerChilean\Provider;

use Faker\Provider\Base as ProviderBase;

/**
 * Provider RUNs
 *
 * @link https://www.registrocivil.cl/Manuales/Validacion_de_Run.pdf Validación
 */
class Run extends ProviderBase
{
    public function run()
    {
        $r	= rand(9000000, 27000000);
        $dv = $this->digitoVarificador($r);

        return ($r . $dv);
    }

    public function rut()
    {
        return $this->run();
    }

    private function digitoVarificador($run)
    {
        $run = (string)$run;
        $run = str_split(strrev($run));

        $m = 2;
        $s = 0;

        foreach ($run as $n) {
            $s = $s + ($n*$m);
            if ($m > 6) {
                $m = 2;
            } else {
                $m++;
            }
        }

        $r = 11 - ($s % 11);

        if ($r == 11) {
            return 0;
        } elseif ($r == 10) {
            return 'K';
        }
        return $r;
    }
}
