<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Libraries\Template;


class Kontak extends BaseController
{
    public function index(): string
    {
        $data = [];
        return Template::tampil('user/kontak_kami', $data);
    }
}
