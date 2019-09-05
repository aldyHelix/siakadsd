<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KompetensiDasar extends Model 
{

    protected $table = 'kompetensi_dasar';
    public $timestamps = true;
    protected $fillable = array('id_mapel', 'kelompok_indikator', 'no_indikator', 'keterangan_kompetensi_dasar', 'kelas', 'semester');

    public function mata_pelajaran()
    {
        return $this->belongsTo('App\MataPel', 'id_mapel');
    }

    public function nilai_ki4()
    {
        return $this->hasMany('App\NilaiKi4', 'id_nilai_ki4');
    }

    public function nilai_ki3()
    {
        return $this->hasMany('App\NilaiKi3', 'id_nilai_ki3');
    }

}