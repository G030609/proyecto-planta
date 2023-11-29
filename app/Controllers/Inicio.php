<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Inicio extends BaseController
{
    public function index()
    {

        return view('common/head').
        view('common/menuP').
        view('menus/menudo').
        view('common/footer');

    }

}
