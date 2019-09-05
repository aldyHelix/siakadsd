@extends('layouts.app-dashboard')
@section('content')
<!-- Hover Rows -->
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Data Mata Pelajaran</h2>
                        </div>
                        <div class="col-lg-2 pull-right">
                            <a href="{{route('matapel.create')}}">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">note_add</i>
                                <span>Tambah Mapel</span>
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
                                <th>Nama Mata Pelajaran</th>
                                <th>KKM</th>
                                <th>Guru Pengajar</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mapel as $no=>$mapels)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$mapels->nama_mata_pelajaran}}</td>
                                <td>{{$mapels->kkm}}</td>
                                <td>{{$mapels->guru->nama}}</td>
                                <td>{{$mapels->kelas}}</td>
                                <td>
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                        <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete</i>
                                        </button>
                                </td>
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