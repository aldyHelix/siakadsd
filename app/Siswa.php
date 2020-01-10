<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model 
{

    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    public $timestamps = true;
    protected $fillable = array('id_kelas','nama_lengkap', 'jenis_kelamin', 'INDUK','NISN', 'NIK', 'KITAS', 'tempat_lahir', 'tgl_lahir', 'no_reg_akta_lahir', 'agama', 'kepercayaan', 'kewarganegaraan', 'berkebutuhan_khusus', 'alamat_jalan', 'rt', 'rw', 'nama_dusun', 'nama_kelurahan_desa', 'kecamatan', 'kota_kab','kode_pos', 'lat', 'long', 'status_tempat_tinggal', 'moda_transportasi', 'no_kartu_keluarga_sejahtera', 'anak_ke', 'is_kps_pkh', 'no_kps_pkh', 'is_kip', 'no_kip', 'nama_kip', 'alasan_layak_kip', 'nama_ayah', 'nik_ayah', 'tempat_lahir_ayah', 'tgl_lahir_ayah', 'pendidikan_ayah', 'pekerjaan_ayah','penghasilan_ayah', 'berkebutuhan_khusus_ayah', 'nama_ibu', 'nik_ibu','tempat_lahir_ibu', 'tgl_lahir_ibu', 'pendidikan_ibu','penghasilan_ibu','pekerjaan_ibu', 'berkebutuhan_khusus_ibu', 'nama_wali', 'nik_wali', 'tempat_lahir_wali', 'tgl_lahir_wali', 'pendidikan_wali', 'pekerjaan_wali','penghasilan_wali', 'kontak_no_tlep_1', 'kontak_no_tlep_2', 'no_hp_1', 'no_hp_2', 'email_1', 'email_2', 'foto_siswa');

    public function current_kelas()
    {
        return $this->belongsTo('App\Kelas','id_kelas');
    }
    public function kelas()
    {
        return $this->belongsToMany('App\Kelas', 'kelas_siswa','id_siswa','id_kelas');
    }
    public function siswaekskul()
    {
        return $this->hasMany('App\EkskulSiswa','id_siswa');
    }
    public function ekskul()
    {
        return $this->belongsToMany('App\Ekstrakulikuler', 'ekskul_siswa','id_ekskul','id_siswa');
    }

    public function prestasi()
    {
        return $this->hasMany('App\Prestasi', 'id_siswa');
    }

    public function nilai_siswa()
    {
        return $this->hasMany('App\NilaiSiswa', 'id_siswa');
    }

    public function kenaikan_kelas()
    {
        return $this->hasOne('App\KenaikanKelas', 'id_naik_kelas');
    }
}