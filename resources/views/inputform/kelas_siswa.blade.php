{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_siswa', 'Id_siswa:') !!}
			{!! Form::text('id_siswa') !!}
		</li>
		<li>
			{!! Form::label('id_kelas', 'Id_kelas:') !!}
			{!! Form::text('id_kelas') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}