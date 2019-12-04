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
    <li class="active">Kelas</li>
</ol>
<!-- Hover Rows -->
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Data Kelas</h2>
                        </div>
                        <div class="col-lg-2 pull-right">
                            <a href="{{route('kelas.create')}}">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">group_add</i>
                                <span>Buat Kelas</span>
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kelas as $no=>$kelases)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$kelases->nama_kelas}}</td>
                                <td>{{$kelases->semester}}</td>
                                <td>{{$kelases->tahun_ajaran}}</td>
                                <td>{{count($kelases->siswa)}}</td>
                                <td>{{$kelases->guru->nama}}</td>
                                <td>
                                    
                                    <button type="button" class="btn btn-light-blue btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">person_add</i>
                                    </button>
                                    <a href="{{route('kelas.show', $kelases->id_kelas)}}">
                                        <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">more_horiz</i>
                                        </button>
                                    </a>
                                    <a href="{{route('kelas.edit', $kelases->id_kelas)}}">
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
                    {{$kelas->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
    @foreach($kelas as $no=>$kelases)
    <!-- Small Size -->
    <div class="modal fade" id="delModal{{$no}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="smallModalLabel">{{$kelases->nama_kelas}}</h4>
                    </div>
                    {!! Form::model($kelases, ['route' => ['kelas.destroy', $kelases->id_kelas], 'method' => 'delete'] ) !!}
                    <div class="modal-body">
                        Data Kelas akan dihapus secara PERMANEN, Apakah anda yakin menghapus data ini?
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