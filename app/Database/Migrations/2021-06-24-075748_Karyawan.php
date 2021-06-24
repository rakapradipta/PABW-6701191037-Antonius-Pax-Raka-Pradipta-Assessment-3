<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
	public function up()
	{
		# MASING-MASING KOLOM PADA TABEL karyawan
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 15,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20'
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
		]);

		# MENAMBAHKAN PRIMARY KEY --> id
		$this->forge->addKey('id', TRUE);

		# MEMBUAT TABEL arsitek
		$this->forge->createTable('karyawan', TRUE);
	}

	public function down()
	{
		# MENGHAPUS TABEL karyawan
		$this->forge->dropTable('karyawan');
	}
}
