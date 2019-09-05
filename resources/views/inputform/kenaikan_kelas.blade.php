{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_siswa', 'Id_siswa:') !!}
			{!! Form::text('id_siswa') !!}
		</li>
		<li>
			{!! Form::label('id_kelas_sebelum', 'Id_kelas_sebelum:') !!}
			{!! Form::text('id_kelas_sebelum') !!}
		</li>
		<li>
			{!! Form::label('id_kelas_sesudah', 'Id_kelas_sesudah:') !!}
			{!! Form::text('id_kelas_sesudah') !!}
		</li>
		<li>
			{!! Form::label('is_siswa_naik', 'Is_siswa_naik:') !!}
			{!! Form::text('is_siswa_naik') !!}
		</li>
		<li>
			{!! Form::label('is_siswa_lulus', 'Is_siswa_lulus:') !!}
			{!! Form::text('is_siswa_lulus') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}