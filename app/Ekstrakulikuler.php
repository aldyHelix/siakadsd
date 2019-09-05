<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model 
{

    protected $table = 'ekstrakulikuler';
    public $timestamps = true;
    protected $fillable = array('nama_ekskul', 'nama_pengajar', 'jam_mengajar', 'jumlah_peserta');

    public function siswa()
    {
        return $this->belongsToMany('App\Siswa','ekskul_siswa','id_ekskul','id_kelas');
    }

}