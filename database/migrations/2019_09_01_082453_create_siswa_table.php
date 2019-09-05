<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiswaTable extends Migration {

	public function up()
	{
		Schema::create('siswa', function(Blueprint $table) {
			$table->increments('id_siswa');
			$table->timestamps();
			$table->string('nama_lengkap');
			$table->enum('jenis_kelamin', array('Laki-Laki', 'Perempuan'));
			$table->string('INDUK');
			$table->string('NISN')->nullable();
			$table->string('NIK')->nullable();
			$table->string('KITAS')->nullable();
			$table->string('tempat_lahir');
			$table->date('tgl_lahir');
			$table->string('no_reg_akta_lahir');
			$table->string('agama');
			$table->string('kepercayaan');
			$table->string('kewarganegaraan')->default('Indonesia');
			$table->string('berkebutuhan_khusus')->nullable();
			$table->text('alamat_jalan');
			$table->string('rt');
			$table->string('rw');
			$table->string('nama_dusun');
			$table->string('nama_kelurahan_desa');
			$table->string('kecamatan');
			$table->string('kota_kab');
			$table->string('kode_pos');
			$table->string('lat')->nullable();
			$table->string('long')->nullable();
			$table->string('status_tempat_tinggal');
			$table->string('moda_transportasi');
			$table->string('no_kartu_keluarga_sejahtera')->nullable();
			$table->integer('anak_ke');
			$table->boolean('is_kps_pkh')->default(0);
			$table->string('no_kps_pkh')->nullable();
			$table->boolean('is_kip')->default(0);
			$table->string('no_kip')->nullable();
			$table->string('nama_kip')->nullable();
			$table->text('alasan_layak_kip')->nullable();
			$table->string('nama_ayah');
			$table->string('nik_ayah');
			$table->string('tempat_lahir_ayah');
			$table->date('tgl_lahir_ayah');
			$table->string('pendidikan_ayah');
			$table->string('pekerjaan_ayah');
			$table->string('penghasilan_ayah');
			$table->string('berkebutuhan_khusus')->nullable();
			$table->string('nama_ibu');
			$table->string('nik_ibu');
			$table->string('tempat_lahir_ibu');
			$table->date('tgl_lahir_ibu');
			$table->string('pendidikan_ibu');
			$table->string('pekerjaan_ibu');
			$table->string('penghasilan_ibu');
			$table->string('berkebutuhan_khusus')->nullable();
			$table->string('nama_wali')->nullable();
			$table->string('nik_wali')->nullable();
			$table->string('tempat_lahir_wali')->nullable();
			$table->date('tgl_lahir_wali')->nullable();
			$table->string('pendidikan_wali')->nullable();
			$table->string('pekerjaan_wali')->nullable();
			$table->string('penghasilan_wali')->nullable();
			$table->string('kontak_no_tlep_1')->nullable();
			$table->string('kontak_no_tlep_2')->nullable();
			$table->string('no_hp_1')->nullable();
			$table->string('no_hp_2')->nullable();
			$table->string('email_1')->nullable();
			$table->string('email_2')->nullable();
			$table->string('foto_siswa')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('siswa');
	}
}