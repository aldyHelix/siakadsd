
    <div class="col-sm-12 align-center">
        <h2 class="card-inside-title">
            {{$item->nama_nilai_spiritual}}
        </h2>
    </div> 
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center">
        <div class="col-xs-12">
                <label>Ketaatan Ibadah</label>
        </div>
        <form class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="SB1" class="form-control" name="ketaatan_ibadah_sb" value="{{$item->ketaatan_ibadah_sb}}">
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
                            <input type="text" id="PB1" class="form-control" name="ketaatan_ibadah_pb" value="{{$item->ketaatan_ibadah_pb}}">
                        </div>
                    </div>
                </div>
            </div>
        </form>    
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center">
        <div class="col-xs-12">
                <label>Perilaku Syukur</label>
        </div>
        <form class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="SB1" class="form-control" name="perilaku_syukur_sb" value="{{$item->perilaku_syukur_sb}}">
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
                            <input type="text" id="PB1" class="form-control" name="perilaku_syukur_pb" value="{{$item->perilaku_syukur_pb}}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center">
        <div class="col-xs-12">
                <label>Berdoa Sesudah, Sebelum</label>
        </div>
        <form class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="SB1" class="form-control" name="berdoa_ses_seb_sb" value="{{$item->berdoa_ses_seb_sb}}">
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
                            <input type="text" id="PB1" class="form-control" name="berdoa_ses_seb_pb" value="{{$item->berdoa_ses_seb_pb}}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center">
        <div class="col-xs-12">
                <label>Toleransi Ibadah</label>
        </div>
        <form class="form-horizontal">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5 form-control-label">
                    <label for="SB1">SB</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="SB1" class="form-control" name="toleransi_beribadah_sb" value="{{$item->toleransi_beribadah_sb}}">
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
                            <input type="text" id="PB1" class="form-control" name="toleransi_beribadah_pb" value="{{$item->toleransi_beribadah_pb}}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
        <div class="col-lg-12">
            <h2 class="card-inside-title">Deskripsi Raport</h2>
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                        <textarea rows="4" class="form-control no-resize" name="deskripsi_raport" placeholder="Deskripsi Penilaian Spiritual Siswa . . .">{{$item->deskripsi_raport}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            {!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}
        </div>

