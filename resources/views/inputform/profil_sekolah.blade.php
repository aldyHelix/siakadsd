{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_kepala_sekolah', 'Id_kepala_sekolah:') !!}
			{!! Form::text('id_kepala_sekolah') !!}
		</li>
		<li>
			{!! Form::label('nama_sekolah', 'Nama_sekolah:') !!}
			{!! Form::text('nama_sekolah') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('bentuk_pendidikan', 'Bentuk_pendidikan:') !!}
			{!! Form::text('bentuk_pendidikan') !!}
		</li>
		<li>
			{!! Form::label('status_kepemilikan', 'Status_kepemilikan:') !!}
			{!! Form::text('status_kepemilikan') !!}
		</li>
		<li>
			{!! Form::label('kurikulum', 'Kurikulum:') !!}
			{!! Form::text('kurikulum') !!}
		</li>
		<li>
			{!! Form::label('alamat_sekolah', 'Alamat_sekolah:') !!}
			{!! Form::text('alamat_sekolah') !!}
		</li>
		<li>
			{!! Form::label('rt', 'Rt:') !!}
			{!! Form::text('rt') !!}
		</li>
		<li>
			{!! Form::label('rw', 'Rw:') !!}
			{!! Form::text('rw') !!}
		</li>
		<li>
			{!! Form::label('kodepos', 'Kodepos:') !!}
			{!! Form::text('kodepos') !!}
		</li>
		<li>
			{!! Form::label('kelurahan', 'Kelurahan:') !!}
			{!! Form::text('kelurahan') !!}
		</li>
		<li>
			{!! Form::label('kecamatan', 'Kecamatan:') !!}
			{!! Form::text('kecamatan') !!}
		</li>
		<li>
			{!! Form::label('kab_kota', 'Kab_kota:') !!}
			{!! Form::text('kab_kota') !!}
		</li>
		<li>
			{!! Form::label('provinsi', 'Provinsi:') !!}
			{!! Form::text('provinsi') !!}
		</li>
		<li>
			{!! Form::label('negara', 'Negara:') !!}
			{!! Form::text('negara') !!}
		</li>
		<li>
			{!! Form::label('lat', 'Lat:') !!}
			{!! Form::text('lat') !!}
		</li>
		<li>
			{!! Form::label('long', 'Long:') !!}
			{!! Form::text('long') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}