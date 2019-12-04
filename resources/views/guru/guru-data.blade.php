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
    <li class="active">Guru</li>
</ol>
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
                @include('layouts.flash-message')
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>L / P</th>
                                <th>Jabatan</th>
                                <th>Tipe Guru</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guru as $no=>$gurus)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$gurus->NIP}}</td>
                                <td>{{$gurus->nama}}</td>
                                <td>{{$gurus->jenis_kelamin}}</td>
                                <td>{{$gurus->jabatan}}</td>
                                <td>{{$gurus->tipe_guru}}</td>
                                <td>
                                        <a href="{{route('gurukaryawan.show', $gurus->id_guru)}}">
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                        </a>
                                        <a href="{{route('gurukaryawan.edit', $gurus->id_guru)}}">
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
                    {{$guru->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
    @foreach($guru as $no=>$gurus)
    <!-- Small Size -->
    <div class="modal fade" id="delModal{{$no}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="smallModalLabel">{{$gurus->nama}}</h4>
                    </div>
                    {!! Form::model($gurus, ['route' => ['gurukaryawan.destroy', $gurus->id_guru], 'method' => 'delete'] ) !!}
                    <div class="modal-body">
                        Data Guru akan dihapus secara PERMANEN, Apakah anda yakin menghapus data ini?
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