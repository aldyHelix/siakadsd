@extends('layouts.app-dashboard')
@section('content')
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
                    Kelas : <br>
                    KKM : <br>
                    Mata Pelajaran Kelas / Mata Pelajaran Guru 
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
                <div class="body">
                    @foreach ($matapel->kompetensi_dasar as $no=>$item)
                        {{$no+1}}:{{$item->kelompok_indikator}}:{{$item->no_indikator}}/{{$item->keterangan_kompetensi_dasar}} <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

