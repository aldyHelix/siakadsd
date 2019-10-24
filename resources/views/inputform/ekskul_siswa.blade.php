<div class="row clearfix">
	<!-- Form hidden id siswa here-->
		{{-- form kolom --}}
	<div class="col-sm-6">
			{{-- form class list ekstrakulikuler disini --}}
		<div class="form-group">
			<div class="form-line">
					{!! Form::select('id_ekskul', $ekskul, null,['class' => 'form-control show-tick', 'id'=>'id_ekskul' ,'placeholder' => 'Pilih Ekstrakulikuler']) !!}
			</div>
			{!! $errors->first('id_ekskul', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}