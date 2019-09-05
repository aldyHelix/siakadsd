<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model 
{

    protected $table = 'prestasi';
    public $timestamps = true;
    protected $fillable = array('id_siswa', 'nama_prestasi', 'saran_saran', 'tahun_prestasi', 'jenis_prestasi', 'penyelenggara', 'peringkat', 'foto_prestasi');

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'is_siswa');
    }

}