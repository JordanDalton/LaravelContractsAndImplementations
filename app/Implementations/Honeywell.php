<?php

namespace App\Implementations;

use App\Contracts\Dvr;
use App\Services\HoneywellApi;

class Honeywell implements Dvr
{
    public function __construct(protected HoneywellApi  $api){}

    public function play()
    {
        return $this->api->pressPlay();
    }

    public function pause()
    {
        return $this->api->pressPause();
    }
}
