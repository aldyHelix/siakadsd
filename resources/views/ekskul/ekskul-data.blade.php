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
                                    <button type="submit" class="btn btn-danger btn-circle bg-red waves-effect waves-circle waves-float" data-color="red" data-toggle="modal" data-target="#delModal{{$no}}" toggle="tooltip" data-placement="top" title="Hapus Data">
                                        <i class="material-icons">delete</i>
                                    </button>  
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
    @foreach($ekskul as $no=>$ekskuls)
    <!-- Small Size -->
    <div class="modal fade" id="delModal{{$no}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="smallModalLabel">{{$ekskuls->nama_ekskul}}</h4>
                    </div>
                    {!! Form::model($ekskuls, ['route' => ['ekstrakulikuler.destroy', $ekskuls->id_ekskul], 'method' => 'delete'] ) !!}
                    <div class="modal-body">
                        Data Ekstrakulikuler akan dihapus secara PERMANEN, Apakah anda yakin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        {!! Form::submit('HAPUS', ['class'=>'btn btn-link waves-effect']) !!}
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                    </div>  
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endforeach
@endsection