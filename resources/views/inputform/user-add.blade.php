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
				{!! Form::text('nip', null,['class' =>'form-control', 'placeholder' => 'NIP User untuk Login']) !!}
			</div>
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
				{!! Form::text('name', null,['class' =>'form-control', 'placeholder' => 'Username User untuk Login']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
    {{-- form kolom --}}
	<div class="col-sm-6">
	    {{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('email', null,['class' =>'form-control', 'placeholder' => 'Email User untuk Login']) !!}
			</div>
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
				{!! Form::password('password',['class' =>'form-control', 'placeholder' => 'Password User untuk Login']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
    {{-- form kolom --}}
	<div class="col-sm-6">
	    {{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::password('password2',['class' =>'form-control', 'placeholder' => 'Ulangi Password']) !!}
			</div>
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
				{!! Form::select('role',['' => 'Pilih Hak Akses' ,'operator' => 'Operator', 'gurukelas' => 'Guru Kelas', 'gurumapel' => 'Guru Mata Pelajaran', 'kepalasekolah' => 'Kepala Sekolah'],'Pilih Hak Akses',['class' => 'form-control show-tick']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}
