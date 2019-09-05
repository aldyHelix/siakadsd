<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSpiritual extends Model 
{

    protected $table = 'nilai_spiritual';
    public $timestamps = true;
    protected $fillable = array('id_nilai_siswa', 'nama_nilai_spiritual', 'ketaatan_ibadah_sb', 'ketaatan_ibadah_pb', 'perilaku_syukur_sb', 'perilaku_syukur_pb', 'berdoa_ses_seb_sb', 'berdoa_ses_seb_pb', 'toleransi_beribadah_sb', 'toleransi_beribadah_pb', 'deskripsi_raport');

    public function nilai_siswa()
    {
        return $this->belongsTo('App\NilaiSiswa', 'id_nilai_siswa');
    }

}