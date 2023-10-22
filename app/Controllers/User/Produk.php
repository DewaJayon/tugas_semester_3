<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;


class Produk extends BaseController
{
    public function index(): string
    {
        return view('user/daftar_produk');
    }
}
