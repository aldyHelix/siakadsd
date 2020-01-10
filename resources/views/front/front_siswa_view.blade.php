<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>SIMAK SDN 2 Landungsari</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- CSS -->
    <link href="{{url('white_pro/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('white_pro/css/flexslider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('white_pro/css/animate.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('white_pro/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('white_pro/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('white_pro/css/colors/')}}" rel="stylesheet" type="text/css" id="colors" />

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- SCRIPTS -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->

    <script src="{{url('white_pro/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/superfish.min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/owl.carousel.js')}}"></script>
    <script src="{{url('white_pro/js/animate.js')}}" type="text/javascript"></script>
    <script src="{{url('white_pro/js/myscript.js')}}" type="text/javascript"></script>

    <!--gentella cross theme back-end -->

    <!-- Font Awesome -->
    <link href="{{url('front-end/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('front-end/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{url('front-end/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('front-end/build/css/custom.min.css')}}" rel="stylesheet">

    <script src="{{url('front-end/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{url('front-end/vendors/nprogress/nprogress.js')}}"></script>
    <!-- morris.js -->
    <script src="{{url('front-end/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{url('front-end/vendors/morris.js/morris.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('front-end/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('front-end/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{url('front-end/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{url('front-end/build/js/custom.min.js')}}"></script>

</head>

