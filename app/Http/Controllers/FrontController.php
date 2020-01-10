<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use App\KelasSiswa;
use App\Prestasi;
use App\KenaikanKelas;
use App\Ekstrakulikuler;
use App\MataPel;
use App\NilaiSiswa;
use App\NilaiSosial;
use App\NilaiSpiritual;
use App\NilaiKi3;
use App\NilaiKi4;
use App\CatatanSiswa;

class FrontController extends Controller
{
    public function homeView()
    {
        return view('front/front_master_alt');
    }
    public function siswaDetails($q)
    {
        
        $siswa = Siswa::where('nama_lengkap','LIKE', $q.'%')->orWhere('INDUK','LIKE',$q)->orWhere('NISN','LIKE',$q)->first();
        $idsiswa = $siswa->id_siswa;
        if(count(array($siswa)) > 0)
            return view('front/front_siswa_view',compact('siswa'))->withDetails($siswa)->withQuery($q);
        else return view('home')->withMessage('Data Tidak Ditemukan');
    }
}
