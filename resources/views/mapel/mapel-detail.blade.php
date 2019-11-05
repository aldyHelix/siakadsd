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
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="card">
                <div class="header">
                    <h2>
                        Informasi Mata Pelajaran
                    </h2>
                </div>
                <div class="body">
                    Nama Mata Pelajaran : {{$matapel->nama_mata_pelajaran}}<br>
                    Kelas : {{$matapel->kelas}}<br>
                    KKM : {{$matapel->kkm}}<br>
                    @if ($matapel->is_kelas == 1)
                        Guru Kelas <br>
                        Nama Guru : {{$matapel->guru->nama}} <br>
                    @else 
                        Guru Mata Pelajaran <br>
                        Nama Guru : {{$matapel->guru->nama}} <br>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="card">
                <div class="header">
                    <h2>
                        Kompetensi Dasar
                    </h2>
                        
                </div>
                <div class="body table-responsive">
                        <a href="#">
                                <button type="button" class="btn btn-primary waves-effect pull-right">
                                <i class="material-icons">note_add</i>
                                <span>Tambah KD</span>
                            </button>
                        </a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kel / No Indikator</th>
                                        <th>Smt</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matapel->kompetensi_dasar as $no=>$item)
                                    <tr>
                                        <th scope="row">{{$no+1}}</th>
                                        <td>{{strtoupper($item->kelompok_indikator)}} / {{$item->no_indikator}}</td>
                                        <td>{{$item->semester}}</td>
                                        <td>{{$item->keterangan_kompetensi_dasar}}</td>
                                        <td>
                                            <a href="">
                                                <button type="button" class="btn btn-primary waves-effect pull-right"> Edit KD </button>
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
    </div>
</div>
@endsection

