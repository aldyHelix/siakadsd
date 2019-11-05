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
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Nama Peserta Didik</td>
                                            <td>: {{$siswa->nama_lengkap}}</td>
                                        </tr>
                                        <tr>
                                            <td>NISN / NIS</td>
                                            <td>: {{$siswa->NISN}} / {{$siswa->INDUK}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Sekolah</td>
                                            <td>: SDN balabala</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Sekolah</td>
                                            <td>: Jalan Jalan</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Kelas</td>
                                            <td>: {{$siswa->current_kelas->nama_kelas}}</td>
                                        </tr>
                                        <tr>
                                            <td>Semester</td>
                                            <td>: 
                                            @if ($siswa->current_kelas->semester == 1)
                                            Ganjil
                                            @else 
                                            Genap    
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Ajaran</td>
                                            <td>: {{$siswa->current_kelas->tahun_ajaran}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                          
                    </div>
                </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body nomarginbot">
                        <div class="row clearfix demo-button-sizes">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <a href="#" class="btn btn-primary btn-block waves-effect" role="button" data-toggle="modal" data-target="#setRaport">Setting Raport</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <a href="#" class="btn btn-primary btn-block waves-effect" role="button" data-toggle="modal" data-target="#rangkumModal">Rangkum Pembelajaran</a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                @if (!empty($nilaisiswa)) 
                                    <a href="{{route('raport.cetak', ['idnilaisiswa' => $nilaisiswa->id_nilai_siswa])}}" class="btn btn-primary btn-block waves-effect" role="button">Cetak Raport</a>
                                @else 
                                <a href="#" class="btn btn-primary btn-block waves-effect" disabled="disabled">Cetak Raport</a>
                                @endif
                                
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
                                    <div>
                                        @include('nilai-siswa.tab-pengetahuan',['matapel' => $matapel])
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="keterampilan">
                                    <div>
                                        @include('nilai-siswa.tab-keterampilan',['matapel' => $matapel])
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="catatan">
                                    <div>
                                        @include('nilai-siswa.tab-catatan')
                                    </div> 
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!-- tanggal raport -->
<div class="modal fade" id="setRaport" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Set Tanggal Raport</h4>
            </div>
            <div class="modal-body">
                @if (!empty($nilaisiswa)) 
                    Tanggal raport telah disetting, ubah tanggal sesuai tanggal yg diinginkan! <br>
                    Hidden id kelas siswa : {{$kelassiswa->id_kelas_siswa}} <br>
                    Hidden id siswa : {{$siswa->id_siswa}} <br>
                    isi tgl raport <br>
                    isi tgl penerimaan raport <br>  
                @else 
                    Tanggal Raport Belum di setting! silahkan setting disini!
                @endif
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!-- Large Size -->
<div class="modal fade" id="rangkumModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">Rangkuman Pembelajaran</h4>
                </div>
                <div class="modal-body">
                    @if (!empty($nilaisiswa)) 
                        view Rangkuman disini!
                    @else 
                        Tanggal Raport Belum di setting! silahkan setting terlebih dahulu!
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
@endsection