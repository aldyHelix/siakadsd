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
                        {{$guru->nama}}
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                           <div class="image align-center">
                                <img src="{{url('dashboard/images/user.png')}}" height="75" alt="User" />
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <table>
                                <tr>
                                    <td>Nama </td>
                                    <td>: {{$guru->nama}}</td>
                                </tr>
                                <tr>
                                    <td>NIP </td>
                                    <td>: {{$guru->NIP}}</td>
                                </tr>
                                <tr>
                                    <td>NUPTK </td>
                                    <td>: {{$guru->NUPTK}}</td>
                                </tr>
                                <tr>
                                    <td>Tempat, Tanggal Lahir </td>
                                <td>: {{$guru->tempat_lahir}}, {{$guru->tgl_lahir}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        @if ($guru->tipe_guru == 'Kelas')
                            <div class="col-sm-12">
                                @foreach ($guru->kelas as $item)
                                    {{$item->nama_kelas}} <br>
                                @endforeach
                            </div>
                        @else 
                            <div class="col-sm-6">
                                @foreach ($guru->mata_pelajaran as $item)
                                    {{$item->nama_mata_pelajaran}} <br>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

