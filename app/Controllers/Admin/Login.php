<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Template;


class Login extends BaseController
{
    public function index(): string
    {
        return Template::tampil_admin('admin/login');
    }
}
