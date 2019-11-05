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
                        {{$kd->mata_pelajaran->nama_mata_pelajaran}}/ {{$kd->mata_pelajaran->kelas}}
                    </h2>
                </div>
                <div class="body">
                    {{$kd->kelompok_indikator}} / {{$kd->no_indikator}} <br>
                    {{$kd->keterangan_kompetensi_dasar}} <br>
                    Kelas : {{$kd->kelas}} / Semester {{$kd->semester}} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

