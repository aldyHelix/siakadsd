@extends('layouts.app-dashboard')
@section('content')
<ol class="breadcrumb">
        <a href="{{URL::previous()}}">
            <button type="button" class="btn btn-warning waves-effect">
                <i class="material-icons">navigate_before</i>
                <span>KEMBALI</span>
            </button>
        </a>
        <li><a href="javascript:void(0);">Home</a></li>
        <li class="active">Ekstrakulikuler</li>
    </ol>
<!-- Hover Rows -->
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Data Ekstrakulikuler</h2>
                        </div>
                        <div class="col-lg-2 pull-right">
                            <a href="{{route('ekstrakulikuler.create')}}">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">group_add</i>
                                <span>Buat Ekskul</span>
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
                                <th>Nama Ekstrakulikuler</th>
                                <th>Nama Guru Pengajar</th>
                                <th>Hari/Jam Pengajar</th>
                                <th>Jumlah Peserta</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ekskul as $no=>$ekskuls)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$ekskuls->nama_ekskul}}</td>
                                <td>{{$ekskuls->nama_pengajar}}</td>
                                <td>{{$ekskuls->hari_mengajar}}, {{$ekskuls->jam_mengajar}}</td>
                                <td>{{count($ekskuls->siswa)}}</td>
                                <td>
                                    {!! Form::model($ekskuls, ['route' => ['ekstrakulikuler.destroy', $ekskuls->id_ekskul], 'method' => 'delete'] ) !!}
                                        <a href="{{route('ekstrakulikuler.show', $ekskuls->id_ekskul)}}">
                                            <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">more_horiz</i>
                                            </button>
                                        </a>
                                        <a href="{{route('ekstrakulikuler.edit', $ekskuls->id_ekskul)}}">
                                            <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    {!! Form::close()!!}      
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$ekskul->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@endsection