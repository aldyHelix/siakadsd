
	<ul>
		<li>
			{!! Form::label('id_mapel', 'Id_mapel:') !!}
			{!! Form::text('id_mapel') !!}
		</li>
		<li>
			{!! Form::label('kelompok_indikator', 'Kelompok_indikator:') !!}
			{!! Form::text('kelompok_indikator') !!}
		</li>
		<li>
			{!! Form::label('no_indikator', 'No_indikator:') !!}
			{!! Form::text('no_indikator') !!}
		</li>
		<li>
			{!! Form::label('keterangan_kompetensi_dasar', 'Keterangan_kompetensi_dasar:') !!}
			{!! Form::textarea('keterangan_kompetensi_dasar') !!}
		</li>
		<li>
			{!! Form::label('kelas', 'Kelas:') !!}
			{!! Form::text('kelas') !!}
		</li>
		<li>
			{!! Form::label('semester', 'Semester:') !!}
			{!! Form::text('semester') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
