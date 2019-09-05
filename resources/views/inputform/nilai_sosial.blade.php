{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_nilai_siswa', 'Id_nilai_siswa:') !!}
			{!! Form::text('id_nilai_siswa') !!}
		</li>
		<li>
			{!! Form::label('nama_nilai_sosial', 'Nama_nilai_sosial:') !!}
			{!! Form::text('nama_nilai_sosial') !!}
		</li>
		<li>
			{!! Form::label('jujur_sb', 'Jujur_sb:') !!}
			{!! Form::text('jujur_sb') !!}
		</li>
		<li>
			{!! Form::label('jujur_pb', 'Jujur_pb:') !!}
			{!! Form::text('jujur_pb') !!}
		</li>
		<li>
			{!! Form::label('disiplin_sb', 'Disiplin_sb:') !!}
			{!! Form::text('disiplin_sb') !!}
		</li>
		<li>
			{!! Form::label('disiplin_pb', 'Disiplin_pb:') !!}
			{!! Form::text('disiplin_pb') !!}
		</li>
		<li>
			{!! Form::label('tanggung_jawab_sb', 'Tanggung_jawab_sb:') !!}
			{!! Form::text('tanggung_jawab_sb') !!}
		</li>
		<li>
			{!! Form::label('tanggung_jawab_pb', 'Tanggung_jawab_pb:') !!}
			{!! Form::text('tanggung_jawab_pb') !!}
		</li>
		<li>
			{!! Form::label('santun_sb', 'Santun_sb:') !!}
			{!! Form::text('santun_sb') !!}
		</li>
		<li>
			{!! Form::label('santun_pb', 'Santun_pb:') !!}
			{!! Form::text('santun_pb') !!}
		</li>
		<li>
			{!! Form::label('peduli_sb', 'Peduli_sb:') !!}
			{!! Form::text('peduli_sb') !!}
		</li>
		<li>
			{!! Form::label('peduli_pb', 'Peduli_pb:') !!}
			{!! Form::text('peduli_pb') !!}
		</li>
		<li>
			{!! Form::label('percaya_diri_sb', 'Percaya_diri_sb:') !!}
			{!! Form::text('percaya_diri_sb') !!}
		</li>
		<li>
			{!! Form::label('percaya_diri_pb', 'Percaya_diri_pb:') !!}
			{!! Form::text('percaya_diri_pb') !!}
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