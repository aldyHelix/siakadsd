<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('siswa', function(Blueprint $table){
			$table->foreign('id_kelas')->references('id_kelas')->on('kelas')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('kelas', function(Blueprint $table) {
			$table->foreign('id_guru')->references('id_guru')->on('guru_karyawan')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('profil_sekolah', function(Blueprint $table) {
			$table->foreign('id_kepala_sekolah')->references('id_guru')->on('guru_karyawan')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('prestasi', function(Blueprint $table) {
			$table->foreign('id_siswa')->references('id_siswa')->on('siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('mata_pelajaran', function(Blueprint $table) {
			$table->foreign('id_guru')->references('id_guru')->on('guru_karyawan')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('kompetensi_dasar', function(Blueprint $table) {
			$table->foreign('id_mapel')->references('id_mata_pelajaran')->on('mata_pelajaran')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('kenaikan_kelas', function(Blueprint $table) {
			$table->foreign('id_siswa')->references('id_siswa')->on('siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('kenaikan_kelas', function(Blueprint $table) {
			$table->foreign('id_kelas_sebelum')->references('id_kelas')->on('kelas')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('kenaikan_kelas', function(Blueprint $table) {
			$table->foreign('id_kelas_sesudah')->references('id_kelas')->on('kelas')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nilai_siswa', function(Blueprint $table) {
			$table->foreign('id_siswa')->references('id_siswa')->on('siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nilai_siswa', function(Blueprint $table) {
			$table->foreign('id_kelas_siswa')->references('id_kelas_siswa')->on('kelas_siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nilai_harian_ki3', function(Blueprint $table) {
			$table->foreign('id_nilai_siswa')->references('id_nilai_siswa')->on('nilai_siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nilai_harian_ki3', function(Blueprint $table) {
			$table->foreign('id_kompetensi_dasar')->references('id_kompetensi_dasar')->on('kompetensi_dasar')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nilai_harian_ki4', function(Blueprint $table) {
			$table->foreign('id_nilai_siswa')->references('id_nilai_siswa')->on('nilai_siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nilai_harian_ki4', function(Blueprint $table) {
			$table->foreign('id_kompetensi_dasar')->references('id_kompetensi_dasar')->on('kompetensi_dasar')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('catatan_siswa', function(Blueprint $table) {
			$table->foreign('id_nilai_siswa')->references('id_nilai_siswa')->on('nilai_siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nilai_sosial', function(Blueprint $table) {
			$table->foreign('id_nilai_siswa')->references('id_nilai_siswa')->on('nilai_siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('nilai_spiritual', function(Blueprint $table) {
			$table->foreign('id_nilai_siswa')->references('id_nilai_siswa')->on('nilai_siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('kelas_siswa', function(Blueprint $table) {
			$table->foreign('id_siswa')->references('id_siswa')->on('siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('kelas_siswa', function(Blueprint $table) {
			$table->foreign('id_kelas')->references('id_kelas')->on('kelas')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ekskul_siswa', function(Blueprint $table) {
			$table->foreign('id_siswa')->references('id_siswa')->on('siswa')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ekskul_siswa', function(Blueprint $table) {
			$table->foreign('id_ekskul')->references('id_ekskul')->on('ekstrakulikuler')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('kelas', function(Blueprint $table) {
			$table->dropForeign('kelas_id_guru_foreign');
		});
		Schema::table('profil_sekolah', function(Blueprint $table) {
			$table->dropForeign('profil_sekolah_id_kepala_sekolah_foreign');
		});
		Schema::table('prestasi', function(Blueprint $table) {
			$table->dropForeign('prestasi_id_siswa_foreign');
		});
		Schema::table('mata_pelajaran', function(Blueprint $table) {
			$table->dropForeign('mata_pelajaran_id_guru_foreign');
		});
		Schema::table('kompetensi_dasar', function(Blueprint $table) {
			$table->dropForeign('kompetensi_dasar_id_mapel_foreign');
		});
		Schema::table('kenaikan_kelas', function(Blueprint $table) {
			$table->dropForeign('kenaikan_kelas_id_siswa_foreign');
		});
		Schema::table('kenaikan_kelas', function(Blueprint $table) {
			$table->dropForeign('kenaikan_kelas_id_kelas_sebelum_foreign');
		});
		Schema::table('kenaikan_kelas', function(Blueprint $table) {
			$table->dropForeign('kenaikan_kelas_id_kelas_sesudah_foreign');
		});
		Schema::table('nilai_siswa', function(Blueprint $table) {
			$table->dropForeign('nilai_siswa_id_siswa_foreign');
		});
		Schema::table('nilai_siswa', function(Blueprint $table) {
			$table->dropForeign('nilai_siswa_id_kelas_foreign');
		});
		Schema::table('nilai_siswa', function(Blueprint $table) {
			$table->dropForeign('nilai_siswa_id_kelas_siswa_foreign');
		});
		Schema::table('nilai_harian_ki3', function(Blueprint $table) {
			$table->dropForeign('nilai_harian_ki3_id_nilai_siswa_foreign');
		});
		Schema::table('nilai_harian_ki3', function(Blueprint $table) {
			$table->dropForeign('nilai_harian_ki3_id_kompetensi_dasar_foreign');
		});
		Schema::table('nilai_harian_ki4', function(Blueprint $table) {
			$table->dropForeign('nilai_harian_ki4_id_nilai_siswa_foreign');
		});
		Schema::table('nilai_harian_ki4', function(Blueprint $table) {
			$table->dropForeign('nilai_harian_ki4_id_kompetensi_dasar_foreign');
		});
		Schema::table('catatan_siswa', function(Blueprint $table) {
			$table->dropForeign('catatan_siswa_id_nilai_siswa_foreign');
		});
		Schema::table('nilai_sosial', function(Blueprint $table) {
			$table->dropForeign('nilai_sosial_id_nilai_siswa_foreign');
		});
		Schema::table('nilai_spiritual', function(Blueprint $table) {
			$table->dropForeign('nilai_spiritual_id_nilai_siswa_foreign');
		});
		Schema::table('kelas_siswa', function(Blueprint $table) {
			$table->dropForeign('kelas_siswa_id_siswa_foreign');
		});
		Schema::table('kelas_siswa', function(Blueprint $table) {
			$table->dropForeign('kelas_siswa_id_kelas_foreign');
		});
		Schema::table('ekskul_siswa', function(Blueprint $table) {
			$table->dropForeign('ekskul_siswa_id_siswa_foreign');
		});
		Schema::table('ekskul_siswa', function(Blueprint $table) {
			$table->dropForeign('ekskul_siswa_id_ekskul_foreign');
		});
	}
}