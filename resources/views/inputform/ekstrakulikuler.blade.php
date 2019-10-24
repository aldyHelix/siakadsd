{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_ekskul', null,['class' =>'form-control', 'placeholder' => 'Nama Ekstrakulikuler']) !!}
				{!! $errors->first('nama_ekskul', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_pengajar', null,['class' =>'form-control', 'placeholder' => 'Nama Pengajar']) !!}
				{!! $errors->first('nama_pengajar', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
						{!! Form::select('hari_mengajar',['' => 'Pilih Hari Mengajar' ,'Senin' => 'Senin', 'Selasa' => 'Selasa', 'Rabu' => 'Rabu', 'Kamis' => 'Kamis', 'Jumat' => 'Jumat', 'Sabtu' => 'Sabtu'],'Pilih Hari Mengajar',['class' => 'form-control show-tick']) !!}
						{!! $errors->first('hari_mengajar', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::time('jam_mengajar', null,['class' =>'form-control timepicker', 'placeholder' => 'Jam Mengajar Ekstrakulikuler']) !!}
				{!! $errors->first('jam_mengajar', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}