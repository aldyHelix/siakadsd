<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPel extends Model 
{

    protected $table = 'mata_pelajaran';
    protected $primaryKey = 'id_mata_pelajaran';
    public $timestamps = true;
    protected $fillable = array('id_guru', 'kelas', 'nama_mata_pelajaran', 'kkm', 'is_kelas');

    public function guru()
    {
        return $this->belongsTo('App\GuruKaryawan', 'id_guru');
    }

    public function kompetensi_dasar()
    {
        return $this->hasMany('App\KompetensiDasar', 'id_mapel');
    }
    public function kd_ki3()
    {
        return $this->hasMany('App\KompetensiDasar', 'id_mapel')->where('kelompok_indikator', 'ki3');
    }
    public function kd_ki4()
    {
        return $this->hasMany('App\KompetensiDasar', 'id_mapel')->where('kelompok_indikator', 'ki4');
    }
}