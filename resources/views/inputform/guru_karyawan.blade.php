{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
		{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('nama', null,['class' =>'form-control', 'placeholder' => 'Nama Lengkap Guru']) !!}
				</div>
			</div>
		</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::select('jenis_kelamin',['' => 'Pilih Jenis Kelamin' ,'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'],'Pilih Jenis Kelamin',['class' => 'form-control show-tick']) !!}
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
					{!! Form::text('NIP', null,['class' =>'form-control', 'placeholder' => 'No NIP']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('NUPTK', null,['class' =>'form-control', 'placeholder' => 'No NUPTK']) !!}
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
					{!! Form::text('tempat_lahir', null,['class' =>'form-control', 'placeholder' => 'Tempat Lahir']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::date('tgl_lahir', null,['class' =>'form-control', 'placeholder' => 'Tanggal Lahir']) !!}
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
						{!! Form::select('status_guru',['' => 'Pilih Status Guru' ,'Guru Tetap' => 'Guru Tetap', 'Guru Tidak Tetap' => 'Guru Tidak Tetap','Penjaga'=>'Penjaga' ],'Pilih Status Guru',['class' => 'form-control show-tick']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('golongan', null,['class' =>'form-control', 'placeholder' => 'Golongan']) !!}
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
					{!! Form::text('pendidikan_terakhir', null,['class' =>'form-control', 'placeholder' => 'Pendidikan Terakhir Guru']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('jabatan', null,['class' =>'form-control', 'placeholder' => 'Jabatan Guru di Sekolah']) !!}
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
					{!! Form::text('agama', null,['class' =>'form-control', 'placeholder' => 'Agama']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
						{!! Form::textarea('alamat', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Alamat Rumah']) !!}
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
						{!! Form::select('tipe_guru',['' => 'Pilih Tipe Guru' ,'Kelas' => 'Kelas', 'Mata Pelajaran' => 'Mata Pelajaran','Lain-Lain' => 'Lain-Lain'],'Pilih Tipe Guru',['class' => 'form-control show-tick']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::file('foto_guru', null,['class' =>'form-control', 'placeholder' => 'Upload Foto Guru']) !!}
				</div>
			</div>
		</div>
		{{--END form kolom  --}}
	</div>
	{{-- END Form baris --}}
	
	{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}