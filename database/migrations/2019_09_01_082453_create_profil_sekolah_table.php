<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilSekolahTable extends Migration {

	public function up()
	{
		Schema::create('profil_sekolah', function(Blueprint $table) {
			$table->integer('npsn')->unique();
			$table->timestamps();
			$table->integer('id_kepala_sekolah')->unsigned();
			$table->string('nama_sekolah');
			$table->string('status');
			$table->string('bentuk_pendidikan');
			$table->string('status_kepemilikan');
			$table->string('kurikulum');
			$table->string('alamat_sekolah');
			$table->string('rt');
			$table->string('rw');
			$table->string('kodepos');
			$table->string('kelurahan');
			$table->string('kecamatan');
			$table->string('kab_kota');
			$table->string('provinsi');
			$table->string('negara');
			$table->string('lat')->nullable();
			$table->string('long')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('profil_sekolah');
	}
}