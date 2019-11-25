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
    <div class="block-header">
        <h2>Ubah Data Kelas</h2>
    </div>
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Ubah Data
                        <small>Keterangan</small>
                    </h2>
                </div>
                <div class="body">
                    {!! Form::model($kelas, ['route' => ['kelas.update', $kelas],'method' =>'patch'])!!}
                        @include('inputform.kelas', ['model' => $kelas])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
