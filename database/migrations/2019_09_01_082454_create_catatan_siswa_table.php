<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatatanSiswaTable extends Migration {

	public function up()
	{
		Schema::create('catatan_siswa', function(Blueprint $table) {
			$table->increments('id_catatan');
			$table->integer('id_nilai_siswa')->unsigned();
			$table->integer('absensi_sakit');
			$table->integer('absensi_ijin');
			$table->integer('absensi_tanpa_keterangan');
			$table->integer('tinggi_badan');
			$table->integer('berat_badan');
			$table->text('kesehatan_pendengaran');
			$table->text('kesehatan_pengelihatan');
			$table->text('kesehatan_gigi');
			$table->text('kesehatan_lainnya');
			$table->text('prestasi_akademik');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('catatan_siswa');
	}
}