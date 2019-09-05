{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_nilai_siswa', 'Id_nilai_siswa:') !!}
			{!! Form::text('id_nilai_siswa') !!}
		</li>
		<li>
			{!! Form::label('absensi_sakit', 'Absensi_sakit:') !!}
			{!! Form::text('absensi_sakit') !!}
		</li>
		<li>
			{!! Form::label('absensi_ijin', 'Absensi_ijin:') !!}
			{!! Form::text('absensi_ijin') !!}
		</li>
		<li>
			{!! Form::label('absensi_tanpa_keterangan', 'Absensi_tanpa_keterangan:') !!}
			{!! Form::text('absensi_tanpa_keterangan') !!}
		</li>
		<li>
			{!! Form::label('tinggi_badan', 'Tinggi_badan:') !!}
			{!! Form::text('tinggi_badan') !!}
		</li>
		<li>
			{!! Form::label('berat_badan', 'Berat_badan:') !!}
			{!! Form::text('berat_badan') !!}
		</li>
		<li>
			{!! Form::label('kesehatan_pendengaran', 'Kesehatan_pendengaran:') !!}
			{!! Form::textarea('kesehatan_pendengaran') !!}
		</li>
		<li>
			{!! Form::label('kesehatan_pengelihatan', 'Kesehatan_pengelihatan:') !!}
			{!! Form::textarea('kesehatan_pengelihatan') !!}
		</li>
		<li>
			{!! Form::label('kesehatan_gigi', 'Kesehatan_gigi:') !!}
			{!! Form::textarea('kesehatan_gigi') !!}
		</li>
		<li>
			{!! Form::label('kesehatan_lainnya', 'Kesehatan_lainnya:') !!}
			{!! Form::textarea('kesehatan_lainnya') !!}
		</li>
		<li>
			{!! Form::label('prestasi_akademik', 'Prestasi_akademik:') !!}
			{!! Form::textarea('prestasi_akademik') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}