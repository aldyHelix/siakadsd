<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrestasiTable extends Migration {

	public function up()
	{
		Schema::create('prestasi', function(Blueprint $table) {
			$table->increments('id_prestasi');
			$table->integer('id_siswa')->unsigned();
			$table->string('nama_prestasi');
			$table->text('saran_saran');
			$table->integer('tahun_prestasi');
			$table->string('jenis_prestasi');
			$table->string('penyelenggara');
			$table->string('peringkat');
			$table->string('foto_prestasi');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('prestasi');
	}
}