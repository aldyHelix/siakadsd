<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanSiswa extends Model 
{

    protected $table = 'catatan_siswa';
    public $timestamps = true;
    protected $fillable = array('id_nilai_siswa', 'absensi_sakit', 'absensi_ijin', 'absensi_tanpa_keterangan', 'tinggi_badan', 'berat_badan', 'kesehatan_pendengaran', 'kesehatan_pengelihatan', 'kesehatan_gigi', 'kesehatan_lainnya', 'prestasi_akademik');

    public function nilai_siswa()
    {
        return $this->belongsTo('App\NilaiSiswa', 'id_nilai_siswa');
    }

}