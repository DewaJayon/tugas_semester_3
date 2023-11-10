<?php

namespace App\Libraries;



class Template
{

    public static function tampil($nama_view, $data)
    {

        $header = view('components/menu');
        $body = view($nama_view, $data);
        $footer = view('components/footer');

        $data = [
            'header' => $header,
            'body' => $body,
            'footer' => $footer
        ];

        return view('components/index', $data);
    }

    public static function tampil_admin($nama_view, $data)
    {

        $header = view('admin/menu');
        $body = view($nama_view, $data);
        $footer = view('admin/footer');

        $data = [
            'header' => $header,
            'body' => $body,
            'footer' => $footer
        ];

        return view('admin/index', $data);
    }
}
