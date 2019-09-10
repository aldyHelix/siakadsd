<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKompetensiDasarTable extends Migration {

	public function up()
	{
		Schema::create('kompetensi_dasar', function(Blueprint $table) {
			$table->increments('id_kompetensi_dasar');
			$table->integer('id_mapel')->unsigned();
			$table->string('kelompok_indikator');
			$table->integer('no_indikator');
			$table->text('keterangan_kompetensi_dasar');
			$table->integer('kelas');
			$table->integer('semester');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('kompetensi_dasar');
	}
}