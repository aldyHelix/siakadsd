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
    <li class="active">Siswa</li>
</ol>
<!-- Hover Rows -->
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Data Siswa</h2>
                        </div>
                        <div class="col-lg-4">
                            {!! Form::open(['route' => 'siswa.index', 'method'=>'get', 'class'=>'form-inline'])!!}
                            <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
                                {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Cari Nama Siswa...']) !!}
                                {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-lg-2">
                            {!! Form::submit('Search', ['class'=>'btn btn-primary waves-effect']) !!} 
                            {!! Form::close() !!}
                        </div>
                        @if($userRole == 'operator' || $userRole == 'admin')
                        <div class="col-lg-2 pull-right">
                            <a href="{{route('siswa.create')}}">
                                <button type="button" class="btn btn-primary waves-effect" toggle="tooltip" data-placement="top" title="Tambah Data Siswa">
                                <i class="material-icons">person_add</i>
                                <span>Tambah Siswa</span>
                            </button>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                @include('layouts.flash-message')
                <div class="body table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No.Induk</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>L / P</th>
                                <th>Kelas</th>
                                <th>Tempat, Tgl Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $no=>$siswas)
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
                                <td>
                                    @if($userRole == 'operator' || $userRole == 'admin')
                                    <div class="js-modal-buttons">
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#smallModal{{$no}}" toggle="tooltip" data-placement="top" title="Naikkan Kelas Siswa">
                                            <i class="material-icons">plus_one</i>
                                        </button>
                                    <a href="{{route('siswa.show', $siswas->id_siswa)}}">
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float" toggle="tooltip" data-placement="top" title="Detail Data">
                                            <i class="material-icons">more_horiz</i>
                                        </button>                                        
                                    </a> 
                                    <a href="{{route('siswa.edit', $siswas->id_siswa)}}">
                                        <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" toggle="tooltip" data-placement="top" title="Ubah Data">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    </a>
                                        <button type="submit" class="btn btn-danger btn-circle bg-red waves-effect waves-circle waves-float" data-color="red" data-toggle="modal" data-target="#delModal{{$no}}" toggle="tooltip" data-placement="top" title="Hapus Data">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </div>
                                    @elseif($userRole == 'gurukelas')
                                    <div class="js-modal-buttons">
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#smallModal{{$no}}" toggle="tooltip" data-placement="top" title="Naikkan Kelas Siswa">
                                            <i class="material-icons">plus_one</i>
                                        </button>
                                    <a href="{{route('siswa.show', $siswas->id_siswa)}}">
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float" toggle="tooltip" data-placement="top" title="Detail Data">
                                            <i class="material-icons">more_horiz</i>
                                        </button>                                        
                                    </a>
                                    @else 
                                    <a href="{{route('siswa.show', $siswas->id_siswa)}}">
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float" toggle="tooltip" data-placement="top" title="Detail Data">
                                            <i class="material-icons">more_horiz</i>
                                        </button>                                        
                                    </a> 
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$siswa->links()}}  
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
    @foreach($siswa as $no=>$siswas)
    <!-- Small Size -->
    <div class="modal fade" id="smallModal{{$no}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="smallModalLabel">{{$siswas->nama_lengkap}}</h4>
                    </div>
                    {!! Form::open(['route' => 'siswa.naikkelas', 'enctype' => 'multipart/form-data']) !!}
                    <div class="modal-body">
                        Siswa akan dinaikan Kelas dari {{!empty($siswas->current_kelas->nama_kelas) ? $siswas->current_kelas->nama_kelas : '-'}} smt {{!empty($siswas->current_kelas->semester) ? $siswas->current_kelas->semester : '-'}}({{!empty($siswas->current_kelas->tahun_ajaran) ? $siswas->current_kelas->tahun_ajaran : '-'}}) ke
                        <div class="row clearfix">
                        <div class="col-sm-12">
                                {{-- form class --}} 
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::hidden('id_siswa', $siswas->id_siswa) }}
                                        @if(!empty($kelas))
                                        <select name="id_kelas" class="form-control show-tick">
                                            <option value="">-- Pilih Kelas --</option>
                                            @foreach ($kelas as $item)
                                            <option value="{{$item->id_kelas}}">{{$item->nama_kelas}} smt {{$item->semester}} ({{$item->tahun_ajaran}})</option>    
                                             @endforeach
                                        </select>
                                        @else 
                                        <p>Kelas Kosong Harap Membuat Kelas Terlebih Dahulu!</p>
                                        @endif
                                        {!! $errors->first('id_kelas', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {!! Form::submit('SIMPAN', ['class'=>'btn btn-link waves-effect']) !!}
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>  
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    <!-- Small Size -->
    <div class="modal fade" id="delModal{{$no}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="smallModalLabel">{{$siswas->nama_lengkap}}</h4>
                    </div>
                    {!! Form::model($siswas, ['route' => ['siswa.destroy', $siswas->id_siswa], 'method' => 'delete'] ) !!}
                    <div class="modal-body">
                        Data Siswa akan dihapus secara PERMANEN, Apakah anda yakin menghapus data ini?
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