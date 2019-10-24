@extends('layouts.app-dashboard')
@section('content')
<div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Nilai Siswa
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix demo-button-sizes">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <a href="javascript:void(0);">
                                    <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                </a>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                info 1
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                info 2
                            </div>
                        </div>
                          
                    </div>
                </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix demo-button-sizes">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <a href="#" class="btn btn-primary btn-block waves-effect" role="button">Setting Raport</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <a href="#" class="btn btn-primary btn-block waves-effect" role="button">Rangkum Pembelajaran</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <a href="#" class="btn btn-primary btn-block waves-effect" role="button">Cetak Raport</a>
                            </div>
                        </div>
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#spiritual" data-toggle="tab">
                                        <i class="material-icons">school</i> KI 1 SPIRITUAL
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#sosial" data-toggle="tab">
                                        <i class="material-icons">people_outline</i> KI 2 SOSIAL
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#pengetahuan" data-toggle="tab">
                                        <i class="material-icons">book</i> KI 3 PENGETAHUAN
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#keterampilan" data-toggle="tab">
                                        <i class="material-icons">build</i> KI 4 KETERAMPILAN
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#catatan" data-toggle="tab">
                                        <i class="material-icons">library_books</i> CATATAN
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="spiritual">
                                    <div class="row clearfix">
                                        @include('nilai-siswa.tab-spiritual')
                                    </div>
                                    
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="sosial">
                                    <div class="row clearfix">
                                        @include('nilai-siswa.tab-sosial')
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="pengetahuan">
                                    <b>Message Content</b><br>
                                    @include('nilai-siswa.tab-spiritual')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="keterampilan">
                                    <b>Settings Content</b><br>
                                    @include('nilai-siswa.tab-spiritual')
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="catatan">
                                    <b>Catatan Siswa</b><br>
                                    @include('nilai-siswa.tab-spiritual')
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection