<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruKaryawan extends Model 
{

    protected $table = 'guru_karyawan';
    protected $primaryKey = 'id_guru';
    public $timestamps = true;
    protected $fillable = array('nama', 'NIP', 'NUPTK', 'tempat_lahir', 'agama', 'status_guru', 'golongan', 'pendidikan_terakhir', 'jenis_kelamin', 'jabatan', 'alamat', 'tipe_guru', 'tgl_lahir', 'foto_guru');

    public function kelas()
    {
        return $this->hasMany('App\Kelas', 'id_guru');
    }

    public function mata_pelajaran()
    {
        return $this->hasMany('App\MataPel', 'id_guru');
    }

}