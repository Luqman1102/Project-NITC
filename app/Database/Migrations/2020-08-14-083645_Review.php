<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Review extends Migration
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
			'judul'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'username_pembeli'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'username_penjual'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'bintang'		=> [
				'type'			=> 'Float',
				'constraint'    => 2,
			],
			'isi'			=> [
				'type'			 => 'Text',
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('review');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('review');
	}
}
