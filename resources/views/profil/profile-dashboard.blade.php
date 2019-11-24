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
    Input and Edit
    only 1st query could be change
</div>
<!-- #END# Hover Rows -->
@endsection