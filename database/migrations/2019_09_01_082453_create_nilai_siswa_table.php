<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNilaiSiswaTable extends Migration {

	public function up()
	{
		Schema::create('nilai_siswa', function(Blueprint $table) {
			$table->increments('id_nilai_siswa');
			$table->timestamps();
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_kelas')->unsigned();
			$table->date('tgl_raport');
			$table->date('tgl_penerimaan_raport');
		});
	}

	public function down()
	{
		Schema::drop('nilai_siswa');
	}
}