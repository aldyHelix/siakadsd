@extends('layouts.app-dashboard')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2>Prestasi Siswa</h2>
                        </div>
                        <div class="col-lg-3 push-right">
                            <a href="{{route('cetak.prestasi')}}">
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
                                <th>Nama Siswa</th>
                                <th>Nama Prestasi</th>
                                <th>Tahun Prestasi</th>
                                <th>Jenis Prestasi</th>
                                <th>Peringkat</th>
                                <th>Penyelenggara</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dt as $no=>$d)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$d->siswa->nama_lengkap}}</td>
                                <td>{{$d->nama_prestasi}}</td>
                                <td>{{$d->tahun_prestasi}}</td>
                                <td>{{$d->jenis_prestasi}}</td>
                                <td>{{$d->peringkat}}</td>
                                <td>{{$d->penyelenggara}}</td>
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