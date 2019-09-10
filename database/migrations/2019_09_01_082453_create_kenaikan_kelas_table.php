<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKenaikanKelasTable extends Migration {

	public function up()
	{
		Schema::create('kenaikan_kelas', function(Blueprint $table) {
			$table->increments('id_naik_kelas');
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_kelas_sebelum')->unsigned();
			$table->integer('id_kelas_sesudah')->unsigned();
			$table->boolean('is_siswa_naik')->default(true);
			$table->boolean('is_siswa_lulus')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('kenaikan_kelas');
	}
}