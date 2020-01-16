<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\GuruKaryawan;
use App\Prestasi;
use App\Siswa;
use PDF;
class LaporanController extends Controller
{
    public function __construct()
    {

    }

    public function showTahunan()
    {
        return view('laporan.tahunan');
    }
    public function showSemester()
    {
        return view('laporan.semester');
    }
    public function showKelas()
    {
        $dt = Kelas::get();
        return view('laporan.kelas', compact('dt'));
    }
    public function showSiswa()
    {
        $dt = Siswa::get();
        return view('laporan.siswa', compact('dt'));
    }
    public function showGuru()
    {
        $dt = GuruKaryawan::get();
        return view('laporan.guru', compact('dt'));
    }
    public function showPrestasi()
    {
        $dt = Prestasi::get();
        return view('laporan.prestasi', compact('dt'));
    }
    public function cetakTahunan()
    {

    }
    public function cetakSemester()
    {
        
    }
    public function cetakKelas()
    {
        $dt = Kelas::get();
        $pdf = PDF::loadview('laporan.cetak-kelas', compact('dt'))->setPaper([0,0,612,935.433], 'landscape');
        $filename = 'Laporan-Kelas';
        return $pdf->stream($filename);
    }
    public function cetakSiswa()
    {
        $dt = Siswa::get();
        $pdf = PDF::loadview('laporan.cetak-siswa', compact('dt'))->setPaper([0,0,612,935.433], 'landscape');
        $filename = 'Laporan-Siswa';
        return $pdf->stream($filename);
    }
    public function cetakGuru()
    {
        $dt = GuruKaryawan::get();
        $pdf = PDF::loadview('laporan.cetak-guru', compact('dt'))->setPaper([0,0,612,935.433], 'landscape');
        $filename = 'Laporan-Guru';
        return $pdf->stream($filename);
    }
    public function cetakPrestasi()
    {
        $dt = Prestasi::get();
        $pdf = PDF::loadview('laporan.cetak-prestasi', compact('dt'))->setPaper([0,0,612,935.433], 'landscape');
        $filename = 'Laporan-Prestasi-Siswa';
        return $pdf->stream($filename);
        //return view('laporan.cetak-prestasi', compact('dt'));
    }
}
