<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEkstrakulikulerTable extends Migration {

	public function up()
	{
		Schema::create('ekstrakulikuler', function(Blueprint $table) {
			$table->increments('id_ekskul');
			$table->string('nama_ekskul');
			$table->string('nama_pengajar');
			$table->string('hari_mengajar');
			$table->time('jam_mengajar');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('ekstrakulikuler');
	}
}