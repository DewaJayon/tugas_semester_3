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


$routes->get('/login', 'Admin\Login::index');
