	{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
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
		{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
						{!! Form::select('kelas',['' => 'Pilih Kelas' ,'1' => 'Kelas 1', '2' => 'Kelas 2', '3' => 'Kelas 3', '4' => 'Kelas 4', '5' => 'Kelas 5', '6' => 'Kelas 6'],'Pilih Kelas',['class' => 'form-control show-tick']) !!}
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
					{!! Form::text('nama_mata_pelajaran', null,['class' =>'form-control', 'placeholder' => 'Nama Mata Pelajaran']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('kkm', null,['class' =>'form-control', 'placeholder' => 'KKM']) !!}
				</div>
			</div>
		</div>
		{{--END form kolom  --}}
	</div>
	{{-- END Form baris --}}
	{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}	
