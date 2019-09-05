<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNilaiHarianKi4Table extends Migration {

	public function up()
	{
		Schema::create('nilai_harian_ki4', function(Blueprint $table) {
			$table->increments('id_nilai_ki4');
			$table->timestamps();
			$table->integer('id_nilai_siswa')->unsigned();
			$table->integer('id_kompetensi_dasar')->unsigned();
			$table->integer('praktik_p1');
			$table->integer('praktik_p2');
			$table->integer('praktik_p3');
			$table->integer('praktik_p4');
			$table->integer('praktik_p5');
			$table->integer('praktik_max');
			$table->integer('produk_p1');
			$table->integer('produk_p2');
			$table->integer('produk_p3');
			$table->integer('produk_p4');
			$table->integer('produk_p5');
			$table->integer('produk_max');
			$table->integer('proyek_p1');
			$table->integer('proyek_p2');
			$table->integer('proyek_p3');
			$table->integer('proyek_p4');
			$table->integer('proyek_p5');
			$table->string('proyek_max');
			$table->text('deskripsi_raport');
		});
	}

	public function down()
	{
		Schema::drop('nilai_harian_ki4');
	}
}