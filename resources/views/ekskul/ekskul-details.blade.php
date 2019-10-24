@extends('layouts.app-dashboard')
@section('content')
<div class="container-fluid">
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2> {{$ekskul->nama_ekskul}}
                        <small></small>
                    </h2>
                </div>
                <div class="body">
                        <div class="row clearfix">
                            <div class="col-xs-6 ol-sm-6 col-md-6 col-lg-6">
                                <div class="body table-responsive">
                                    <div class="thumbnail">
                                        <div class="caption">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Nama Ekstrakulikuler </td>
                                                        <td>: {{$ekskul->nama_ekskul}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Pengajar  </td>
                                                        <td>: {{$ekskul->nama_pengajar}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Waktu Pengajaran</td>
                                                        <td>: {{$ekskul->hari_mengajar}}, {{$ekskul->jam_mengajar}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="body table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.Induk</th>
                                                        <th>Nama Siswa</th>
                                                        <th>L / P</th>
                                                        <th>Kelas</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($ekskul->siswa as $no=>$item)
                                                    <tr>
                                                        <th scope="row">{{$no+1}}</th>
                                                        <td>{{$item->INDUK}}</td>
                                                        <td>{{$item->nama_lengkap}}</td>
                                                        @if ($item->jenis_kelamin === 'Laki-Laki')
                                                            <td>L</td>
                                                        @else 
                                                            <td>P</td>
                                                        @endif
                                                        <td>{{$item->current_kelas->nama_kelas}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            pagination  
                                        </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

