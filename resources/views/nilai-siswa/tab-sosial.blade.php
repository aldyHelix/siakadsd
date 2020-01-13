<div class="col-sm-12 align-center">
        <h2 class="card-inside-title">
            {{$item->nama_nilai_sosial}}
        </h2>
    </div> 
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-center">
        <div class="col-xs-12">
                <label>Jujur</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="jujur_sb" value="{{$item->jujur_sb}}"> --}}
                            {!! Form::text('jujur_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
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
                            {{-- <input type="text" id="PB1" class="form-control" name="jujur_pb" value="{{$item->jujur_pb}}"> --}}
                            {!! Form::text('jujur_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-center">
        <div class="col-xs-12">
                <label>Disiplin</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="disiplin_sb" value="{{$item->disiplin_sb}}"> --}}
                            {!! Form::text('disiplin_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
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
                            {{-- <input type="text" id="PB1" class="form-control" name="disiplin_pb" value="{{$item->disiplin_pb}}"> --}}
                            {!! Form::text('disiplin_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-center">
        <div class="col-xs-12">
                <label>Tanggung Jawab</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="tanggung_jawab_sb" value="{{$item->tanggung_jawab_sb}}"> --}}
                            {!! Form::text('tanggung_jawab_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
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
                            {{-- <input type="text" id="PB1" class="form-control" name="tanggung_jawab_pb" value="{{$item->tanggung_jawab_pb}}"> --}}
                            {!! Form::text('tanggung_jawab_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-center">
        <div class="col-xs-12">
                <label>Santun</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="santun_sb" value="{{$item->santun_sb}}"> --}}
                            {!! Form::text('santun_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
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
                            {{-- <input type="text" id="PB1" class="form-control" name="santun_pb" value="{{$item->santun_pb}}"> --}}
                            {!! Form::text('santun_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-center">
        <div class="col-xs-12">
                <label>Peduli</label>
        </div>
        <div class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            {{-- <input type="text" id="SB1" class="form-control" name="peduli_sb" value="{{$item->peduli_sb}}"> --}}
                            {!! Form::text('peduli_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
                            
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
                            {{-- <input type="text" id="PB1" class="form-control" name="peduli_pb" value="{{$item->peduli_pb}}"> --}}
                            {!! Form::text('peduli_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 align-center">
            <div class="col-xs-12">
                    <label>Percaya Diri</label>
            </div>
            <div class="form-horizontal">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                        <label for="SB1">SB</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                        <div class="form-group">
                            <div class="form-line">
                                {{-- <input type="text" id="SB1" class="form-control" name="percaya_diri_sb" value="{{$item->percaya_diri_sb}}"> --}}
                                {!! Form::text('percaya_diri_sb', null,['id' => 'SB1', 'class' =>'form-control']) !!}
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
                                {{-- <input type="text" id="PB1" class="form-control" name="percaya_diri_pb" value="{{$item->percaya_diri_pb}}"> --}}
                                {!! Form::text('percaya_diri_pb', null,['id' => 'PB1', 'class' =>'form-control']) !!}
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
                            {{-- <textarea rows="4" class="form-control no-resize" name="deskripsi_raport" placeholder="Deskripsi Perilaku Sosial Siswa .  . . .">{{$item->deskripsi_raport}}</textarea> --}}
                            {!! Form::textarea('deskripsi_raport', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi Penilaian Sosial Siswa . . .']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            {!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}
        </div>

