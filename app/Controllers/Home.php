<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('planta/menu');
        //return view('planta/carnivoras');
        //return view('planta/olorosas');
        //return view('planta/venenosas');

    }
}
