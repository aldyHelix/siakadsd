<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model 
{

    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    public $timestamps = true;
    protected $fillable = array('nama_kelas', 'semester', 'tahun_ajaran', 'jumlah_siswa', 'id_guru');

    public function siswa()
    {
        return $this->belongsToMany('App\Siswa','kelas_siswa','id_siswa','id_kelas');
    }

    public function guru()
    {
        return $this->belongsTo('App\GuruKaryawan', 'id_guru');
    }

    public function kelas_sebelum()
    {
        return $this->hasOne('App\KenaikanKelas', 'id_kelas_sebelum');
    }

    public function kelas_sesudah()
    {
        return $this->hasOne('App\KenaikanKelas', 'id_kelas_sesudah');
    }

}