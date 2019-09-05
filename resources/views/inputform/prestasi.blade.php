{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_siswa', 'Id_siswa:') !!}
			{!! Form::text('id_siswa') !!}
		</li>
		<li>
			{!! Form::label('nama_prestasi', 'Nama_prestasi:') !!}
			{!! Form::text('nama_prestasi') !!}
		</li>
		<li>
			{!! Form::label('saran_saran', 'Saran_saran:') !!}
			{!! Form::textarea('saran_saran') !!}
		</li>
		<li>
			{!! Form::label('tahun_prestasi', 'Tahun_prestasi:') !!}
			{!! Form::text('tahun_prestasi') !!}
		</li>
		<li>
			{!! Form::label('jenis_prestasi', 'Jenis_prestasi:') !!}
			{!! Form::text('jenis_prestasi') !!}
		</li>
		<li>
			{!! Form::label('penyelenggara', 'Penyelenggara:') !!}
			{!! Form::text('penyelenggara') !!}
		</li>
		<li>
			{!! Form::label('peringkat', 'Peringkat:') !!}
			{!! Form::text('peringkat') !!}
		</li>
		<li>
			{!! Form::label('foto_prestasi', 'Foto_prestasi:') !!}
			{!! Form::text('foto_prestasi') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}