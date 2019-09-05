<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KenaikanKelas extends Model 
{

    protected $table = 'kenaikan_kelas';
    public $timestamps = true;
    protected $fillable = array('id_siswa', 'id_kelas_sebelum', 'id_kelas_sesudah', 'is_siswa_naik', 'is_siswa_lulus');

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'id_siswa');
    }

    public function kelas_sebelum()
    {
        return $this->hasMany('App\Kelas', 'id_kelas');
    }

    public function kelas_sesudah()
    {
        return $this->hasMany('App\Kelas', 'id_kelas');
    }

}