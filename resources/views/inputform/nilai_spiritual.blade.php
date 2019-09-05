{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_nilai_siswa', 'Id_nilai_siswa:') !!}
			{!! Form::text('id_nilai_siswa') !!}
		</li>
		<li>
			{!! Form::label('nama_nilai_spiritual', 'Nama_nilai_spiritual:') !!}
			{!! Form::text('nama_nilai_spiritual') !!}
		</li>
		<li>
			{!! Form::label('ketaatan_ibadah_sb', 'Ketaatan_ibadah_sb:') !!}
			{!! Form::text('ketaatan_ibadah_sb') !!}
		</li>
		<li>
			{!! Form::label('ketaatan_ibadah_pb', 'Ketaatan_ibadah_pb:') !!}
			{!! Form::text('ketaatan_ibadah_pb') !!}
		</li>
		<li>
			{!! Form::label('perilaku_syukur_sb', 'Perilaku_syukur_sb:') !!}
			{!! Form::text('perilaku_syukur_sb') !!}
		</li>
		<li>
			{!! Form::label('perilaku_syukur_pb', 'Perilaku_syukur_pb:') !!}
			{!! Form::text('perilaku_syukur_pb') !!}
		</li>
		<li>
			{!! Form::label('berdoa_ses_seb_sb', 'Berdoa_ses_seb_sb:') !!}
			{!! Form::text('berdoa_ses_seb_sb') !!}
		</li>
		<li>
			{!! Form::label('berdoa_ses_seb_pb', 'Berdoa_ses_seb_pb:') !!}
			{!! Form::text('berdoa_ses_seb_pb') !!}
		</li>
		<li>
			{!! Form::label('toleransi_beribadah_sb', 'Toleransi_beribadah_sb:') !!}
			{!! Form::text('toleransi_beribadah_sb') !!}
		</li>
		<li>
			{!! Form::label('toleransi_beribadah_pb', 'Toleransi_beribadah_pb:') !!}
			{!! Form::text('toleransi_beribadah_pb') !!}
		</li>
		<li>
			{!! Form::label('deskripsi_raport', 'Deskripsi_raport:') !!}
			{!! Form::textarea('deskripsi_raport') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}