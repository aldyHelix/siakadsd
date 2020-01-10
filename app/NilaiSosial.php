<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSosial extends Model 
{

    protected $table = 'nilai_sosial';
    protected $primaryKey = 'id_nilai_sosial';
    public $timestamps = true;
    protected $fillable = array('id_nilai_siswa', 'nama_nilai_sosial', 'jujur_sb', 'jujur_pb', 'disiplin_sb', 'disiplin_pb', 'tanggung_jawab_sb', 'tanggung_jawab_pb', 'santun_sb', 'santun_pb', 'peduli_sb', 'peduli_pb', 'percaya_diri_sb', 'percaya_diri_pb', 'deskripsi_raport');

    public function nilai_siswa()
    {
        return $this->belongsTo('App\NilaiSiswa', 'id_nilai_siswa');
    }

}