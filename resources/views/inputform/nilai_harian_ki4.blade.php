{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_nilai_siswa', 'Id_nilai_siswa:') !!}
			{!! Form::text('id_nilai_siswa') !!}
		</li>
		<li>
			{!! Form::label('id_kompetensi_dasar', 'Id_kompetensi_dasar:') !!}
			{!! Form::text('id_kompetensi_dasar') !!}
		</li>
		<li>
			{!! Form::label('praktik_p1', 'Praktik_p1:') !!}
			{!! Form::text('praktik_p1') !!}
		</li>
		<li>
			{!! Form::label('praktik_p2', 'Praktik_p2:') !!}
			{!! Form::text('praktik_p2') !!}
		</li>
		<li>
			{!! Form::label('praktik_p3', 'Praktik_p3:') !!}
			{!! Form::text('praktik_p3') !!}
		</li>
		<li>
			{!! Form::label('praktik_p4', 'Praktik_p4:') !!}
			{!! Form::text('praktik_p4') !!}
		</li>
		<li>
			{!! Form::label('praktik_p5', 'Praktik_p5:') !!}
			{!! Form::text('praktik_p5') !!}
		</li>
		<li>
			{!! Form::label('praktik_max', 'Praktik_max:') !!}
			{!! Form::text('praktik_max') !!}
		</li>
		<li>
			{!! Form::label('produk_p1', 'Produk_p1:') !!}
			{!! Form::text('produk_p1') !!}
		</li>
		<li>
			{!! Form::label('produk_p2', 'Produk_p2:') !!}
			{!! Form::text('produk_p2') !!}
		</li>
		<li>
			{!! Form::label('produk_p3', 'Produk_p3:') !!}
			{!! Form::text('produk_p3') !!}
		</li>
		<li>
			{!! Form::label('produk_p4', 'Produk_p4:') !!}
			{!! Form::text('produk_p4') !!}
		</li>
		<li>
			{!! Form::label('produk_p5', 'Produk_p5:') !!}
			{!! Form::text('produk_p5') !!}
		</li>
		<li>
			{!! Form::label('produk_max', 'Produk_max:') !!}
			{!! Form::text('produk_max') !!}
		</li>
		<li>
			{!! Form::label('proyek_p1', 'Proyek_p1:') !!}
			{!! Form::text('proyek_p1') !!}
		</li>
		<li>
			{!! Form::label('proyek_p2', 'Proyek_p2:') !!}
			{!! Form::text('proyek_p2') !!}
		</li>
		<li>
			{!! Form::label('proyek_p3', 'Proyek_p3:') !!}
			{!! Form::text('proyek_p3') !!}
		</li>
		<li>
			{!! Form::label('proyek_p4', 'Proyek_p4:') !!}
			{!! Form::text('proyek_p4') !!}
		</li>
		<li>
			{!! Form::label('proyek_p5', 'Proyek_p5:') !!}
			{!! Form::text('proyek_p5') !!}
		</li>
		<li>
			{!! Form::label('proyek_max', 'Proyek_max:') !!}
			{!! Form::text('proyek_max') !!}
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