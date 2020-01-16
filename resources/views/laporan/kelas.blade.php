@extends('layouts.app-dashboard')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2>Laporan Data Kelas</h2>
                        </div>
                        <div class="col-lg-3 push-right">
                            <a href="{{route('cetak.kelas')}}">
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
                                <th>Nama Kelas</th>
                                <th>Semester</th>
                                <th>Tahun Ajaran</th>
                                <th>Jumlah Siswa</th>
                                <th>Guru Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dt as $no=>$d)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$d->nama_kelas}}</td>
                                <td>Semester {{$d->semester}}</td>
                                <td>{{$d->tahun_ajaran}}</td>
                                <td>{{count($d->siswa)}}</td>
                                <td>{{$d->guru->nama}}</td>
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