<?php

namespace App\Controllers\User;

use App\Libraries\Template;
use App\Controllers\BaseController;


class Tentang extends BaseController
{
    public function index(): string
    {
        return Template::tampil('user/tentang_kami');
    }
}
