<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EkskulSiswa extends Model 
{

    protected $table = 'ekskul_siswa';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = array('id_siswa', 'id_ekskul');

    public function siswa()
    {
        return $this->belongsToMany('App\Siswa','ekskul_siswa','id_siswa','id_ekskul');
    }

}