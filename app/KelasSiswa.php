<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasSiswa extends Model
{
    protected $table = 'kelas_siswa';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = array('id_kelas','id_siswa');
}
