<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;


class Beranda extends BaseController
{
    public function index(): string
    {
        return view('user/beranda');
    }
}
