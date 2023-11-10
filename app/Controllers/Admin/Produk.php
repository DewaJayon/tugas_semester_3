<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Template;
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

        return Template::tampil_admin('admin/produk_daftar', $data);
    }

    public function tambah_product()
    {
        $data = [];

        return Template::tampil_admin('admin/tambah_product', $data);
    }
}
