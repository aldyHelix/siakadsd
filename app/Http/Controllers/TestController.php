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
use App\GuruKaryawan;
use App\NilaiKi3;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Validator;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = KelasSiswa::where('id_kelas', 8)->first();
        if ($dt->kelas->nama_kelas == 'Kelas 1') {
          $kelassis = 1;
        } 
        elseif ($dt->kelas->nama_kelas == 'Kelas 2') {
          $kelassis = 2;
        }
        elseif ($dt->kelas->nama_kelas == 'Kelas 3') {
          $kelassis = 3;
        }
        elseif ($dt->kelas->nama_kelas == 'Kelas 4') {
          $kelassis = 4;
        }
        elseif ($dt->kelas->nama_kelas == 'Kelas 5') {
          $kelassis = 5;
        }
        elseif ($dt->kelas->nama_kelas == 'Kelas 6') {
          $kelassis = 6;
        }
        else {
          $kelassis = 0;
        }
        $mapel = MataPel::where('kelas', $kelassis)->get();
        $siswa = Siswa::get();
        foreach($siswa as $s){
            foreach($mapel as $mp){
              $ks = KelasSiswa::where(['id_siswa' => $s->id_siswa, 'id_kelas' => 8])->first();
              $nilaisiswa = NilaiSiswa::where(['id_siswa' => $s->id_siswa, 'id_kelas_siswa' => $ks->id_kelas_siswa])->first();
              $nilaiki3 = NilaiKi3::where('id_nilai_siswa', $nilaisiswa->id_nilai_siswa)->get();
              foreach ($nilaiki3 as $kd){
                $rtki3[] = $kd->nilai_kd;
              }
              $rtmapel = array_sum($rtki3)/count($rtki3);
              $rtmapel = number_format((float)$rtmapel, 2, '.','');
              $siswa[] = [$mp->nama_mata_pelajaran => $rtmapel];
            }
          }
        return view('test-page', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
