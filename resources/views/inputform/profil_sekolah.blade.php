		<div class="row clearfix">
			{{-- form kolom --}}
			<div class="col-sm-12">
					<div class="form-group {!! $errors->has('nama_sekolah') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('nama_sekolah', 'Nama Sekolah :') !!}
							{!! Form::text('nama_sekolah', null,['class' =>'form-control', 'placeholder' => 'Nama Sekolah']) !!}
						</div>
						{!! $errors->first('nama_sekolah', '<p class="help-block">:message</p>') !!}
					</div>
					{{-- form class --}}
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-12">
				{{-- form class --}}
				<div class="form-group">
					<div class="form-line">
							{!! Form::label('id_kepala_sekolah', 'Nama Kepala Sekolah :') !!}
							{!! Form::select('id_kepala_sekolah', $guru, null,['class' => 'form-control show-tick', 'id'=>'id_guru' ,'placeholder' => 'Pilih Guru']) !!}
					</div>
				</div>
			</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-12">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('status') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('status', 'Status Sekolah :') !!}
							{!! Form::text('status', null,['class' =>'form-control', 'placeholder' => 'Status Sekolah']) !!}
						</div>
						{!! $errors->first('status', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-12">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('status') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('bentuk_pendidikan', 'Bentuk Pendidikan Sekolah :') !!}
							{!! Form::text('bentuk_pendidikan', null,['class' =>'form-control', 'placeholder' => 'Bentuk Pendidikan Sekolah']) !!}
						</div>
						{!! $errors->first('bentuk_pendidikan', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-12">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('status_kepemilikan') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('status_kepemilikan', 'Status Kepemilikan Sekolah :') !!}
							{!! Form::text('status_kepemilikan', null,['class' =>'form-control', 'placeholder' => 'Status_kepemilikan Sekolah']) !!}
						</div>
						{!! $errors->first('status_kepemilikan', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-12">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('kurikulum') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('kurikulum', 'Kurikulum Sekolah :') !!}
							{!! Form::text('kurikulum', null,['class' =>'form-control', 'placeholder' => 'Kurikulum Sekolah']) !!}
						</div>
						{!! $errors->first('kurikulum', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-12">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('alamat_sekolah') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('alamat_sekolah', 'Alamat Sekolah :') !!}
							{!! Form::textarea('alamat_sekolah', null,['rows' => '2', 'class' => 'form-control no-resize', 'placeholder' => 'alamat_sekolah Sekolah']) !!}
						</div>
						{!! $errors->first('alamat_sekolah', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-4">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('rt') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('rt', 'RT Sekolah :') !!}
							{!! Form::text('rt', null,['class' =>'form-control', 'placeholder' => 'rt Sekolah']) !!}
						</div>
						{!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-4">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('rw') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('rw', 'RW Sekolah :') !!}
							{!! Form::text('rw', null,['class' =>'form-control', 'placeholder' => 'rw Sekolah']) !!}
						</div>
						{!! $errors->first('rw', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-4">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('kodepos') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('kodepos', 'Kodepos Sekolah :') !!}
							{!! Form::text('kodepos', null,['class' =>'form-control', 'placeholder' => 'kodepos Sekolah']) !!}
						</div>
						{!! $errors->first('kodepos', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-6">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('kelurahan') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('kelurahan', 'Kelurahan Sekolah :') !!}
							{!! Form::text('kelurahan', null,['class' =>'form-control', 'placeholder' => 'kelurahan Sekolah']) !!}
						</div>
						{!! $errors->first('kelurahan', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-6">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('kecamatan') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('kecamatan', 'Kecamatan Sekolah :') !!}
							{!! Form::text('kecamatan', null,['class' =>'form-control', 'placeholder' => 'kecamatan Sekolah']) !!}
						</div>
						{!! $errors->first('kecamatan', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-6">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('kab_kota') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('kab_kota', 'Kab/ Kota Sekolah :') !!}
							{!! Form::text('kab_kota', null,['class' =>'form-control', 'placeholder' => 'kab_kota Sekolah']) !!}
						</div>
						{!! $errors->first('kab_kota', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-6">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('provinsi') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('provinsi', 'Provinsi Sekolah :') !!}
							{!! Form::text('provinsi', null,['class' =>'form-control', 'placeholder' => 'provinsi Sekolah']) !!}
						</div>
						{!! $errors->first('provinsi', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-6">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('negara') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('negara', 'Negara Sekolah :') !!}
							{!! Form::text('negara', null,['class' =>'form-control', 'placeholder' => 'negara Sekolah']) !!}
						</div>
						{!! $errors->first('negara', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}
		</div>
		<div class="row">
			{{-- form kolom --}}
			<div class="col-sm-6">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('lat') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('lat', 'Latitude Sekolah :') !!}
							{!! Form::text('lat', null,['class' =>'form-control', 'placeholder' => 'lat Sekolah']) !!}
						</div>
						{!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}

			{{-- form kolom --}}
			<div class="col-sm-6">
					{{-- form class --}}
					<div class="form-group {!! $errors->has('long') ? 'has-error' : '' !!}">
						<div class="form-line">
							{!! Form::label('long', 'Longitude Sekolah :') !!}
							{!! Form::text('long', null,['class' =>'form-control', 'placeholder' => 'long Sekolah']) !!}
						</div>
						{!! $errors->first('long', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
			{{--END form kolom  --}}
		</div>

		
{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}