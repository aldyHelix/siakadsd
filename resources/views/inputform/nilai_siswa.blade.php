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
			{!! Form::label('tgl_raport', 'Tgl_raport:') !!}
			{!! Form::text('tgl_raport') !!}
		</li>
		<li>
			{!! Form::label('tgl_penerimaan_raport', 'Tgl_penerimaan_raport:') !!}
			{!! Form::text('tgl_penerimaan_raport') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}