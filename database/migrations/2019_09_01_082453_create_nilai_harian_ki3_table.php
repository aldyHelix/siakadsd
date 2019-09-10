<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNilaiHarianKi3Table extends Migration {

	public function up()
	{
		Schema::create('nilai_harian_ki3', function(Blueprint $table) {
			$table->increments('id_nilai_ki3');
			$table->integer('id_nilai_siswa')->unsigned();
			$table->integer('id_kompetensi_dasar')->unsigned();
			$table->integer('p1lisan');
			$table->integer('p1tulis');
			$table->integer('p1tugas1');
			$table->integer('p1tugas2');
			$table->integer('p1rata_rata');
			$table->integer('p2lisan');
			$table->integer('p2tulis');
			$table->integer('p2tugas1');
			$table->integer('p2tugas2');
			$table->integer('p2rata_rata');
			$table->integer('p3lisan');
			$table->integer('p3tulis');
			$table->integer('p3tugas1');
			$table->integer('p3tugas2');
			$table->integer('p3rata_rata');
			$table->integer('p4lisan');
			$table->integer('p4tulis');
			$table->integer('p4tugas1');
			$table->integer('p4tugas2');
			$table->integer('p4rata_rata');
			$table->integer('p5lisan');
			$table->integer('p5tulis');
			$table->integer('p5tugas1');
			$table->integer('p5tugas2');
			$table->integer('p5rata_rata');
			$table->integer('NPH');
			$table->integer('NPAS1');
			$table->integer('NPAS2');
			$table->integer('nilai_kd');
			$table->text('deskripsi');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('nilai_harian_ki3');
	}
}