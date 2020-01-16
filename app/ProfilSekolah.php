<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model 
{

    protected $table = 'profil_sekolah';
    public $timestamps = true;
    protected $fillable = array('id_kepala_sekolah', 'nama_sekolah', 'status', 'bentuk_pendidikan', 'status_kepemilikan', 'kurikulum', 'alamat_sekolah', 'rt', 'rw', 'kodepos', 'kelurahan', 'kecamatan', 'kab_kota', 'provinsi', 'negara', 'lat', 'long');

    public function kepala_sekolah()
    {
        return $this->belongsTo('App\GuruKaryawan', 'id_kepala_sekolah');
    }

}