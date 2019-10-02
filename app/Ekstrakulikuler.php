<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model 
{

    protected $table = 'ekstrakulikuler';
    protected $primaryKey = 'id_ekskul';
    public $timestamps = true;
    protected $fillable = array('nama_ekskul', 'nama_pengajar', 'jam_mengajar', 'hari_mengajar');

    public function siswa()
    {
        return $this->belongsToMany('App\Siswa','ekskul_siswa','id_ekskul','id_siswa');
    }

}