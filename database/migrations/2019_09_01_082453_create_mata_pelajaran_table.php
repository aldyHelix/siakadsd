<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMataPelajaranTable extends Migration {

	public function up()
	{
		Schema::create('mata_pelajaran', function(Blueprint $table) {
			$table->increments('id_mata_pelajaran');
			$table->timestamps();
			$table->integer('id_guru')->unsigned();
			$table->integer('kelas');
			$table->string('nama_mata_pelajaran');
			$table->integer('kkm');
		});
	}

	public function down()
	{
		Schema::drop('mata_pelajaran');
	}
}