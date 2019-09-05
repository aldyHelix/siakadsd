<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNilaiSpiritualTable extends Migration {

	public function up()
	{
		Schema::create('nilai_spiritual', function(Blueprint $table) {
			$table->increments('id_nilai_spiritual');
			$table->timestamps();
			$table->integer('id_nilai_siswa')->unsigned();
			$table->string('nama_nilai_spiritual');
			$table->integer('ketaatan_ibadah_sb');
			$table->integer('ketaatan_ibadah_pb');
			$table->integer('perilaku_syukur_sb');
			$table->integer('perilaku_syukur_pb');
			$table->integer('berdoa_ses_seb_sb');
			$table->integer('berdoa_ses_seb_pb');
			$table->integer('toleransi_beribadah_sb');
			$table->integer('toleransi_beribadah_pb');
			$table->text('deskripsi_raport');
		});
	}

	public function down()
	{
		Schema::drop('nilai_spiritual');
	}
}