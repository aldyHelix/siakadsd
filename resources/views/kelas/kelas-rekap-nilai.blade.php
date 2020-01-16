@extends('layouts.app-dashboard')
@section('content')
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2>Rekap Nilai {{$dt->kelas->nama_kelas}}</h2>
                        </div>
                        <div class="col-lg-3 push-right">
                            <a href="#">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">printer</i>
                                <span>Cetak / Ekspor</span>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                @php 
                    $countmapel = count($mapel);
                @endphp
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">no</th>
                                <th rowspan="2">nama</th>
                                <th colspan="{{$countmapel+1}}">nilai pengetahuan ( ki-3 )</th>
                                <th colspan="{{$countmapel+1}}">nilai keterampilan ( ki-4)</th>
                                <th rowspan="2">total</th>
                                <th rowspan="2">rata2</th>
                                <th rowspan="2">ket</th>
                            </tr>
                            <tr>
                                @foreach($mapel as $d)
                                <th>{{$d->nama_mata_pelajaran}}</th>
                                @endforeach
                                <th>jumlah</th>
                                @foreach($mapel as $d)
                                <th>{{$d->nama_mata_pelajaran}}</th>
                                @endforeach
                                <th>jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $no=>$d)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{$d->nama_lengkap}}</td>
                                <td>{{$d->matematika}}</td>
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