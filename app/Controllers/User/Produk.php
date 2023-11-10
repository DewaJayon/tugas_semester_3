<?php

namespace App\Controllers\User;

use App\Libraries\Template;
use App\Controllers\BaseController;
use App\Models\mProduct;


class Produk extends BaseController
{
    public function index(): string
    {
        $mProduct = new mProduct();
        $product_list = $mProduct->findAll();

        $data = [
            'product_list' => $product_list
        ];
        return Template::tampil('user/daftar_produk', $data);
    }
}
