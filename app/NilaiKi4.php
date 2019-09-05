<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKi4 extends Model 
{

    protected $table = 'nilai_harian_ki4';
    public $timestamps = true;
    protected $fillable = array('id_nilai_siswa', 'id_kompetensi_dasar', 'praktik_p1', 'praktik_p2', 'praktik_p3', 'praktik_p4', 'praktik_p5', 'praktik_max', 'produk_p1', 'produk_p2', 'produk_p3', 'produk_p4', 'produk_p5', 'produk_max', 'proyek_p1', 'proyek_p2', 'proyek_p3', 'proyek_p4', 'proyek_p5', 'proyek_max', 'deskripsi_raport');

    public function kompetensi_dasar()
    {
        return $this->belongsTo('App\KompetensiDasar', 'id_kompetensi_dasar');
    }

    public function nilai_siswa()
    {
        return $this->belongsTo('App\NilaiSiswa', 'id_nilai_siswa');
    }

}