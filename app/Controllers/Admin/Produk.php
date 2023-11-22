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

    public function insert()
    {
        $product_name           = $this->request->getVar('product_name');
        $product_price          = $this->request->getVar('product_price');
        $product_description    = $this->request->getVar('product_description');

        $data = [
            'product_name'          => $product_name,
            'product_price'         => $product_price,
            'product_description'   => $product_description,
        ];

        $mProduct = new mProduct();
        $mProduct->insert($data);

        return redirect(route: 'admin/produk_daftar');
    }

    public function edit($id_product)
    {
        $mProduct = new mProduct();
        $product_row = $mProduct->where('id_product', $id_product)->first();

        $data = [
            'product_row' => $product_row,
        ];

        return Template::tampil_admin('admin/edit_product', $data);

        // return view('admin/edit_product', $data);
    }

    public function update($id_product)
    {

        $product_name           = $this->request->getVar('product_name');
        $product_price          = $this->request->getVar('product_price');
        $product_description    = $this->request->getVar('product_description');

        $data = [
            'product_name'          => $product_name,
            'product_price'         => $product_price,
            'product_description'   => $product_description
        ];

        $mProduct = new mProduct();
        $mProduct = $mProduct->where('id_product', $id_product)->set($data)->update();

        return redirect(route: 'admin/produk_daftar');
    }

    public function delete($id_product)
    {
        $mProduct = new mProduct();
        $mProduct->where('id_product', $id_product)->delete();

        return redirect(route: 'admin/produk_daftar');
    }
}
