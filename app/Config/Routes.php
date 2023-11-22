<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User\Beranda::index');
$routes->get('/kontak_kami', 'User\Kontak::index');
$routes->get('/daftar_produk', 'User\Produk::index');
$routes->get('/tentang_kami', 'User\Tentang::index');

$routes->get('/admin', 'Admin\Dashboard::index');
$routes->get('/admin/produk_daftar', 'Admin\Produk::index');

$routes->get('/admin/tambah_product', 'Admin\Produk::tambah_product');
$routes->post('/admin/tambah_produk/insert', 'Admin\Produk::insert');

$routes->get('/admin/edit_product/edit/(:any)', 'Admin\Produk::edit/$1');
$routes->post('/admin/edit_product/edit/(:any)', 'Admin\Produk::update/$1');

$routes->get('/admin/manajemen_produk/delete/(:any)', 'Admin\Produk::delete/$1');



$routes->get('/login', 'Auth\Login::index');
