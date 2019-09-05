<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuruKaryawanTable extends Migration {

	public function up()
	{
		Schema::create('guru_karyawan', function(Blueprint $table) {
			$table->increments('id_guru');
			$table->timestamps();
			$table->string('nama');
			$table->string('NIP');
			$table->string('NUPTK');
			$table->string('tempat_lahir');
			$table->string('status_guru');
			$table->string('golongan');
			$table->string('pendidikan_terakhir');
			$table->enum('jenis_kelamin', array('Laki-Laki', 'Perempuan'));
			$table->string('jabatan');
			$table->string('agama');
			$table->string('alamat');
			$table->string('tipe_guru');
			$table->date('tgl_lahir');
			$table->string('foto_guru')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('guru_karyawan');
	}
}