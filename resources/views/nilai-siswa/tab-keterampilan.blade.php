<div class="row clearfix">
        <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
            <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                <!-- mulai perulangan disini-->
                @foreach ($matapel as $item)
                <div class="panel panel-col-teal">
                    <div class="panel-heading" role="tab" id="headingOneki4_{{$item->id_mata_pelajaran}}">
                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#matapelki4_{{$item->id_mata_pelajaran}}" aria-expanded="false" aria-controls="matapelki4_{{$item->id_mata_pelajaran}}">
                                {{$item->nama_mata_pelajaran}}
                            </a>
                        </h4>
                    </div>
                    <div id="matapelki4_{{$item->id_mata_pelajaran}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneki4_{{$item->id_mata_pelajaran}}">
                        <div class="body">
                            <!-- perulangan kd disini-->
                            @if (count($item->kd_ki4)>0)
                                @foreach ($nilaiki4 as $kd)
                                    @if ($item->id_mata_pelajaran == $kd->kompetensi_dasar->id_mapel)
                                        {!! Form::open(['url' =>'/nilaiki4/'.$kd->id_nilai_ki4.'/updateki4' ,'method' =>'put'])!!} 
                                        @include('inputform.nilai_harian_ki4')
                                        <div class="col-xs-12">
                                            <hr>
                                        </div>
                                        {!! Form::close() !!} 
                                    @else 
                                        <b>Nilai Siswa Belum Dibuat!</b>
                                    @endif
                                @endforeach    
                            @else
                                <b>Kompetensi Dasar Belum Ditambahkan. Silahkan Edit Kompetensi Dasar Terlebih Dahulu!</b>
                            @endif
                            <!-- END perulangan-->
                        </div>
                    </div>
                </div>
                @endforeach 
                <!-- 
                    Perulangan sejumlah mata pelajaran sesuai kelas yang di klik (via URL ke controller) 
                    jadi pengisian nilai dapat dilakukan dalam halaman ini saja tanpa berpindah ke halaman lain. 
                    *perlu diberikan keterangan untuk menyimpan setiap perubahan.
                    *didalam mata pelajaran ini terdapat kompetensi dasar yang harus diisi
                -->
            </div>
        </div>
    </div>
    @section('scriptski4')
    @foreach ($matapel as $item)
        @foreach ($nilaiki4 as $kd)
            @if ($item->id_mata_pelajaran == $kd->kompetensi_dasar->id_mapel)
                @php 
                    $ki = $kd->kompetensi_dasar->kelompok_indikator;
                    $noki = $kd->kompetensi_dasar->no_indikator;
                @endphp
                <script>
                    $(document).ready(function(){
                        var {{$ki}}{{$noki}}praktekp1 = $('#{{$ki}}{{$noki}}praktikp1').val();
                        var {{$ki}}{{$noki}}praktekp2 = $('#{{$ki}}{{$noki}}praktikp2').val();
                        var {{$ki}}{{$noki}}praktekp3 = $('#{{$ki}}{{$noki}}praktikp3').val();
                        var {{$ki}}{{$noki}}praktekp4 = $('#{{$ki}}{{$noki}}praktikp4').val();
                        var {{$ki}}{{$noki}}praktekp5 = $('#{{$ki}}{{$noki}}praktikp5').val();

                        var {{$ki}}{{$noki}}produkp1 = $('#{{$ki}}{{$noki}}produkp1').val();
                        var {{$ki}}{{$noki}}produkp2 = $('#{{$ki}}{{$noki}}produkp2').val();
                        var {{$ki}}{{$noki}}produkp3 = $('#{{$ki}}{{$noki}}produkp3').val();
                        var {{$ki}}{{$noki}}produkp4 = $('#{{$ki}}{{$noki}}produkp4').val();
                        var {{$ki}}{{$noki}}produkp5 = $('#{{$ki}}{{$noki}}produkp5').val();

                        var {{$ki}}{{$noki}}proyekp1 = $('#{{$ki}}{{$noki}}proyekp1').val();
                        var {{$ki}}{{$noki}}proyekp2 = $('#{{$ki}}{{$noki}}proyekp2').val();
                        var {{$ki}}{{$noki}}proyekp3 = $('#{{$ki}}{{$noki}}proyekp3').val();
                        var {{$ki}}{{$noki}}proyekp4 = $('#{{$ki}}{{$noki}}proyekp4').val();
                        var {{$ki}}{{$noki}}proyekp5 = $('#{{$ki}}{{$noki}}proyekp5').val();

                        var {{$ki}}{{$noki}}praktek_lists = [parseInt({{$ki}}{{$noki}}praktekp1), parseInt({{$ki}}{{$noki}}praktekp2),parseInt({{$ki}}{{$noki}}praktekp3), parseInt({{$ki}}{{$noki}}praktekp4), parseInt({{$ki}}{{$noki}}praktekp5)];
                        var {{$ki}}{{$noki}}praktek_max = Math.max.apply(Math, {{$ki}}{{$noki}}praktek_lists);

                        var {{$ki}}{{$noki}}produk_lists = [parseInt({{$ki}}{{$noki}}produkp1), parseInt({{$ki}}{{$noki}}produkp2),parseInt({{$ki}}{{$noki}}produkp3), parseInt({{$ki}}{{$noki}}produkp4), parseInt({{$ki}}{{$noki}}produkp5)];
                        var {{$ki}}{{$noki}}produk_max = Math.max.apply(Math, {{$ki}}{{$noki}}produk_lists);

                        var {{$ki}}{{$noki}}proyek_lists = [parseInt({{$ki}}{{$noki}}proyekp1), parseInt({{$ki}}{{$noki}}proyekp2),parseInt({{$ki}}{{$noki}}proyekp3), parseInt({{$ki}}{{$noki}}proyekp4), parseInt({{$ki}}{{$noki}}proyekp5)];
                        var {{$ki}}{{$noki}}proyek_max = Math.max.apply(Math, {{$ki}}{{$noki}}proyek_lists);

                        var {{$ki}}{{$noki}}rata_rata = ({{$ki}}{{$noki}}praktek_max + {{$ki}}{{$noki}}produk_max + {{$ki}}{{$noki}}proyek_max)/3;
                        $('#{{$ki}}{{$noki}}praktikmax').val({{$ki}}{{$noki}}praktek_max);
                        $('#{{$ki}}{{$noki}}produkmax').val({{$ki}}{{$noki}}produk_max);
                        $('#{{$ki}}{{$noki}}proyekmax').val({{$ki}}{{$noki}}proyek_max);
                        $('#{{$ki}}{{$noki}}rata-rata').val({{$ki}}{{$noki}}rata_rata);

                        $("input").on("keyup", function(){
                            var {{$ki}}{{$noki}}praktekp1 = $('#{{$ki}}{{$noki}}praktikp1').val();
                            var {{$ki}}{{$noki}}praktekp2 = $('#{{$ki}}{{$noki}}praktikp2').val();
                            var {{$ki}}{{$noki}}praktekp3 = $('#{{$ki}}{{$noki}}praktikp3').val();
                            var {{$ki}}{{$noki}}praktekp4 = $('#{{$ki}}{{$noki}}praktikp4').val();
                            var {{$ki}}{{$noki}}praktekp5 = $('#{{$ki}}{{$noki}}praktikp5').val();

                            var {{$ki}}{{$noki}}produkp1 = $('#{{$ki}}{{$noki}}produkp1').val();
                            var {{$ki}}{{$noki}}produkp2 = $('#{{$ki}}{{$noki}}produkp2').val();
                            var {{$ki}}{{$noki}}produkp3 = $('#{{$ki}}{{$noki}}produkp3').val();
                            var {{$ki}}{{$noki}}produkp4 = $('#{{$ki}}{{$noki}}produkp4').val();
                            var {{$ki}}{{$noki}}produkp5 = $('#{{$ki}}{{$noki}}produkp5').val();

                            var {{$ki}}{{$noki}}proyekp1 = $('#{{$ki}}{{$noki}}proyekp1').val();
                            var {{$ki}}{{$noki}}proyekp2 = $('#{{$ki}}{{$noki}}proyekp2').val();
                            var {{$ki}}{{$noki}}proyekp3 = $('#{{$ki}}{{$noki}}proyekp3').val();
                            var {{$ki}}{{$noki}}proyekp4 = $('#{{$ki}}{{$noki}}proyekp4').val();
                            var {{$ki}}{{$noki}}proyekp5 = $('#{{$ki}}{{$noki}}proyekp5').val();

                            var {{$ki}}{{$noki}}praktek_lists = [parseInt({{$ki}}{{$noki}}praktekp1), parseInt({{$ki}}{{$noki}}praktekp2),parseInt({{$ki}}{{$noki}}praktekp3), parseInt({{$ki}}{{$noki}}praktekp4), parseInt({{$ki}}{{$noki}}praktekp5)];
                            var {{$ki}}{{$noki}}praktek_max = Math.max.apply(Math, {{$ki}}{{$noki}}praktek_lists);

                            var {{$ki}}{{$noki}}produk_lists = [parseInt({{$ki}}{{$noki}}produkp1), parseInt({{$ki}}{{$noki}}produkp2),parseInt({{$ki}}{{$noki}}produkp3), parseInt({{$ki}}{{$noki}}produkp4), parseInt({{$ki}}{{$noki}}produkp5)];
                            var {{$ki}}{{$noki}}produk_max = Math.max.apply(Math, {{$ki}}{{$noki}}produk_lists);

                            var {{$ki}}{{$noki}}proyek_lists = [parseInt({{$ki}}{{$noki}}proyekp1), parseInt({{$ki}}{{$noki}}proyekp2),parseInt({{$ki}}{{$noki}}proyekp3), parseInt({{$ki}}{{$noki}}proyekp4), parseInt({{$ki}}{{$noki}}proyekp5)];
                            var {{$ki}}{{$noki}}proyek_max = Math.max.apply(Math, {{$ki}}{{$noki}}proyek_lists);

                            var {{$ki}}{{$noki}}rata_rata = ({{$ki}}{{$noki}}praktek_max + {{$ki}}{{$noki}}produk_max + {{$ki}}{{$noki}}proyek_max)/3;
                            $('#{{$ki}}{{$noki}}praktikmax').val({{$ki}}{{$noki}}praktek_max);
                            $('#{{$ki}}{{$noki}}produkmax').val({{$ki}}{{$noki}}produk_max);
                            $('#{{$ki}}{{$noki}}proyekmax').val({{$ki}}{{$noki}}proyek_max);
                            $('#{{$ki}}{{$noki}}rata-rata').val({{$ki}}{{$noki}}rata_rata);
                        });
                    });
                </script>
            @endif
        @endforeach
    @endforeach
    @endsection