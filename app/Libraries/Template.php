<?php

namespace App\Libraries;


class Template
{

    public static function tampil($nama_view)
    {

        $header = view('components/menu');
        $body = view($nama_view);
        $footer = view('components/footer');

        $data = [
            'header' => $header,
            'body' => $body,
            'footer' => $footer
        ];

        return view('components/index', $data);
    }

    public static function tampil_admin($nama_view)
    {

        $header = view('admin/menu');
        $body = view($nama_view);
        $footer = view('admin/footer');

        $data = [
            'header' => $header,
            'body' => $body,
            'footer' => $footer
        ];

        return view('admin/index', $data);
    }
}
