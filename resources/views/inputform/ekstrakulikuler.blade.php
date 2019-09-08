{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_ekskul', null,['class' =>'form-control', 'placeholder' => 'Nama Ekstrakulikuler']) !!}
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
				{!! Form::datetime('jam_mengajar', null,['class' =>'form-control datetimepicker', 'placeholder' => 'Jam Mengajar Ekstrakulikuler']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}