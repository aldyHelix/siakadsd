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
                                @foreach ($item->kd_ki4 as $kd)
                                @include('inputform.nilai_harian_ki4')
                                <div class="col-xs-12">
                                    <hr>
                                </div>
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