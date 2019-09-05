{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('p1lisan', 'P1lisan:') !!}
			{!! Form::text('p1lisan') !!}
		</li>
		<li>
			{!! Form::label('p1tulis', 'P1tulis:') !!}
			{!! Form::text('p1tulis') !!}
		</li>
		<li>
			{!! Form::label('p1tugas1', 'P1tugas1:') !!}
			{!! Form::text('p1tugas1') !!}
		</li>
		<li>
			{!! Form::label('p1tugas2', 'P1tugas2:') !!}
			{!! Form::text('p1tugas2') !!}
		</li>
		<li>
			{!! Form::label('p1rata_rata', 'P1rata_rata:') !!}
			{!! Form::text('p1rata_rata') !!}
		</li>
		<li>
			{!! Form::label('p2lisan', 'P2lisan:') !!}
			{!! Form::text('p2lisan') !!}
		</li>
		<li>
			{!! Form::label('p2tulis', 'P2tulis:') !!}
			{!! Form::text('p2tulis') !!}
		</li>
		<li>
			{!! Form::label('p2tugas1', 'P2tugas1:') !!}
			{!! Form::text('p2tugas1') !!}
		</li>
		<li>
			{!! Form::label('p2tugas2', 'P2tugas2:') !!}
			{!! Form::text('p2tugas2') !!}
		</li>
		<li>
			{!! Form::label('p2rata_rata', 'P2rata_rata:') !!}
			{!! Form::text('p2rata_rata') !!}
		</li>
		<li>
			{!! Form::label('p3lisan', 'P3lisan:') !!}
			{!! Form::text('p3lisan') !!}
		</li>
		<li>
			{!! Form::label('p3tulis', 'P3tulis:') !!}
			{!! Form::text('p3tulis') !!}
		</li>
		<li>
			{!! Form::label('p3tugas1', 'P3tugas1:') !!}
			{!! Form::text('p3tugas1') !!}
		</li>
		<li>
			{!! Form::label('p3tugas2', 'P3tugas2:') !!}
			{!! Form::text('p3tugas2') !!}
		</li>
		<li>
			{!! Form::label('p3rata_rata', 'P3rata_rata:') !!}
			{!! Form::text('p3rata_rata') !!}
		</li>
		<li>
			{!! Form::label('p4lisan', 'P4lisan:') !!}
			{!! Form::text('p4lisan') !!}
		</li>
		<li>
			{!! Form::label('p4tulis', 'P4tulis:') !!}
			{!! Form::text('p4tulis') !!}
		</li>
		<li>
			{!! Form::label('p4tugas1', 'P4tugas1:') !!}
			{!! Form::text('p4tugas1') !!}
		</li>
		<li>
			{!! Form::label('p4tugas2', 'P4tugas2:') !!}
			{!! Form::text('p4tugas2') !!}
		</li>
		<li>
			{!! Form::label('p4rata_rata', 'P4rata_rata:') !!}
			{!! Form::text('p4rata_rata') !!}
		</li>
		<li>
			{!! Form::label('p5lisan', 'P5lisan:') !!}
			{!! Form::text('p5lisan') !!}
		</li>
		<li>
			{!! Form::label('p5tulis', 'P5tulis:') !!}
			{!! Form::text('p5tulis') !!}
		</li>
		<li>
			{!! Form::label('p5tugas1', 'P5tugas1:') !!}
			{!! Form::text('p5tugas1') !!}
		</li>
		<li>
			{!! Form::label('p5tugas2', 'P5tugas2:') !!}
			{!! Form::text('p5tugas2') !!}
		</li>
		<li>
			{!! Form::label('p5rata_rata', 'P5rata_rata:') !!}
			{!! Form::text('p5rata_rata') !!}
		</li>
		<li>
			{!! Form::label('NPH', 'NPH:') !!}
			{!! Form::text('NPH') !!}
		</li>
		<li>
			{!! Form::label('NPAS1', 'NPAS1:') !!}
			{!! Form::text('NPAS1') !!}
		</li>
		<li>
			{!! Form::label('NPAS2', 'NPAS2:') !!}
			{!! Form::text('NPAS2') !!}
		</li>
		<li>
			{!! Form::label('nilai_kd', 'Nilai_kd:') !!}
			{!! Form::text('nilai_kd') !!}
		</li>
		<li>
			{!! Form::label('deskripsi', 'Deskripsi:') !!}
			{!! Form::textarea('deskripsi') !!}
		</li>
		<li>
			{!! Form::label('id_nilai_siswa', 'Id_nilai_siswa:') !!}
			{!! Form::text('id_nilai_siswa') !!}
		</li>
		<li>
			{!! Form::label('id_kompetensi_dasar', 'Id_kompetensi_dasar:') !!}
			{!! Form::text('id_kompetensi_dasar') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}