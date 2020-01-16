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
                        @include('layouts.flash-message')
                    </div>
                    <div class="body">
                        <div class="row clearfix demo-button-sizes">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <a href="javascript:void(0);">
                                    <img class="media-object" src="{{ url('/img/' . $siswa->foto_siswa) }}" width="64" height="64">
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
                                            <td>: {{$profilSekolah->nama_sekolah}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Sekolah</td>
                                            <td>: {{$profilSekolah->alamat_sekolah}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Kelas</td>
                                            <td>: {{$nilaisiswa->nilai_siswa_kelas->kelas->nama_kelas}}</td>
                                        </tr>
                                        <tr>
                                            <td>Semester</td>
                                            <td>: 
                                            @if ($nilaisiswa->nilai_siswa_kelas->kelas->semester == 1)
                                            Ganjil
                                            @else 
                                            Genap    
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Ajaran</td>
                                            <td>: {{$nilaisiswa->nilai_siswa_kelas->kelas->tahun_ajaran}}</td>
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
                                    <a href="{{route('raport.cetak', ['idsiswa' => $siswa->id_siswa, 'idkelas' => $siswa->id_kelas])}}" class="btn btn-primary btn-block waves-effect" role="button">Cetak Raport</a>
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
                                        @foreach ($nilaispiritual as $item)
                                        {!! Form::model($item, ['route' => ['nilaispiritual.update', $item->id_nilai_spiritual],'method' =>'patch'])!!}
                                            @include('nilai-siswa.tab-spiritual', ['model' => $item])
                                        {!! Form::close() !!}
                                        @endforeach
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="sosial">
                                    <div class="row clearfix">
                                        @foreach ($nilaisosial as $item)
                                        {!! Form::model($item, ['route' => ['nilaisosial.update', $item->id_nilai_sosial],'method' =>'patch'])!!}
                                            @include('nilai-siswa.tab-sosial', ['model' => $item])
                                        {!! Form::close() !!}
                                        @endforeach
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
            {!! Form::model($nilaisiswa, ['route' => ['nilaisiswa.update', $nilaisiswa->id_nilai_siswa], 'method' => 'patch'])!!}
            <div class="modal-body">
                @if (!empty($nilaisiswa)) 
                    Tanggal raport telah disetting, ubah tanggal sesuai tanggal yg diinginkan! <br>
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
                        {!! Form::hidden('id_kelas_siswa', $kelassiswa->id_kelas_siswa,['class' =>'form-control']) !!}
                        {!! Form::hidden('id_siswa', $siswa->id_siswa,['class' =>'form-control']) !!}
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-6 form-control-label-ct rg-5-padding">
                                <label>Tgl Raport</label>
                            </div>
                            <div class="col-xs-6 nopaddings">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::date('tgl_raport', null,['class' =>'form-control', 'placeholder' => 'pilih tanggal raport']) !!}                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-6 form-control-label-ct rg-5-padding">
                                <label>Tgl Penerimaan Raport</label>
                            </div>
                            <div class="col-xs-6 nopaddings">
                                <div class="form-group">
                                    <div class="form-line">
                                        {!! Form::date('tgl_penerimaan_raport', null,['class' =>'form-control', 'placeholder' => 'pilih tanggal raport']) !!}
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                @else 
                    Tanggal Raport Belum di setting!
                @endif  
            </div>
            <div class="modal-footer">
                {!! Form::submit('SIMPAN', ['class'=>'btn btn-link waves-effect']) !!}
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            {!! Form::close() !!}
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
                        <div class="body">
                            <div class="list-group">
                                <a href="javascript:void(0);" class="list-group-item">
                                    <h4 class="list-group-item-heading">Nilai Sosial</h4>
                                    <p class="list-group-item-text">
                                    @foreach($nilaisosial as $nisos)
                                        @php
                                            $jumlahnisos[] = array(
                                                $nisos->jujur_sb,
                                                $nisos->jujur_pb,
                                                $nisos->disiplin_sb,
                                                $nisos->disiplin_pb,
                                                $nisos->tanggung_jawab_sb,
                                                $nisos->tanggung_jawab_pb,
                                                $nisos->santun_sb,
                                                $nisos->santun_pb,
                                                $nisos->peduli_sb,
                                                $nisos->peduli_pb,
                                                $nisos->percaya_diri_sb,
                                                $nisos->percaya_diri_pb,
                                            );
                                        @endphp
                                    @endforeach
                                    @php
                                        $jumlahnisos = (array_sum($jumlahnisos[0]) + array_sum($jumlahnisos[1]))/24;
                                    @endphp
                                        @if($jumlahnisos <= 2)
                                            <p> Ananda {{$siswa->nama_lengkap}} kurang bersosial</p>
                                        @elseif((2 < $jumlahnisos) or ($jumlahnisos >= 5))
                                            <p>Ananda {{$siswa->nama_lengkap}} bersosial dengan baik</p>
                                        @elseif((5 < $jumlahnisos) or ($jumlahnisos <= 6))
                                            <p>Ananda {{$siswa->nama_lengkap}} bersosial dan aktif dalam bersosialisasi</p>
                                        @else 
                                            <p>-</p>
                                        @endif
                                    </p>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <h4 class="list-group-item-heading">Nilai Spiritual</h4>
                                    <p class="list-group-item-text">
                                    @foreach($nilaispiritual as $nilai_spiritual)
                                        @php
                                            $jumlahnilai[] = array(
                                                $nilai_spiritual->ketaatan_ibadah_sb, 
                                                $nilai_spiritual->ketaatan_ibadah_pb,
                                                $nilai_spiritual->perilaku_syukur_sb,
                                                $nilai_spiritual->perilaku_syukur_pb,
                                                $nilai_spiritual->berdoa_ses_seb_sb,
                                                $nilai_spiritual->berdoa_ses_seb_pb,
                                                $nilai_spiritual->toleransi_beribadah_sb,
                                                $nilai_spiritual->toleransi_beribadah_pb,
                                                );
                                        @endphp
                                    @endforeach
                                    @php
                                        $jumlahnilai = (array_sum($jumlahnilai[0]) + array_sum($jumlahnilai[1]))/16;
                                    @endphp
                                        @if($jumlahnilai <= 2)
                                            <p> Ananda {{$siswa->nama_lengkap}} memiliki toleransi dengan sesama murid yang rendah, 
                                            perlu adanya bimbingan dari orang tua dan guru untuk memberikan edukasi mengenai ketaatan ibadah, berperilaku bersyukur, pentingnya berdoa Sebelum
                                            dan sesudah melakukan sesuatu, serta pentingnya dalam toleransi beribadah. </p>
                                        @elseif((2 < $jumlahnilai) or ($jumlahnilai >= 5))
                                            <p>Ananda {{$siswa->nama_lengkap}} memiliki toleransi yang baik dengan sesama murid, siswa mampu memahami pentingnya ketaatan ibadah, berperilaku bersyukur
                                            pentingnya berdoa sebelum dan sesudah melakukan sesuatu, serta pentingnya bertoleransi dalam beribadah.</p>
                                        @elseif((5 < $jumlahnilai) or ($jumlahnilai <= 6))
                                            <p>Ananda {{$siswa->nama_lengkap}} memiliki toleransi yang sangat baik dan berlaku adil pada teman-temannya, siswa mampu menjelaskan dan berdiskusi mengenai pentingnya ketaatan ibadah,
                                            berperilaku bersyukur, pentingnya berdoa sebelum dan sesudah melakukan sesuatu, serta pentingnya bertoleransi dalam beribadah</p>
                                        @else 
                                            <p>-</p>
                                        @endif
                                    </p>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <h4 class="list-group-item-heading">Nilai Pengetahuan</h4>
                                    <div class="body">
                                        <ul class="list-group">
                                        @foreach ($matapel as $item)
                                        @if (count($item->kd_ki3)>0)
                                            @foreach ($nilaiki3 as $kd)
                                                @php
                                                    $rtki3[] = $kd->nilai_kd;
                                                @endphp
                                            @endforeach
                                                @php
                                                    $rtmapel = array_sum($rtki3)/count($rtki3);
                                                    $rtmapel = number_format((float)$rtmapel, 2, '.','');
                                                @endphp
                                            <li class="list-group-item">{{$item->nama_mata_pelajaran}} <span class="badge bg-orange">{{$rtmapel}}</span></li>    
                                        @else
                                            <li class="list-group-item">{{$item->nama_mata_pelajaran}} <span class="badge bg-orange">Kosong</span></li>
                                        @endif
                                        @endforeach
                                        </ul>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <h4 class="list-group-item-heading">Nilai Keterampilan</h4>
                                    <div class="body">
                                        <ul class="list-group">
                                        @foreach ($matapel as $item)
                                        @if (count($item->kd_ki4)>0)
                                            @foreach ($nilaiki4 as $kd)
                                                @php
                                                    $rtki4[] = $kd->rata_rata;
                                                @endphp
                                            @endforeach
                                                @php
                                                    $rtmapel = array_sum($rtki4)/count($rtki4);
                                                    $rtmapel = number_format((float)$rtmapel, 2, '.','');
                                                @endphp
                                            <li class="list-group-item">{{$item->nama_mata_pelajaran}} <span class="badge bg-purple">{{$rtmapel}}</span></li>    
                                        @else
                                            <li class="list-group-item">{{$item->nama_mata_pelajaran}} <span class="badge bg-orange">Kosong</span></li>
                                        @endif
                                        @endforeach
                                        </ul>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <h4 class="list-group-item-heading">Catatan Siswa</h4>
                                    <div class="body">
                                        <ul class="list-group">
                                            @if(!empty($catatansiswa))
                                            <li class="list-group-item">Absensi Sakit <span class="badge bg-cyan">{{$catatansiswa->absensi_sakit}}</span></li>
                                            <li class="list-group-item">Absensi Ijin <span class="badge bg-cyan">{{$catatansiswa->absensi_ijin}}</span></li>
                                            <li class="list-group-item">Absensi Tanpa Keterangan <span class="badge bg-cyan">{{$catatansiswa->absensi_tanpa_keterangan}}</span></li>
                                            <li class="list-group-item">Tinggi Badan <span class="badge bg-cyan">{{$catatansiswa->tinggi_badan}} cm</span></li>
                                            <li class="list-group-item">Berat Badan <span class="badge bg-cyan">{{$catatansiswa->berat_badan}} kg</span></li>
                                            <li class="list-group-item">Kesehatan Pendengaran <span class="badge bg-cyan">{{$catatansiswa->kesehatan_pendengaran}}</span></li>
                                            <li class="list-group-item">Kesehatan Pengelihatan <span class="badge bg-cyan">{{$catatansiswa->kesehatan_pengelihatan}}</span></li>
                                            <li class="list-group-item">Kesehatan Gigi <span class="badge bg-cyan">{{$catatansiswa->kesehatan_gigi}}</span></li>
                                            <li class="list-group-item">Kesehatan Lain <span class="badge bg-cyan">{{$catatansiswa->kesehatan_lainnya}}</span></li>
                                            <li class="list-group-item">Prestasi Akademik <span class="badge bg-cyan">{{$catatansiswa->prestasi_akademik}}</span></li>
                                            @else
                                            <li class="list-group-item">Data belum terisi <span class="badge bg-cyan">kosong</span></li>
                                            @endif 
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div> 
                    @else 
                        Tanggal Raport Belum di setting! silahkan setting terlebih dahulu!
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
@endsection