<body>

    <!-- PRELOADER -->
    <img id="preloader" src="{{url('white_pro/images/preloader.gif')}}" alt="" style="height:50px; width:50px"/>
    <!-- //PRELOADER -->
    <div class="preloader_hide">

        <!-- PAGE -->
        <div id="page" class="single_page">

            @include('front/front_header')

            <!-- PORTFOLIO -->
            <section id="portfolio">

                <!-- CONTAINER -->
                <div class="container">
                    <!-- page content -->
                    @if(isset($details))
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Laporan Aktivitas Pembelajaran</h2>
                                </div>
                                <div class="x_content">
                                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                        <div class="profile_img">
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <img class="img-responsive avatar-view" src="{{ url('/img/' . $siswa->foto_siswa) }}" alt="Avatar">
                                            </div>
                                        </div>
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
                                                        <td>Kewarganegaraan</td>
                                                        <td>: {{$siswa->kewarganegaraan}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br>
                                            <br>
                                            @foreach($siswa->kelas as $kel)
                                            <a id="{{$kel->id_kelas}}{{$kel->semester}}" class="btn btn-success" role="button">Nilai {{$kel->nama_kelas}}/ SMT {{$kel->semester}}({{$kel->tahun_ajaran}})</a>
                                            @endforeach
                                    </div>


                                    <div id="showNilai1" class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#tab_prestasi1" id="prestasi-tab" role="tab" data-toggle="tab" aria-expanded="true">Prestasi</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_ekskul2" role="tab" id="ekskul-tab" data-toggle="tab" aria-expanded="false">Ekstrakulikuler</a>
                                                    </li>
                                                </ul>
                                                <div id="myTabContent" class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_prestasi1" aria-labelledby="prestasi-tab">
                                                            @foreach($siswa->prestasi as $key=>$pr)
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <img class="media-object" src="{{ url('/img-prestasi/' . $pr->foto_prestasi) }}" width="64" height="64">
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <h4 class="media-heading">{{$pr->nama_prestasi}}</h4>
                                                                    Tahun : {{$pr->tahun_prestasi}} <br>
                                                                    Prestasi {{$pr->jenis_prestasi}} yang diselenggarakan oleh {{$pr->penyelenggara}}. <br>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    Peringkat {{$pr->peringkat}} <br>
                                                                    Hasil berupa {{$pr->saran_saran}}.
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            @endforeach
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_ekskul2" aria-labelledby="ekskul-tab">
                                                            @foreach($siswa->siswaekskul as $key=>$pr)
                                                                <h4 class="media-heading">{{$pr->ekskul->nama_ekskul}}</h4>
                                                                {{$pr->ekskul->nama_pengajar}} <br>
                                                                {{$pr->ekskul->hari_mengajar}}
                                                                <hr>
                                                            @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div id="showthis">

                                    </div>
                                    @foreach($siswa->kelas as $kel)
                                    <div id="showNilai{{$kel->id_kelas}}" class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">KI1 Spiritual</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">KI2 Sosial</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">KI3 Pengetahuan</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">KI4 Keterampilan</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Catatan</a>
                                                    </li>
                                                </ul>
                                                <div id="myTabContent" class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                        {{-- Hasil Nilai KI 1 SPIRITUAL --}}
                                                        {{-- {{dd($kel->kelas_siswa->nilai_siswa->nilai_spiritual)}} --}}
                                                        <table>
                                                            <tr>
                                                                <th rowspan="2">No</th>
                                                                <th rowspan="2" style="width: 300px">Nama Penilaian</th>
                                                                <th colspan="2">Ketaatan Ibadah</th>
                                                                <th colspan="2">Perilaku Syukur</th>
                                                                <th colspan="2">Berdoa Sesudah / Sebelum</th>
                                                                <th colspan="2">Toleransi Beribadah</th>
                                                                <th rowspan="2">Deskripsi</th>
                                                              </tr>
                                                              <tr>
                                                                <td> SB</td>
                                                                <td> PB</td>
                                                                <td> SB</td>
                                                                <td> PB</td>
                                                                <td> SB</td>
                                                                <td> PB</td>
                                                                <td> SB</td>
                                                                <td> PB</td>
                                                              </tr>
                                                        
                                                        @foreach($kel->kelas_siswa->nilai_siswa->nilai_spiritual as $no=>$nilai_spiritual)
                                                              <tr>
                                                                <td>{{$no+1}}</td>
                                                                <td>{{$nilai_spiritual->nama_nilai_spiritual}}</td>
                                                                <td>{{$nilai_spiritual->ketaatan_ibadah_sb}}</td>
                                                                <td>{{$nilai_spiritual->ketaatan_ibadah_pb}}</td>
                                                                <td>{{$nilai_spiritual->perilaku_syukur_sb}}</td>
                                                                <td>{{$nilai_spiritual->perilaku_syukur_pb}}</td>
                                                                <td>{{$nilai_spiritual->berdoa_ses_seb_sb}}</td>
                                                                <td>{{$nilai_spiritual->berdoa_ses_seb_pb}}</td>
                                                                <td>{{$nilai_spiritual->toleransi_beribadah_sb}}</td>
                                                                <td>{{$nilai_spiritual->toleransi_beribadah_pb}}</td>
                                                                <td>{{$nilai_spiritual->deskripsi_raport}}</td>
                                                              </tr>
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
                                                        </table>
                                                        <br>
                                                        <br>
                                                        <h5>Deskripsi Spiritual Siswa </h5>
                                                        <br>
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
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                        <table >
                                                            <tr>
                                                              <th  rowspan="2">No</th>
                                                              <th  rowspan="2" style="width: 150px">Nama Penilaian</th>
                                                              <th  colspan="2" style="width: 100px">Jujur<br></th>
                                                              <th  colspan="2" style="width: 100px">Disiplin</th>
                                                              <th  colspan="2" style="width: 100px">Tanggung Jawab<br></th>
                                                              <th  colspan="2" style="width: 100px">Santun<br></th>
                                                              <th  colspan="2" style="width: 100px">Peduli<br></th>
                                                              <th  colspan="2" style="width: 100px">Percaya Diri</th>
                                                              <th  rowspan="2" style="width: 150px">Deskripsi</th>
                                                            </tr>
                                                            <tr>
                                                              <td >SB</td>
                                                              <td >PB</td>
                                                              <td >SB</td>
                                                              <td >PB</td>
                                                              <td >SB</td>
                                                              <td >PB</td>
                                                              <td >SB</td>
                                                              <td >PB</td>
                                                              <td >SB</td>
                                                              <td >PB</td>
                                                              <td >SB</td>
                                                              <td >PB</td>
                                                            </tr>
                                                            @foreach($kel->kelas_siswa->nilai_siswa->nilai_sosial as $no=>$nisos)
                                                            <tr>
                                                                <td>{{$no+1}}</td>
                                                                <td >{{$nisos->nama_nilai_sosial}}</td>
                                                                <td >{{$nisos->jujur_sb}}</td>
                                                                <td >{{$nisos->jujur_pb}}</td>
                                                                <td >{{$nisos->disiplin_sb}}</td>
                                                                <td >{{$nisos->disiplin_pb}}</td>
                                                                <td >{{$nisos->tanggung_jawab_sb}}</td>
                                                                <td >{{$nisos->tanggung_jawab_pb}}</td>
                                                                <td >{{$nisos->santun_sb}}</td>
                                                                <td >{{$nisos->santun_pb}}</td>
                                                                <td >{{$nisos->peduli_sb}}</td>
                                                                <td >{{$nisos->peduli_pb}}</td>
                                                                <td >{{$nisos->percaya_diri_sb}}</td>
                                                                <td >{{$nisos->percaya_diri_pb}}</td>
                                                                <td >{{$nisos->deskripsi_raport}}</td>
                                                            </tr>
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
                                                          </table>
                                                          <br>
                                                        <br>
                                                        <h5>Deskripsi Sosial Siswa </h5>
                                                        <br>
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
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                        Hasil Nilai KI3 Pengetahuan
                                                        Mapel - Indikator - Nilai
                                                        {{dd($kel->kelas_siswa->nilai_siswa->nilai_ki3)}}
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                                        Hasil Nilai KI4 Pengetahuan
                                                        Mapel - Indikator - Nilai
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
                                                        Catatan - Catatan   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                <!-- /page content -->
                </div>
            </section><!-- //PORTFOLIO -->
        </div><!-- //PAGE -->

        <!-- FOOTER -->
        @include('front/front_footer')
    </div>
        
        <script>
            $(document).ready(function(){
            @foreach($siswa->kelas as $kel)
                $("#showNilai{{$kel->id_kelas}}").hide();

                $("#{{$kel->id_kelas}}{{$kel->semester}}").click(function(){
                    $("#showNilai{{$kel->id_kelas}}").toggle("slide");
                });

            @endforeach
            });
        </script> 
</body>

</html>