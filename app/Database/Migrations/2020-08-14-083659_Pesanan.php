<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'username_pembeli'			=> [
				'type'			 => 'VARCHAR',
				'constraint'	 => '100',
			],
			'username_penjual'		=> [
				'type'			=> 'VARCHAR',
				'constraint'    => '100',
			],
			'tanggal'			=> [
				'type'			=> 'TIMESTAMP',
			],
			'status'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '25',
			],

			'jumlah_revisi'				=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'harga'				=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],

			'gambar_asli'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'gambar_watermark'  => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			],

			'nama_rekening'  => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '20',
			],
			'no_rekening'  => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '20',
			],
			'bukti_pembayaran'  => [
				'type'			=> 'VARCHAR',
				'constraint'	=> '255',
			]

		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('pesanan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pesanan');
	}
}
