<?php

namespace App\Controllers;

use App\Database\Seeds\karyawan;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Gerald Wash'
        ];
        return view('pages/home', $data);
    }

    public function arsitek()
    {
        $data = [
            'title' => 'GERALDWASH'
        ];
        return view('karyawan/index', $data);
    }
}
