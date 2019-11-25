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
    <li class="active">Profil Sekolah</li>
</ol>
<!-- Hover Rows -->
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-16">
        <div class="card">
            <div class="header">
                Profile Sekolah
            </div>
            <div class="body">
                <!-- form open disini -->
                {!! Form::model($profil, ['route' => ['profilsekolah.update', $profil],'method' =>'patch'])!!}
                    @include('inputform.profil_sekolah')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- #END# Hover Rows -->
@endsection