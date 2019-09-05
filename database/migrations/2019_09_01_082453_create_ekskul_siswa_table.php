<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEkskulSiswaTable extends Migration {

	public function up()
	{
		Schema::create('ekskul_siswa', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_ekskul')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('ekskul_siswa');
	}
}