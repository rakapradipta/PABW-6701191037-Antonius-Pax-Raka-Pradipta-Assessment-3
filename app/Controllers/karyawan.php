<?php

namespace App\Controllers;

use App\Models\KaryawanModel;

class karyawan extends BaseController
{
    public function index()
    {
        $karyawan = new KaryawanModel();

        $data = [
            'title'     => 'Daftar Karyawan',
            'karyawan'  => $karyawan->findAll(),
        ];
        return view('datakaryawan/index', $data);
    }

    public function create()
    {
        $arsitek = new KaryawanModel();

        $data = array(
            'title'     => 'Tambah Data Karyawan',
        );
        echo view('datakaryawan/create', $data);
    }


    public function edit($id = null)
    {
        $model = new KaryawanModel();
        $data = array(
            'title'     => 'Ubah Data Karyawan',
            'edit'      => $model->where('id', $id)->first()
        );
        echo view('datakaryawan/edit', $data);
    }

    public function delete($id = null)
    {
        $model = new KaryawanModel();
        $status = $model->where('id', $id)->delete($id);

        if ($status) {
            session()->setFlashdata('message_success', 'Data berhasil dihapus!');
        } else {
            session()->setFlashdata('message_danger', 'Data gagal dihapus!');
        }

        return redirect()->to(base_url('karyawan'));
    }
}
