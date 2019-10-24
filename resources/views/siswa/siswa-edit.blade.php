@extends('layouts.app-dashboard')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Ubah Data Siswa</h2>
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
                        </li>
                    </ul>
                </div>
                <div class="body">
                        {!! Form::model($siswa, ['route' => ['siswa.update', $siswa],'method' =>'patch'])!!}
                            @include('inputform._siswa', ['model' => $siswa])
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
