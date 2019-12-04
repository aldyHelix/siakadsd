@extends('layouts.app-dashboard')
@section('content')

    <div class="container-fluid">
        <div class="block-header">
            <h2>
                 INFORMASI RANGKUM SISTEM
            </h2>
        </div>
        <div class="row">
            {{-- Widget Counter --}}
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">face</i>
                        </div>
                        <div class="content">
                            <div class="text">Siswa Terdaftar</div>
                            <div class="number count-to" data-from="0" data-to="{{$jmlsiswa}}" data-speed="1000" data-fresh-interval="20">{{$jmlsiswa}}</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
            {{-- Widget Counter --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">school</i>
                        </div>
                        <div class="content">
                            <div class="text">Guru & Karyawan</div>
                            <div class="number count-to" data-from="0" data-to="{{$jmlguru}}" data-speed="1000" data-fresh-interval="20">{{$jmlguru}}</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
            {{-- Widget Counter --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">group</i>
                        </div>
                        <div class="content">
                            <div class="text">Rombongan Belajar</div>
                            <div class="number count-to" data-from="0" data-to="{{$jmlrombel}}" data-speed="1000" data-fresh-interval="20">{{$jmlrombel}}</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
            {{-- Widget Counter --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">directions_run</i>
                        </div>
                        <div class="content">
                            <div class="text">Ekstrakulikuler</div>
                            <div class="number count-to" data-from="0" data-to="{{$jmlekskul}}" data-speed="1000" data-fresh-interval="20">{{$jmlekskul}}</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
            {{-- Widget Counter --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">book</i>
                        </div>
                        <div class="content">
                            <div class="text">Mata Pelajaran</div>
                            <div class="number count-to" data-from="0" data-to="{{$jmlmatapel}}" data-speed="1000" data-fresh-interval="20">{{$jmlmatapel}}</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
            {{-- Widget Counter --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">stars</i>
                        </div>
                        <div class="content">
                            <div class="text">Prestasi Siswa</div>
                            <div class="number count-to" data-from="0" data-to="{{$jmlprestasi}}" data-speed="1000" data-fresh-interval="20">{{$jmlprestasi}}</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
            {{-- Widget Counter --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">trending_up</i>
                        </div>
                        <div class="content">
                            <div class="text">Persentase Kenaikan Kelas</div>
                            <div class="number count-to" data-from="0" data-to="{{$htgsiswanaik}}" data-speed="1000" data-fresh-interval="20">{{$htgsiswanaik}}%</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
            {{-- Widget Counter --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">school</i>
                        </div>
                        <div class="content">
                            <div class="text">Siswa Lulus</div>
                            <div class="number count-to" data-from="0" data-to="{{$jmlsiswalulus}}" data-speed="1000" data-fresh-interval="20">{{$jmlsiswalulus}}</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
            {{-- Widget Counter --}}
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">group_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Siswa Baru</div>
                            <div class="number count-to" data-from="0" data-to="{{$jmlsiswabaru}}" data-speed="1000" data-fresh-interval="20">{{$jmlsiswabaru}}</div>
                        </div>
                    </div>
                </div>
            {{-- END Widget Counter --}}
        </div>
    </div>
@endsection