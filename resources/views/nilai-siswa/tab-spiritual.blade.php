    <div class="col-sm-12 align-center">
        <h2 class="card-inside-title">
            {{$item->nama_nilai_spiritual}}
        </h2>
    </div> 
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center">
        <div class="col-xs-12">
                <label>Ketaatan Ibadah</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="ketaatan_ibadah_sb" > --}}
                            {!! Form::text('ketaatan_ibadah_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="PB1">PB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="PB1" class="form-control" name="ketaatan_ibadah_pb"> --}}
                            {!! Form::text('ketaatan_ibadah_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center">
        <div class="col-xs-12">
                <label>Perilaku Syukur</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="perilaku_syukur_sb"> --}}
                            {!! Form::text('perilaku_syukur_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="PB1">PB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="PB1" class="form-control" name="perilaku_syukur_pb"> --}}
                            {!! Form::text('perilaku_syukur_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center">
        <div class="col-xs-12">
                <label>Berdoa Sesudah, Sebelum</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="berdoa_ses_seb_sb"> --}}
                            {!! Form::text('berdoa_ses_seb_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="PB1">PB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="PB1" class="form-control" name="berdoa_ses_seb_pb"> --}}
                            {!! Form::text('berdoa_ses_seb_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center">
        <div class="col-xs-12">
                <label>Toleransi Ibadah</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="toleransi_beribadah_sb"> --}}
                            {!! Form::text('toleransi_beribadah_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="PB1">PB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="PB1" class="form-control" name="toleransi_beribadah_pb"> --}}
                            {!! Form::text('toleransi_beribadah_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-12">
            <h2 class="card-inside-title">Deskripsi Raport</h2>
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                        {{-- <textarea rows="2" class="form-control no-resize" name="deskripsi_raport" placeholder="Deskripsi Penilaian Spiritual Siswa . . ."></textarea> --}}
                        {!! Form::textarea('deskripsi_raport', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi Penilaian Spiritual Siswa . . .']) !!}    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            {!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}
        </div>

