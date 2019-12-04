<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;
use App\GuruKaryawan;
use App\Kelas;
use App\KelasSiswa;
use App\Ekstrakulikuler;
use App\MataPel;
use App\Prestasi;
use App\KenaikanKelas;

class DashboardController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $jmlsiswa = Siswa::get()->count();
        $jmlguru = GuruKaryawan::get()->count();
        $jmlrombel = Kelas::where([['nama_kelas', 'LIKE' , 'Kelas%'],['semester', 1]])->get()->count();
        $jmlekskul = Ekstrakulikuler::get()->count();
        $jmlmatapel = MataPel::get()->count();
        $jmlprestasi = Prestasi::get()->count();
        $jmlsiswanaikkelas = KenaikanKelas::where('is_siswa_naik', 1)->get()->count();
        $jmlsiswanaik = KenaikanKelas::get()->count();
        $jmlsiswatdknaikkelas = KenaikanKelas::where('is_siswa_naik', 0)->get()->count();
        $jmlsiswalulus = KenaikanKelas::where('is_siswa_lulus', 1)->get()->count();
        $htgsiswanaik = ($jmlsiswanaikkelas / $jmlsiswanaik)*100;
        $kelassiswabaru = Kelas::where('nama_kelas', 'Siswa Baru')->first();
        $jmlsiswabaru = KelasSiswa::where('id_kelas', $kelassiswabaru->id_kelas)->get()->count();

        return view('halaman-utama.dashboard_home', compact('jmlsiswa', 'jmlguru','jmlrombel','jmlekskul','jmlmatapel','jmlprestasi','jmlsiswalulus','htgsiswanaik','jmlsiswabaru'));
    }
}
