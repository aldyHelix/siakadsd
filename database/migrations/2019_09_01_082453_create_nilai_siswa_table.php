<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNilaiSiswaTable extends Migration {

	public function up()
	{
		Schema::create('nilai_siswa', function(Blueprint $table) {
			$table->increments('id_nilai_siswa');
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_kelas_siswa')->unsigned();
			$table->date('tgl_raport');
			$table->date('tgl_penerimaan_raport');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('nilai_siswa');
	}
}