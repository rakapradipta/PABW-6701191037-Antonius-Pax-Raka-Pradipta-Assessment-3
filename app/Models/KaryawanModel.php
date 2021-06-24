<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table = 'karyawan';
    protected $allowedFields = ['id', 'nama', 'alamat'];

    public function getRandomId()
    {
        $query = $this->db->table('karyawan');
        $query->select('karyawan.id');
        $query->orderBy('karyawan.id', 'RANDOM');
        $query->limit(1);

        $result = $query->get()->getRow();

        if (isset($result)) {
            $id = $result->id;
        } else {
            $id = 0;
        }
        return $id;
    }
}
