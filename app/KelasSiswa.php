<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasSiswa extends Model
{
    protected $table = 'kelas_siswa';
    protected $primaryKey = 'id_kelas_siswa';
    public $timestamps = true;
    protected $fillable = array('id_kelas','id_siswa');
    public function siswa()
    {
        return $this->belongsToMany('App\Siswa','kelas_siswa','id_siswa','id_kelas');
    }
    public function kelas()
    {
        return $this->belongsTo('App\Kelas','id_kelas');
    }
}
