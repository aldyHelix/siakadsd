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
        <h2>Tambah Data User</h2>
    </div>
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambahkan User untuk Login
                    </h2>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    {!! Form::open(['route' => 'register.store', 'enctype' => 'multipart/form-data']) !!}
                        @include('inputform.user-add')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection