<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKi3 extends Model 
{

    protected $table = 'nilai_harian_ki3';
    protected $primaryKey = 'id_nilai_ki3';
    public $timestamps = true;
    protected $fillable = array('p1lisan', 'p1tulis', 'p1tugas1', 'p1tugas2', 'p1rata_rata', 'p2lisan', 'p2tulis', 'p2tugas1', 'p2tugas2', 'p2rata_rata', 'p3lisan', 'p3tulis', 'p3tugas1', 'p3tugas2', 'p3rata_rata', 'p4lisan', 'p4tulis', 'p4tugas1', 'p4tugas2', 'p4rata_rata', 'p5lisan', 'p5tulis', 'p5tugas1', 'p5tugas2', 'NPH', 'NPAS1', 'NPAS2', 'deskripsi', 'id_nilai_siswa', 'id_kompetensi_dasar');

    public function kompetensi_dasar()
    {
        return $this->belongsTo('App\KompetensiDasar', 'id_kompetensi_dasar');
    }

    public function nilai_siswa()
    {
        return $this->belongsTo('App\NilaiSiswa', 'id_nilai_siswa');
    }

}