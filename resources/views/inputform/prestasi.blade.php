                <div class="row clearfix">
                    {{-- form kolom --}}
                    <div class="col-sm-6">
                        {{-- form class --}}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('nama_prestasi', null,['class' =>'form-control', 'placeholder' => 'Nama Prestasi']) !!}
                            </div>
                            {!! $errors->first('nama_prestasi', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    {{--END form kolom  --}}
                    {{-- form kolom --}}
                    <div class="col-sm-6">
                        {{-- form class --}}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('penyelenggara', null,['class' =>'form-control', 'placeholder' => 'Penyelenggara']) !!}
                            </div>
                            {!! $errors->first('penyelenggara', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    {{--END form kolom  --}}
                </div>
                <div class="row clearfix">
                {{-- form kolom --}}
                    <div class="col-sm-6">
                        {{-- form class --}}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('tahun_prestasi', null,['class' =>'form-control', 'placeholder' => 'Tahun Prestasi']) !!}
                            </div>
                            {!! $errors->first('tahun_prestasi', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    {{--END form kolom  --}}
                    {{-- form kolom --}}
                    <div class="col-sm-6">
                        {{-- form class --}}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('peringkat', null,['class' =>'form-control', 'placeholder' => 'Peringkat']) !!}
                            </div>
                            {!! $errors->first('peringkat', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    {{--END form kolom  --}}
                </div>
                <div class="row clearfix">
                    {{-- form kolom --}}
                    <div class="col-sm-6">
                        {{-- form class --}}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::textarea('saran-saran', null,['rows' => '2','class' =>'form-control', 'placeholder' => 'Saran - Saran']) !!}
                            </div>
                            {!! $errors->first('saran-saran', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    {{--END form kolom  --}}

                    {{-- form kolom --}}
                    <div class="col-sm-6">
                        <h4 class="card-inside-title">Foto Prestasi</h4>
                        {{-- form class --}}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::file('foto_prestasi', null,['class' => 'form-control']) !!}
                        	</div>
                            {!! $errors->first('foto_prestasi', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    {{--END form kolom  --}}
				</div>

				{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}