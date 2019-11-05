{!! Form::open(array('route' => 'catatansiswa.store', 'method' => 'POST')) !!}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group {!! $errors->has('absensi_sakit') ? 'has-error' : '' !!}">
			<div class="form-line">
				{!! Form::text('absensi_sakit', null,['class' =>'form-control', 'placeholder' => 'Absen Karena Sakit']) !!}
			</div>
			{!! $errors->first('absensi_sakit', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	{{--END form kolom  --}}
	{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group {!! $errors->has('absensi_ijin') ? 'has-error' : '' !!}">
			<div class="form-line">
				{!! Form::text('absensi_ijin', null,['class' =>'form-control', 'placeholder' => 'Absen Karena Ijin']) !!}
			</div>
			{!! $errors->first('absensi_ijin', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('absensi_tanpa_keterangan', null,['class' =>'form-control', 'placeholder' => 'Absen Tanpa Keterangan']) !!}
			</div>
			{!! $errors->first('absensi_tanpa_keterangan', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group {!! $errors->has('tinggi_badan') ? 'has-error' : '' !!}">
			<div class="form-line">
				{!! Form::text('tinggi_badan', null,['class' =>'form-control', 'placeholder' => 'Tinggi Badan Siswa Contoh: 180cm']) !!}
			</div>
			{!! $errors->first('tinggi_badan', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	{{--END form kolom  --}}
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group {!! $errors->has('berat_badan') ? 'has-error' : '' !!}">
			<div class="form-line">
				{!! Form::text('berat_badan', null,['class' =>'form-control', 'placeholder' => 'Berat Badan Contoh: 70kg']) !!}
			</div>
			{!! $errors->first('berat_badan', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
<div class="row clearfix">
	{{--END form kolom  --}}
	{{-- form kolom --}}
<div class="col-sm-12">
	{{-- form class --}}
	<div class="form-group">
		<div class="form-line">
			{!! Form::textarea('kesehatan_pendengaran', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi kesehatan Pendengaran siswa']) !!}
		</div>
		{!! $errors->first('kesehatan_pendengaran', '<p class="help-block">:message</p>') !!}
	</div>
</div>
{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
<div class="row clearfix">
	{{--END form kolom  --}}
	{{-- form kolom --}}
<div class="col-sm-12">
	{{-- form class --}}
	<div class="form-group">
		<div class="form-line">
			{!! Form::textarea('kesehatan_pengelihatan', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi kesehatan pengelihatan siswa']) !!}
		</div>
		{!! $errors->first('kesehatan_pengelihatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
<div class="row clearfix">
	{{--END form kolom  --}}
	{{-- form kolom --}}
<div class="col-sm-12">
	{{-- form class --}}
	<div class="form-group">
		<div class="form-line">
			{!! Form::textarea('kesehatan_gigi', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi kesehatan gigi siswa']) !!}
		</div>
		{!! $errors->first('kesehatan_gigi', '<p class="help-block">:message</p>') !!}
	</div>
</div>
{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
<div class="row clearfix">
	{{--END form kolom  --}}
	{{-- form kolom --}}
<div class="col-sm-12">
	{{-- form class --}}
	<div class="form-group">
		<div class="form-line">
			{!! Form::textarea('kesehatan_lainnya', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi kesehatan lainnya']) !!}
		</div>
		{!! $errors->first('kesehatan_lainnya', '<p class="help-block">:message</p>') !!}
	</div>
</div>
{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
<div class="row clearfix">
	{{--END form kolom  --}}
	{{-- form kolom --}}
<div class="col-sm-12">
	{{-- form class --}}
	<div class="form-group">
		<div class="form-line">
			{!! Form::textarea('prestasi_akademik', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi prestasi akademik siswa']) !!}
		</div>
		{!! $errors->first('prestasi_akademik', '<p class="help-block">:message</p>') !!}
	</div>
</div>
{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}
{!! Form::close() !!}