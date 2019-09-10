<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNilaiSosialTable extends Migration {

	public function up()
	{
		Schema::create('nilai_sosial', function(Blueprint $table) {
			$table->increments('id_nilai_sosial');
			$table->integer('id_nilai_siswa')->unsigned();
			$table->string('nama_nilai_sosial');
			$table->integer('jujur_sb');
			$table->integer('jujur_pb');
			$table->integer('disiplin_sb');
			$table->integer('disiplin_pb');
			$table->integer('tanggung_jawab_sb');
			$table->integer('tanggung_jawab_pb');
			$table->integer('santun_sb');
			$table->integer('santun_pb');
			$table->integer('peduli_sb');
			$table->integer('peduli_pb');
			$table->integer('percaya_diri_sb');
			$table->integer('percaya_diri_pb');
			$table->text('deskripsi_raport');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('nilai_sosial');
	}
}