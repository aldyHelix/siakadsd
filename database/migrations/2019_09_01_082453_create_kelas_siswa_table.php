<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKelasSiswaTable extends Migration {

	public function up()
	{
		Schema::create('kelas_siswa', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_kelas')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('kelas_siswa');
	}
}