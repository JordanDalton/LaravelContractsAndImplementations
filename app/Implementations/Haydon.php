<?php

namespace App\Implementations;

use App\Contracts\Dvr;
use App\Services\HaydonApi;

class Haydon implements Dvr
{
    public function __construct(protected HaydonApi $api){}

    public function play()
    {
        return $this->api->play();
    }

    public function pause()
    {
        return $this->api->pause();
    }
}
