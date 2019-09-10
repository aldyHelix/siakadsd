<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKelasTable extends Migration {

	public function up()
	{
		Schema::create('kelas', function(Blueprint $table) {
			$table->increments('id_kelas');
			$table->string('nama_kelas');
			$table->integer('semester');
			$table->string('tahun_ajaran');
			$table->integer('id_guru')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('kelas');
	}
}