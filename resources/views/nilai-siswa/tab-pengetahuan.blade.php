<div class="row clearfix">
        <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
            <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                <!-- mulai perulangan disini-->
                @foreach ($matapel as $item)
                <div class="panel panel-col-teal">
                    <div class="panel-heading" role="tab" id="headingOneki3_{{$item->id_mata_pelajaran}}">
                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#matapelki3_{{$item->id_mata_pelajaran}}" aria-expanded="false" aria-controls="matapelki3_{{$item->id_mata_pelajaran}}">
                                {{$item->nama_mata_pelajaran}}
                            </a>
                        </h4>
                    </div>
                    <div id="matapelki3_{{$item->id_mata_pelajaran}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneki3_{{$item->id_mata_pelajaran}}">
                        <div class="body">
                            <!-- perulangan kd disini -->
                            @if (count($item->kd_ki3)>0)
                                @foreach ($nilaiki3 as $kd)
                                    @if ($item->id_mata_pelajaran == $kd->kompetensi_dasar->id_mapel)
                                        {!! Form::open(['url' =>'/nilaiki3/'.$kd->id_nilai_ki3.'/updateki3' ,'method' =>'put'])!!}                                        
                                            @include('inputform.nilai_harian_ki3')
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
    @section('scripts')
    @foreach ($matapel as $item)
        @foreach ($nilaiki3 as $kd)
            @if ($item->id_mata_pelajaran == $kd->kompetensi_dasar->id_mapel)
        @php 
            $ki = $kd->kompetensi_dasar->kelompok_indikator;
            $noki = $kd->kompetensi_dasar->no_indikator;
        @endphp
	<script>
		$(function(){
				var {{$ki}}{{$noki}}p1lisan = $('#{{$ki}}{{$noki}}p1lisan').val();
				var {{$ki}}{{$noki}}p1tulis = $('#{{$ki}}{{$noki}}p1tulis').val();
				var {{$ki}}{{$noki}}p1tugas1 = $('#{{$ki}}{{$noki}}p1tugas1').val();
				var {{$ki}}{{$noki}}p1tugas2 = $('#{{$ki}}{{$noki}}p1tugas2').val();

				var {{$ki}}{{$noki}}p2lisan = $('#{{$ki}}{{$noki}}p2lisan').val();
				var {{$ki}}{{$noki}}p2tulis = $('#{{$ki}}{{$noki}}p2tulis').val();
				var {{$ki}}{{$noki}}p2tugas1 = $('#{{$ki}}{{$noki}}p2tugas1').val();
				var {{$ki}}{{$noki}}p2tugas2 = $('#{{$ki}}{{$noki}}p2tugas2').val();

				var {{$ki}}{{$noki}}p3lisan = $('#{{$ki}}{{$noki}}p3lisan').val();
				var {{$ki}}{{$noki}}p3tulis = $('#{{$ki}}{{$noki}}p3tulis').val();
				var {{$ki}}{{$noki}}p3tugas1 = $('#{{$ki}}{{$noki}}p3tugas1').val();
				var {{$ki}}{{$noki}}p3tugas2 = $('#{{$ki}}{{$noki}}p3tugas2').val();
				
				var {{$ki}}{{$noki}}p4lisan = $('#{{$ki}}{{$noki}}p4lisan').val();
				var {{$ki}}{{$noki}}p4tulis = $('#{{$ki}}{{$noki}}p4tulis').val();
				var {{$ki}}{{$noki}}p4tugas1 = $('#{{$ki}}{{$noki}}p4tugas1').val();
				var {{$ki}}{{$noki}}p4tugas2 = $('#{{$ki}}{{$noki}}p4tugas2').val();

				var {{$ki}}{{$noki}}p5lisan = $('#{{$ki}}{{$noki}}p5lisan').val();
				var {{$ki}}{{$noki}}p5tulis = $('#{{$ki}}{{$noki}}p5tulis').val();
				var {{$ki}}{{$noki}}p5tugas1 = $('#{{$ki}}{{$noki}}p5tugas1').val();
                var {{$ki}}{{$noki}}p5tugas2 = $('#{{$ki}}{{$noki}}p5tugas2').val();
                
                var {{$ki}}{{$noki}}npas1 = $('#{{$ki}}{{$noki}}npas1').val();
                var {{$ki}}{{$noki}}npas2 = $('#{{$ki}}{{$noki}}npas2').val();

				var {{$ki}}{{$noki}}hasilp1 = ( parseInt({{$ki}}{{$noki}}p1lisan) + parseInt({{$ki}}{{$noki}}p1tulis) + parseInt({{$ki}}{{$noki}}p1tugas1) + parseInt({{$ki}}{{$noki}}p1tugas2))/4;
				$('#{{$ki}}{{$noki}}p1rata-rata').val({{$ki}}{{$noki}}hasilp1);	
				var {{$ki}}{{$noki}}hasilp2 = ( parseInt({{$ki}}{{$noki}}p2lisan) + parseInt({{$ki}}{{$noki}}p2tulis) + parseInt({{$ki}}{{$noki}}p2tugas1) + parseInt({{$ki}}{{$noki}}p2tugas2))/4;
				$('#{{$ki}}{{$noki}}p2rata-rata').val({{$ki}}{{$noki}}hasilp2);	
				var {{$ki}}{{$noki}}hasilp3 = ( parseInt({{$ki}}{{$noki}}p3lisan) + parseInt({{$ki}}{{$noki}}p3tulis) + parseInt({{$ki}}{{$noki}}p3tugas1) + parseInt({{$ki}}{{$noki}}p3tugas2))/4;
				$('#{{$ki}}{{$noki}}p3rata-rata').val({{$ki}}{{$noki}}hasilp3);	
				var {{$ki}}{{$noki}}hasilp4 = ( parseInt({{$ki}}{{$noki}}p4lisan) + parseInt({{$ki}}{{$noki}}p4tulis) + parseInt({{$ki}}{{$noki}}p4tugas1) + parseInt({{$ki}}{{$noki}}p4tugas2))/4;
				$('#{{$ki}}{{$noki}}p4rata-rata').val({{$ki}}{{$noki}}hasilp4);	
				var {{$ki}}{{$noki}}hasilp5 = ( parseInt({{$ki}}{{$noki}}p5lisan) + parseInt({{$ki}}{{$noki}}p5tulis) + parseInt({{$ki}}{{$noki}}p5tugas1) + parseInt({{$ki}}{{$noki}}p5tugas2))/4;
                $('#{{$ki}}{{$noki}}p5rata-rata').val({{$ki}}{{$noki}}hasilp5);
                
                var {{$ki}}{{$noki}}nph = ( parseInt({{$ki}}{{$noki}}hasilp1) + parseInt({{$ki}}{{$noki}}hasilp2) + parseInt({{$ki}}{{$noki}}hasilp3) + parseInt({{$ki}}{{$noki}}hasilp4) + parseInt({{$ki}}{{$noki}}hasilp5))/5;
                $('#{{$ki}}{{$noki}}nph').val({{$ki}}{{$noki}}nph);

                var {{$ki}}{{$noki}}nilaikd = ( parseInt({{$ki}}{{$noki}}nph) + parseInt({{$ki}}{{$noki}}npas1) + parseInt({{$ki}}{{$noki}}npas2))/3;
                $('#{{$ki}}{{$noki}}nilaikd').val({{$ki}}{{$noki}}nilaikd);

			$('input').on("keyup", function(){
				var {{$ki}}{{$noki}}p1lisan = $('#{{$ki}}{{$noki}}p1lisan').val();
				var {{$ki}}{{$noki}}p1tulis = $('#{{$ki}}{{$noki}}p1tulis').val();
				var {{$ki}}{{$noki}}p1tugas1 = $('#{{$ki}}{{$noki}}p1tugas1').val();
				var {{$ki}}{{$noki}}p1tugas2 = $('#{{$ki}}{{$noki}}p1tugas2').val();

				var {{$ki}}{{$noki}}p2lisan = $('#{{$ki}}{{$noki}}p2lisan').val();
				var {{$ki}}{{$noki}}p2tulis = $('#{{$ki}}{{$noki}}p2tulis').val();
				var {{$ki}}{{$noki}}p2tugas1 = $('#{{$ki}}{{$noki}}p2tugas1').val();
				var {{$ki}}{{$noki}}p2tugas2 = $('#{{$ki}}{{$noki}}p2tugas2').val();

				var {{$ki}}{{$noki}}p3lisan = $('#{{$ki}}{{$noki}}p3lisan').val();
				var {{$ki}}{{$noki}}p3tulis = $('#{{$ki}}{{$noki}}p3tulis').val();
				var {{$ki}}{{$noki}}p3tugas1 = $('#{{$ki}}{{$noki}}p3tugas1').val();
				var {{$ki}}{{$noki}}p3tugas2 = $('#{{$ki}}{{$noki}}p3tugas2').val();
				
				var {{$ki}}{{$noki}}p4lisan = $('#{{$ki}}{{$noki}}p4lisan').val();
				var {{$ki}}{{$noki}}p4tulis = $('#{{$ki}}{{$noki}}p4tulis').val();
				var {{$ki}}{{$noki}}p4tugas1 = $('#{{$ki}}{{$noki}}p4tugas1').val();
				var {{$ki}}{{$noki}}p4tugas2 = $('#{{$ki}}{{$noki}}p4tugas2').val();

				var {{$ki}}{{$noki}}p5lisan = $('#{{$ki}}{{$noki}}p5lisan').val();
				var {{$ki}}{{$noki}}p5tulis = $('#{{$ki}}{{$noki}}p5tulis').val();
				var {{$ki}}{{$noki}}p5tugas1 = $('#{{$ki}}{{$noki}}p5tugas1').val();
                var {{$ki}}{{$noki}}p5tugas2 = $('#{{$ki}}{{$noki}}p5tugas2').val();
                
                var {{$ki}}{{$noki}}npas1 = $('#{{$ki}}{{$noki}}npas1').val();
                var {{$ki}}{{$noki}}npas2 = $('#{{$ki}}{{$noki}}npas2').val();

				var {{$ki}}{{$noki}}hasilp1 = ( parseInt({{$ki}}{{$noki}}p1lisan) + parseInt({{$ki}}{{$noki}}p1tulis) + parseInt({{$ki}}{{$noki}}p1tugas1) + parseInt({{$ki}}{{$noki}}p1tugas2))/4;
				$('#{{$ki}}{{$noki}}p1rata-rata').val({{$ki}}{{$noki}}hasilp1);	
				var {{$ki}}{{$noki}}hasilp2 = ( parseInt({{$ki}}{{$noki}}p2lisan) + parseInt({{$ki}}{{$noki}}p2tulis) + parseInt({{$ki}}{{$noki}}p2tugas1) + parseInt({{$ki}}{{$noki}}p2tugas2))/4;
				$('#{{$ki}}{{$noki}}p2rata-rata').val({{$ki}}{{$noki}}hasilp2);	
				var {{$ki}}{{$noki}}hasilp3 = ( parseInt({{$ki}}{{$noki}}p3lisan) + parseInt({{$ki}}{{$noki}}p3tulis) + parseInt({{$ki}}{{$noki}}p3tugas1) + parseInt({{$ki}}{{$noki}}p3tugas2))/4;
				$('#{{$ki}}{{$noki}}p3rata-rata').val({{$ki}}{{$noki}}hasilp3);	
				var {{$ki}}{{$noki}}hasilp4 = ( parseInt({{$ki}}{{$noki}}p4lisan) + parseInt({{$ki}}{{$noki}}p4tulis) + parseInt({{$ki}}{{$noki}}p4tugas1) + parseInt({{$ki}}{{$noki}}p4tugas2))/4;
				$('#{{$ki}}{{$noki}}p4rata-rata').val({{$ki}}{{$noki}}hasilp4);	
				var {{$ki}}{{$noki}}hasilp5 = ( parseInt({{$ki}}{{$noki}}p5lisan) + parseInt({{$ki}}{{$noki}}p5tulis) + parseInt({{$ki}}{{$noki}}p5tugas1) + parseInt({{$ki}}{{$noki}}p5tugas2))/4;
                $('#{{$ki}}{{$noki}}p5rata-rata').val({{$ki}}{{$noki}}hasilp5);
                
                var {{$ki}}{{$noki}}nph = ( parseInt({{$ki}}{{$noki}}hasilp1) + parseInt({{$ki}}{{$noki}}hasilp2) + parseInt({{$ki}}{{$noki}}hasilp3) + parseInt({{$ki}}{{$noki}}hasilp4) + parseInt({{$ki}}{{$noki}}hasilp5))/5;
                $('#{{$ki}}{{$noki}}nph').val({{$ki}}{{$noki}}nph);
                
                var {{$ki}}{{$noki}}nilaikd = ( parseInt({{$ki}}{{$noki}}nph) + parseInt({{$ki}}{{$noki}}npas1) + parseInt({{$ki}}{{$noki}}npas2))/3;
                $('#{{$ki}}{{$noki}}nilaikd').val({{$ki}}{{$noki}}nilaikd);
			});	
		});
	</script>
            @endif
        @endforeach
    @endforeach
    @endsection