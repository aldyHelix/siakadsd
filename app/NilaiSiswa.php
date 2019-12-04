<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSiswa extends Model 
{

    protected $table = 'nilai_siswa';
    public $timestamps = true;
    protected $fillable = array('id_siswa', 'id_kelas', 'tgl_raport', 'tgl_penerimaan_raport');

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'id_siswa');
    }

    public function nilai_ki3()
    {
        return $this->hasMany('App\NilaiKi3', 'id_nilai_ki3');
    }

    public function nilai_ki4()
    {
        return $this->hasMany('App\NilaiKi4', 'id_nilai_ki4');
    }

    public function catatan_siswa()
    {
        return $this->hasOne('App\CatatanSiswa', 'id_catatan');
    }

    public function nilai_sosial()
    {
        return $this->hasOne('App\NilaiSosial', 'id_nilai_sosial');
    }

    public function nilai_spiritual()
    {
        return $this->hasOne('App\NilaiSpiritual', 'id_nilai_spiritual');
    }
    public function nilai_siswa_kelas()
    {
        return $this->belongsTo('App\KelasSiswa', 'id_kelas_siswa');
    }

}