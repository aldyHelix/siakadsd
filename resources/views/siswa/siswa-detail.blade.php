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
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{$siswa->nama_lengkap}}
                        <small>Keterangan</small>
                    </h2>
                        </li>
                    </ul>
                    @include('layouts.flash-message')
                </div>
                <div class="body">
                        <div class="row clearfix">
                            <div class="col-xs-4 ol-sm-4 col-md-4 col-lg-4">
                                <div class="thumbnail">
                                    <div class="image align-center">
                                        <img src="{{ url('/img/' . $siswa->foto_siswa) }}" height="150" alt="User" />
                                    </div>
                                    <div class="caption">
                                        <h3>{{$siswa->nama_lengkap}}</h3>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>INDUK</td>
                                                    <td>: {{$siswa->INDUK}}</td>
                                                </tr>
                                                <tr>
                                                    <td>NISN</td>
                                                    <td>: {{$siswa->NISN}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Sedang Di Kelas</td>
                                                    <td>: {{!empty($siswa->current_kelas->nama_kelas) ? $siswa->current_kelas->nama_kelas : '-'}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Semester/Tahun Ajaran</td>
                                                    <td>: {{!empty($siswa->current_kelas->semester) ? $siswa->current_kelas->semester : '-'}}/({{!empty($siswa->current_kelas->tahun_ajaran) ? $siswa->current_kelas->tahun_ajaran : '-'}})</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>: {{$siswa->jenis_kelamin}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat, Tgl Lahir</td>
                                                    <td>: {{$siswa->tempat_lahir}}, {{date('d-m-Y', strtotime($siswa->tgl_lahir))}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Agama/Kepercayaan</td>
                                                    <td>: {{$siswa->agama}}/{{$siswa->kepercayaan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kewarganegaraan</td>
                                                    <td>: {{$siswa->kewarganegaraan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Berkebutuhan Khusus</td>
                                                    <td>: {{!empty($siswa->berkebutuhan_khusus) ? $siswa->berkebutuhan_khusus : 'Tidak'}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        @foreach($siswa->kelas as $kel)
                                            <a href="{{route('siswa.shownilai',['idsiswa' => $siswa->id_siswa, 'idkelas'=>$kel->id_kelas])}}" class="btn btn-primary btn-block waves-effect" role="button">Nilai {{$kel->nama_kelas}}/ SMT {{$kel->semester}}({{$kel->tahun_ajaran}})</a>
                                        @endforeach
                                    </div>
                                </div>  
                            </div>
                            <div class="col-xs-8 ol-sm-8 col-md-8 col-lg-8">
                                    <div class="card">
                                            <div class="body">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a href="#home_with_icon_title" data-toggle="tab">
                                                            <i class="material-icons">face</i> PROFIL SISWA
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#profile_with_icon_title" data-toggle="tab">
                                                            <i class="material-icons">star</i> PRESTASI
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#messages_with_icon_title" data-toggle="tab">
                                                            <i class="material-icons">directions_run</i> EKSKUL
                                                        </a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a href="#settings_with_icon_title" data-toggle="tab">
                                                            <i class="material-icons">book</i> HISTORI KELAS
                                                        </a>
                                                    </li>
                                                </ul>
                    
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                                            <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                                                    <div class="panel panel-col-pink">
                                                                        <div class="panel-heading" role="tab" id="headingOne_19">
                                                                            <h4 class="panel-title">
                                                                                <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                                                                    <i class="material-icons">perm_contact_calendar</i> Data Dokumen & Alamat Rumah Siswa
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                                            <div class="panel-body">
                                                                                @if (!empty($siswa->NIK))
                                                                                    NIK : {{$siswa->NIK}}<br>
                                                                                @else 
                                                                                    KITAS : {{$siswa->NIK}}<br>
                                                                                @endif
                                                                                
                                                                                No Akta Lahir : {{$siswa->no_reg_akta_lahir}}<br>
                                                                                Alamat Rumah : {{$siswa->alamat_jalan}} RT {{$siswa->rt}} / RW {{$siswa->rw}} <br>
                                                                                Dusun {{$siswa->nama_dusun}}, Kelurahan/ Desa {{$siswa->nama_kelurahan_desa}}, Kec. {{$siswa->kecamatan}}, Kota/Kab {{$siswa->kota_kab}} <br>
                                                                                Kodepos : {{$siswa->kode_pos}} <br>
                                                                                <div class="form-line">
                                                                                    Status Tempat Tinggal : {{$siswa->status_tempat_tinggal}} <br>
                                                                                    Moda Trasportasi Ke Sekolah : {{$siswa->moda_transportasi}} <br>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @if(!empty($siswa->no_kartu_keluarga_sejahtera))
                                                                    <div class="panel panel-col-cyan">
                                                                        <div class="panel-heading" role="tab" id="headingTwo_19">
                                                                            <h4 class="panel-title">
                                                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19">
                                                                                    <i class="material-icons">cloud_download</i> Data Kartu Keluarga Sejahtera dan Kartu Indonesia Pintar
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseTwo_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_19">
                                                                            <div class="panel-body">
                                                                                kosongin dulu
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    <div class="panel panel-col-teal">
                                                                        <div class="panel-heading" role="tab" id="headingThree_19">
                                                                            <h4 class="panel-title">
                                                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree_19" aria-expanded="false" aria-controls="collapseThree_19">
                                                                                    <i class="material-icons">contact_phone</i> Data Orang Tua & Wali Siswa
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseThree_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_19">
                                                                            <div class="panel-body">
                                                                                <div class="col-xs-6 ol-sm-6 col-md-6 col-lg-6">
                                                                                    <table>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Nama Ayah </td>
                                                                                                <td>: {{$siswa->nama_ayah}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>NIK </td>
                                                                                                <td>: {{$siswa->nik_ayah}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Tempat, Tgl Lahir </td>
                                                                                                <td>: {{$siswa->tempat_lahir_ayah}},{{date('d-m-Y', strtotime($siswa->tgl_lahir_ayah))}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Pendidikan Terakhir </td>
                                                                                                <td>: {{$siswa->pendidikan_ayah}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Pekerjaan </td>
                                                                                                <td>: {{$siswa->pekerjaan_ayah}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Penghasilan Rata-rata </td>
                                                                                                <td>: {{$siswa->penghasilan_ayah}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Berkebutuhan_khusus </td>
                                                                                                <td>: {{!empty($siswa->berkebutuhan_khusus_ayah) ? $siswa->berkebutuhan_khusus_ayah : 'Tidak'}}</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="col-xs-6 ol-sm-6 col-md-6 col-lg-6">
                                                                                        <table>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>Nama Ibu </td>
                                                                                                        <td>: {{$siswa->nama_ibu}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>NIK </td>
                                                                                                        <td>: {{$siswa->nik_ibu}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>Tempat, Tgl Lahir </td>
                                                                                                        <td>: {{$siswa->tempat_lahir_ibu}},{{date('d-m-Y', strtotime($siswa->tgl_lahir_ibu))}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>Pendidikan Terakhir </td>
                                                                                                        <td>: {{$siswa->pendidikan_ibu}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>Pekerjaan </td>
                                                                                                        <td>: {{$siswa->pekerjaan_ibu}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>Penghasilan Rata-rata </td>
                                                                                                        <td>: {{$siswa->penghasilan_ibu}}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>Berkebutuhan_khusus </td>
                                                                                                        <td>: {{!empty($siswa->berkebutuhan_khusus_ibu) ? $siswa->berkebutuhan_khusus_ibu : 'Tidak'}}</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                </div>
                                                                                @if(!empty($siswa->nama_wali))
                                                                                    <table>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Nama Wali </td>
                                                                                                <td>: {{$siswa->nama_wali}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>NIK </td>
                                                                                                <td>: {{$siswa->nik_wali}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Tempat, Tgl Lahir </td>
                                                                                                <td>: {{$siswa->tempat_lahir_wali}},{{date('d-m-Y', strtotime($siswa->tgl_lahir_wali))}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Pendidikan Terakhir </td>
                                                                                                <td>: {{$siswa->pendidikan_wali}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Pekerjaan </td>
                                                                                                <td>: {{$siswa->pekerjaan_wali}}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>Penghasilan Rata-rata </td>
                                                                                                <td>: {{$siswa->penghasilan_wali}}</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-col-orange">
                                                                        <div class="panel-heading" role="tab" id="headingFour_19">
                                                                            <h4 class="panel-title">
                                                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour_19" aria-expanded="false" aria-controls="collapseFour_19">
                                                                                    <i class="material-icons">folder_shared</i> Kontak Keluarga Siswa
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="collapseFour_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_19">
                                                                            <div class="panel-body">
                                                                            <b>Kontak 1 : </b>{{!empty($siswa->kontak_no_tlep_1) ? $siswa->kontak_no_tlep_1 : '-'}}<br>
                                                                            <b>Kontak 2 : </b>{{!empty($siswa->kontak_no_tlep_2) ? $siswa->kontak_no_tlep_2 : '-'}}<br>
                                                                            <b>Kontak 3 : </b>{{!empty($siswa->no_hp_1) ? $siswa->no_hp_1 : '-'}}<br>
                                                                            <b>Kontak 4 : </b>{{!empty($siswa->no_hp_1) ? $siswa->no_hp_1 : '-'}}<br>
                                                                            <b>Email 1 : </b>{{!empty($siswa->email_1) ? $siswa->email_1 : '-'}}<br>
                                                                            <b>Email 2 : </b>{{!empty($siswa->email_2) ? $siswa->email_2 : '-'}}<br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                                            <button type="button" class="btn btn-info waves-effect pull-right" data-toggle="modal" data-target="#modalPrestasi">Tambah Prestasi Siswa</button>
                                                        <br>
                                                        <b>Prestasi Siswa</b>
                                                        <p>
                                                            @foreach($siswa->prestasi as $key=>$pr)
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="javascript:void(0);">
                                                                        <img class="media-object" src="{{ url('/img-prestasi/' . $pr->foto_prestasi) }}" width="64" height="64">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">{{$pr->nama_prestasi}}</h4>
                                                                    <button type="button" class="btn btn-default waves-effect pull-right" data-toggle="modal" data-target="#{{$key}}">
                                                                            <i class="material-icons">edit</i>
                                                                    </button>
                                                                    Tahun : {{$pr->tahun_prestasi}} <br>
                                                                    Prestasi {{$pr->jenis_prestasi}} yang diselenggarakan oleh {{$pr->penyelenggara}}. <br>
                                                                    Peringkat {{$pr->peringkat}} <br>
                                                                    Hasil berupa {{$pr->saran_saran}}.
                                                                </div>
                                                            </div>
                                                            <div class="modal fade" id="{{$key}}" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                            <h4 class="modal-title" id="defaultModalLabel">Ubah prestasi {{$pr->nama_prestasi}}</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                {!! Form::model($pr, ['route' => ['prestasi.update', $pr],'method' =>'patch', 'files' => true])!!}
                                                                                    {!! Form::hidden('id_prestasi', $pr->id_prestasi,['class' =>'form-control']) !!}
                                                                                    {!! Form::hidden('id_siswa', $pr->id_siswa,['class' =>'form-control']) !!}
                                                                                    @include('inputform.prestasi', ['model' => $pr])
                                                                                {!! Form::close() !!}
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                                            <button type="button" class="btn btn-info waves-effect pull-right" data-toggle="modal" data-target="#modalEkskul">Tambah Ekstrakulikuler Siswa</button>
                                                            <br>
                                                            <b>Ekstrakulikuler Siswa</b>
                                                            <p>
                                                                @foreach($siswa->siswaekskul as $key=>$pr)
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <a href="javascript:void(0);">
                                                                            <img class="media-object" src="http://placehold.it/64x64" width="64" height="64">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="media-heading">{{$pr->ekskul->nama_ekskul}}</h4>
                                                                        <button type="button" class="btn btn-danger waves-effect pull-right" data-toggle="modal" data-target="#AA{{$key}}">
                                                                                <i class="material-icons">delete</i>
                                                                        </button>
                                                                        {{-- Tahun : {{$pr->tahun_prestasi}} <br>
                                                                        Prestasi {{$pr->jenis_prestasi}} yang diselenggarakan oleh {{$pr->penyelenggara}}. <br>
                                                                        Peringkat {{$pr->peringkat}}, Hasil {{$pr->saran_saran}}. --}}
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" id="AA{{$key}}" tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                <h4 class="modal-title" id="defaultModalLabel">{{$siswa->nama_lengkap}} mengikuti Ekstrakulikuler {{$pr->ekskul->nama_ekskul}}</h4>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Apakah Anda Yakin untuk menghapus data ini?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    {!! Form::model($pr, ['route' => ['ekskulsiswa.destroy', $pr->id], 'method' => 'delete'] ) !!}
                                                                                    <button type="submit" class="btn btn-link waves-effect">Ya, Saya Yakin</button>
                                                                                    {!! Form::close()!!}
                                                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </p>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                                        @foreach ($siswa->kelas as $item)
                                                        {{$item->nama_kelas}} : {{$item->tahun_ajaran}}<br>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            <div class="col-xs-8 ol-sm-8 col-md-8 col-lg-8">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Default Size -->
<div class="modal fade" id="modalPrestasi" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Tambah Prestasi</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'prestasi.store', 'enctype' => 'multipart/form-data']) !!}
                <!-- Hidden Id siswa here-->
                    {!! Form::hidden('id_siswa', $siswa->id_siswa,['class' =>'form-control']) !!}
                    @include('inputform.prestasi')
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!-- Default Size -->
<div class="modal fade" id="modalEkskul" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Tambah Ekstrakulikuler Siswa</h4>
                </div>
                <div class="modal-body">
                        {!! Form::open(['route' => 'ekskulsiswa.store', 'enctype' => 'multipart/form-data']) !!}
                        @include('inputform.ekskul_siswa')
                        {!! Form::hidden('id_siswa', $siswa->id_siswa,['class' =>'form-control']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
@endsection