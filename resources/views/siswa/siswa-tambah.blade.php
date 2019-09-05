@extends('layouts.app-dashboard')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Tambah Data Siswa</h2>
    </div>
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Masukkan Data
                        <small>Keterangan</small>
                    </h2>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    {!! Form::open(array('route' => 'siswa.store')) !!}
                        @include('inputform._siswa')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
