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
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{$kelas->nama_kelas}}
                        <small>Detail Data Kelas {{$kelas->nama_kelas}} Semester {{$kelas->semester}} Tahun Ajaran {{$kelas->tahun_ajaran}}</small>
                    </h2>
                </div>
                <div class="body">
                        <div class="row clearfix">
                            <div class="col-xs-4 ol-sm-4 col-md-4 col-lg-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Kelas </td>
                                                    <td>: {{$kelas->nama_kelas}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Semester </td>
                                                    <td>: {{$kelas->semester}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun Ajaran</td>
                                                    <td>: {{$kelas->tahun_ajaran}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
                                                        <td>: {{$kelas->guru->nama}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin </td>
                                                        <td>: {{$kelas->guru->jenis_kelamin}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIP </td>
                                                        <td>: {{$kelas->guru->NIP}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NUPTK </td>
                                                        <td>: {{$kelas->guru->NUPTK}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat, Tanggal Lahir </td>
                                                        <td>: {{$kelas->guru->tempat_lahir}}, {{$kelas->guru->tgl_lahir}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Golongan </td>
                                                        <td>: {{$kelas->guru->golongan}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agama </td>
                                                        <td>: {{$kelas->guru->agama}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ route('rekap.nilai.kelas', $kelas->id_kelas)}}"><button type="button" class="btn bg-blue btn-sm waves-effect pull-right">Rekap Nilai</button></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="body table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.Induk</th>
                                                        <th>Nama Siswa</th>
                                                        <th>L / P</th>
                                                        <th>Menu</th>
                                                        <th>Penilaian</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($kelassiswa as $no=>$item)
                                                    <tr>
                                                        <th scope="row">{{$no+1}}</th>
                                                        <td>{{$item->INDUK}}</td>
                                                        <td>{{$item->nama_lengkap}}</td>
                                                        @if ($item->jenis_kelamin === 'Laki-Laki')
                                                            <td>L</td>
                                                        @else 
                                                            <td>P</td>
                                                        @endif
                                                        <td><a href=""><button type="button" class="btn bg-red btn-block btn-sm waves-effect">SOSIAL</button></a></td>
                                                        <td><a href=""><button type="button" class="btn bg-red btn-block btn-sm waves-effect">SPIRITUAL</button></a></td>
                                                        <td><a href=""><button type="button" class="btn bg-red btn-block btn-sm waves-effect">KI3</button></a></td>
                                                        <td><a href=""><button type="button" class="btn bg-red btn-block btn-sm waves-effect">KI4</button></a></td>
                                                        <td><a href=""><button type="button" class="btn bg-red btn-block btn-sm waves-effect">CATATAN</button></a></td>
                                                        <td><a href=""><button type="button" class="btn bg-red btn-block btn-sm waves-effect">RAPORT</button></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$kelassiswa->links()}} 
                                        </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

