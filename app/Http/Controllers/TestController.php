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

        if(Auth::user()->role == 'admin')
        {
            $prestasi = Prestasi::findOrFail(4);
        }
        elseif (Auth::user()->role == 'gurukelas') {
            $guru =  GuruKaryawan::findOrFail(Auth::user()->guru->id_guru);
            $kelas = Kelas::where('id_guru', $guru->id_guru)->pluck('id_kelas');
            //$kelasid = $kelas->id_kelas;
            $siswa =  Siswa::whereIn('id_kelas', $kelas)->get();
        } 
        else
        {
            $prestasi = Prestasi::findOrFail(3);
        }
        $kelassiswabaru = Kelas::where('nama_kelas', 'LIKE' ,'%'.'baru'.'%')->orWhere('tahun_ajaran', date("Y"))->first();
        return view('test-page', compact('kelassiswabaru','prestasi','kelas','siswa'));
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
