@extends('layouts.app-dashboard')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2>Laporan Data Siswa Terdaftar</h2>
                        </div>
                        <div class="col-lg-3 push-right">
                            <a href="{{route('cetak.siswa')}}">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">printer</i>
                                <span>Cetak / Ekspor</span>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No.Induk</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>L / P</th>
                                <th>Kelas</th>
                                <th>Tempat, Tgl Lahir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dt as $no=>$siswas)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$siswas->INDUK}}</td>
                                <td>{{$siswas->NISN}}</td>
                                <td>{{$siswas->nama_lengkap}}</td>
                                @if ($siswas->jenis_kelamin === 'Laki-Laki')
                                    <td>L</td>
                                @else 
                                    <td>P</td>
                                @endif
                                <td>{{!empty($siswas->current_kelas->nama_kelas) ? $siswas->current_kelas->nama_kelas : '-'}}</td>
                                <td>{{$siswas->tempat_lahir}}, {{date('d-m-Y', strtotime($siswas->tgl_lahir))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@endsection