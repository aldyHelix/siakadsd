@extends('layouts.app-dashboard')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2>Laporan Data Guru</h2>
                        </div>
                        <div class="col-lg-3 push-right">
                            <a href="{{route('cetak.guru')}}">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">printer</i>
                                <span>Cetak / Ekspor</span>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover">
                    <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>L / P</th>
                                <th>Jabatan</th>
                                <th>Tipe Guru</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dt as $no=>$gurus)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$gurus->NIP}}</td>
                                <td>{{$gurus->nama}}</td>
                                <td>{{$gurus->jenis_kelamin}}</td>
                                <td>{{$gurus->jabatan}}</td>
                                <td>{{$gurus->tipe_guru}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@endsection