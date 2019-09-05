{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
		{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('nama_kelas', null,['class' =>'form-control', 'placeholder' => 'Nama Kelas']) !!}
				</div>
			</div>
		</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::select('semester',['' => 'Pilih Semester' ,'1' => 'Semester 1', '2' => 'Semester 2'],'Pilih Semester',['class' => 'form-control show-tick']) !!}
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
					{!! Form::text('tahun_ajaran', null,['class' =>'form-control', 'placeholder' => 'Tahun ajaran format : 2000/2001']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
						{!! Form::select('id_guru', $guru, null,['class' => 'form-control show-tick', 'id'=>'id_guru' ,'placeholder' => 'Pilih Guru']) !!}
				</div>
			</div>
		</div>
		{{--END form kolom  --}}
	</div>
	{{-- END Form baris --}}
	{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}
