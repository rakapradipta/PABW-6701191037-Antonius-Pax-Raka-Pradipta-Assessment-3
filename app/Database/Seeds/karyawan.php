<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class karyawan extends Seeder
{
	public function run()
	{
		$insert = [
			[
				'id'       	=> '123',
				'nama'		=> 'Antonius',
				'alamat'    => 'Jl. Melati No.6 Bandung',
			],
			[
				'id'       	=> '124',
				'nama'		=> 'Pax',
				'alamat'    => 'Jl. Melati No.7 Bandung',
			],
			[
				'id'       	=> '125',
				'nama'		=> 'Raka',
				'alamat'   	=> 'Jl. Melati No.8 Bandung',
			],

		];

		foreach ($insert as $data) {
			$this->db->table('karyawan')->insert($data);
		}
	}
}
