<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKelasSiswaTable extends Migration {

	public function up()
	{
		Schema::create('kelas_siswa', function(Blueprint $table) {
			$table->increments('id_kelas_siswa')->unsigned();
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_kelas')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('kelas_siswa');
	}
}