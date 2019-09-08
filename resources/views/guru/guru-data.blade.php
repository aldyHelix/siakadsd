@extends('layouts.app-dashboard')
@section('content')
<!-- Hover Rows -->
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Data Guru</h2>
                        </div>
                        <div class="col-lg-2 pull-right">
                            <a href="{{route('gurukaryawan.create')}}">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">person_add</i>
                                <span>Tambah Guru</span>
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
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>L / P</th>
                                <th>Tempat, Tgl Lahir</th>
                                <th>Jabatan</th>
                                <th>Tipe Guru</th>
                                <th>Status Guru</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guru as $no=>$gurus)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$gurus->nip}}</td>
                                <td>{{$gurus->nama}}</td>
                                <td>{{$gurus->jenis_kelamin}}</td>
                                <td>{{$gurus->tempat_lahir}},{{$gurus->tgl_lahir}}</td>
                                <td>{{$gurus->jabatan}}</td>
                                <td>{{$gurus->tipe_guru}}</td>
                                <td>{{$gurus->status_guru}}</td>
                                <td>
                                    <a href="">
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </a>
                                    <a href="">
                                        <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    </a>
                                    <a href="">
                                        <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </a>      
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