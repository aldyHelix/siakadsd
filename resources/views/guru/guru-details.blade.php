@extends('layouts.app-dashboard')
@section('content')
<ol class="breadcrumb">
    <a href="{{URL::previous()}}">
        <button type="button" class="btn btn-warning waves-effect">
            <i class="material-icons">navigate_before</i>
            <span>KEMBALI</span>
        </button>
    </a>
</ol>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{$guru->nama}}
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                            <div class="col-xs-8 ol-sm-8 col-md-8 col-lg-8">
                                    <div class="col-xs-4 ol-sm-4 col-md-4 col-lg-4">
                                        <div class="image align-center">
                                            <img src="{{url('dashboard/images/user.png')}}" height="75" alt="User" />
                                        </div>
                                    </div>
                                    <div class="col-xs-8 ol-sm-8 col-md-8 col-lg-8">
                                        <div class="caption">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Guru Kelas </td>
                                                        <td>: {{$guru->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin </td>
                                                        <td>: {{$guru->jenis_kelamin}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIP </td>
                                                        <td>: {{$guru->NIP}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NUPTK </td>
                                                        <td>: {{$guru->NUPTK}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat, Tanggal Lahir </td>
                                                        <td>: {{$guru->tempat_lahir}}, {{$guru->tgl_lahir}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Golongan </td>
                                                        <td>: {{$guru->golongan}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agama </td>
                                                        <td>: {{$guru->agama}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                    </div>
                    <div class="row">
                        @if ($guru->tipe_guru == 'Kelas')
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <div class="body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kelas</th>
                                                <th>Semester</th>
                                                <th>Tahun Ajaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($guru->kelas as $no=>$item)
                                        <tr>
                                            <th scope="row">{{$no+1}}</th>
                                            <td>{{$item->nama_kelas}}</td>
                                            <td>{{$item->semester}}</td>
                                            <td>{{$item->tahun_ajaran}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @else 
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <div class="body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mata pelajaran</th>
                                                <th>Kelas</th>
                                                <th>kkm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($guru->mata_pelajaran as $no=>$item)
                                        <tr>
                                            <th scope="row">{{$no+1}}</th>
                                            <td>{{$item->nama_mata_pelajaran}}</td>
                                            <td>{{$item->kelas}}</td>
                                            <td>{{$item->kkm}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

