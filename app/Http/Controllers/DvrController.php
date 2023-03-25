<?php

namespace App\Http\Controllers;

use App\Contracts\Dvr;

class DvrController extends Controller
{
    public function __construct(protected Dvr $dvr){}

    public function play()
    {
        return $this->dvr->play();
    }

    public function pause()
    {
        return $this->dvr->pause();
    }
}
