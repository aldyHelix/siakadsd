<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __construct()
    {

    }

    public function showTahunan()
    {
        $yearnow = date('Y');
        return view('laporan.tahunan');
    }
    public function showSemester()
    {

        return view('laporan.semester');
    }
    public function showKelas()
    {
        $yearnow = date('Y');
        $yearnext = $yearnow+1;
        $currenttahunajaran = $yearnow."/".$yearnext;
        return view('laporan.kelas');
    }
    public function showSiswa()
    {
        return view('laporan.siswa');
    }
    public function showGuru()
    {
        return view('laporan.guru');
    }
    public function showPrestasi()
    {
        return view('laporan.prestasi');
    }
}
