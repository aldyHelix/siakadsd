@extends('layouts.app-dashboard')
@section('content')
<!-- Hover Rows -->
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Data Kompetensi Dasar</h2>
                        </div>
                        <div class="col-lg-2 pull-right">
                            <a href="{{route('kompetensidasar.create')}}">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">person_add</i>
                                <span>Tambah KD</span>
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
                                <th>KI/No</th>
                                <th>Keterangan KD</th>
                                <th>Kelas / Semester</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kd as $no=>$kds)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$kds->mata_pelajaran->nama_mata_pelajaran}}</td>
                                <td>{{$kds->kelompok_indikator}}/{{$kds->no_indikator}}</td>
                                <td>{{$kds->keterangan_kompetensi_dasar}}</td>
                                <td>{{$kds->kelas}} / {{$kds->semester}}</td>
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