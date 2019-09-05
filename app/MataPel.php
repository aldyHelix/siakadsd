<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPel extends Model 
{

    protected $table = 'mata_pelajaran';
    protected $primaryKey = 'id_mata_pelajaran';
    public $timestamps = true;
    protected $fillable = array('id_guru', 'kelas', 'nama_mata_pelajaran', 'kkm');

    public function guru()
    {
        return $this->belongsTo('App\GuruKaryawan', 'id_guru');
    }

    public function kompetensi_dasar()
    {
        return $this->hasMany('App\KompetensiDasar', 'id_mapel');
    }

}