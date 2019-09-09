@extends('layouts.app-dashboard')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Data Detail Siswa</h2>
    </div>
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
                </div>
                <div class="body">
                        <div class="row clearfix">
                            <div class="col-xs-4 ol-sm-4 col-md-4 col-lg-4">
                                <div class="thumbnail">
                                    <div class="image align-center">
                                        <img src="{{url('dashboard/images/user.png')}}" height="150" alt="User" />
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
                                                    <td>: {{$siswa->current_kelas->nama_kelas}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Semester/Tahun Ajaran</td>
                                                    <td>: {{$siswa->current_kelas->semester}}/({{$siswa->current_kelas->tahun_ajaran}})</td>
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
                                    <a href="javascript:void(0);" class="btn btn-primary btn-block waves-effect" role="button">{{$kel->nama_kelas}}/{{$kel->semester}}({{$kel->tahun_ajaran}})</a>
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
                                                        <b>Profile Content</b>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                                            sadipscing mel.
                                                        </p>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                                        <b>Message Content</b>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                                            sadipscing mel.
                                                        </p>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                                        <b>Settings Content</b>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                                            Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                                            pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                                            sadipscing mel.
                                                        </p>
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
@endsection