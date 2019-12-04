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
    <li class="active">Kompetensi Dasar</li>
</ol>
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
                                <th>Kelas / Semester</th>
                                <th>Keterangan KD</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kd as $no=>$kds)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$kds->mata_pelajaran->nama_mata_pelajaran}}</td>
                                <td>{{$kds->kelompok_indikator}}/{{$kds->no_indikator}}</td>
                                <td>{{$kds->kelas}} / {{$kds->semester}}</td>
                                <td>{{$kds->keterangan_kompetensi_dasar}}</td>
                                <td>
                                        <a href="{{route('kompetensidasar.show', $kds->id_kompetensi_dasar)}}">
                                            <button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">more_horiz</i>
                                            </button>
                                        </a>
                                        <a href="{{route('kompetensidasar.edit', $kds->id_kompetensi_dasar)}}">
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
                    {{$kd->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
    @foreach($kd as $no=>$kds)
    <!-- Small Size -->
    <div class="modal fade" id="delModal{{$no}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="smallModalLabel">{{$kds->mata_pelajaran->nama_mata_pelajaran}} {{$kds->kelompok_indikator}}/{{$kds->no_indikator}}</h4>
                    </div>
                    {!! Form::model($kds, ['route' => ['kompetensidasar.destroy', $kds->id_kompetensi_dasar], 'method' => 'delete'] ) !!}
                    <div class="modal-body">
                        Data Kompetensi Dasar akan dihapus secara PERMANEN, Apakah anda yakin menghapus data ini?
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