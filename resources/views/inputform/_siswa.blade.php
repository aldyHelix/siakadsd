<h2 class="card-inside-title">Data Siswa Utama</h2>
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_lengkap', null,['class' =>'form-control', 'placeholder' => 'Nama Lengkap']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::select('jenis_kelamin',['' => 'Pilih Jenis Kelamin' ,'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'],'Pilih Jenis Kelamin',['class' => 'form-control show-tick']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('INDUK', null,['class' =>'form-control', 'placeholder' => 'No INDUK']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('NISN', null,['class' =>'form-control', 'placeholder' => 'No NISN']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
	<div class="row clearfix">
		{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('NIK', null,['class' =>'form-control', 'placeholder' => 'No NIK']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('KITAS', null,['class' =>'form-control', 'placeholder' => 'No KITAS']) !!}
				</div>
			</div>
		</div>
		{{--END form kolom  --}}
	</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
		{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('tempat_lahir', null,['class' =>'form-control', 'placeholder' => 'Tempat Lahir']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::date('tgl_lahir', null,['class' => 'datepicker form-control', 'placeholder' => 'Tanggal Lahir']) !!}
				</div>
			</div>
		</div>
		{{--END form kolom  --}}
	</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('no_reg_akta_lahir', null,['class' =>'form-control', 'placeholder' => 'No. Akta']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('agama', null,['class' => 'form-control', 'placeholder' => 'Agama']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('kepercayaan', null,['class' =>'form-control', 'placeholder' => 'Kepercayaan']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('kewarganegaraan', 'Indonesia',['class' => 'form-control', 'placeholder' => 'Kewarganegaraan']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}


{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('berkebutuhan_khusus', null,['class' =>'form-control', 'placeholder' => 'Berkebutuhan Khusus']) !!}
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-12">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::textarea('alamat_jalan', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Alamat Rumah']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('rt', null,['class' =>'form-control', 'placeholder' => 'RT']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
		<div class="col-sm-4">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('rw', null,['class' =>'form-control', 'placeholder' => 'RW']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_dusun', null,['class' =>'form-control', 'placeholder' => 'Nama Dusun']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_kelurahan_desa', null,['class' =>'form-control', 'placeholder' => 'Kelurahan']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
		<div class="col-sm-4">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('kecamatan', null,['class' =>'form-control', 'placeholder' => 'Kecamatan']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('kota_kab', null,['class' =>'form-control', 'placeholder' => 'Kota atau Kabupaten']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('kode_pos', null,['class' =>'form-control', 'placeholder' => 'Kode Pos']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
		<div class="col-sm-4">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('status_tempat_tinggal', null,['class' =>'form-control', 'placeholder' => 'Status Tempat Tinggal']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('moda_transportasi', null,['class' =>'form-control', 'placeholder' => 'Transportasi ke Sekolah']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- untuk Map pont --}}
			{{-- {!! Form::label('lat', 'Lat:') !!}
			{!! Form::text('lat') !!}

			{!! Form::label('long', 'Long:') !!}
			{!! Form::text('long') !!} --}}
{{-- end Map --}}

		<h2 class="card-inside-title">Kartu Keluarga Sejahtera dan Kartu Indonesia Pintar</h2>
		<small>Data dibawah ini dapat diisi jika KKS/KPS/PKH/KIP</small>

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-12">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('no_kartu_keluarga_sejahtera', null,['class' =>'form-control', 'placeholder' => 'No Kartu Keluarga Sejahtera']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('anak_ke', null,['class' =>'form-control', 'placeholder' => 'Anak Ke']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
		<div class="col-sm-4">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::select('is_kps_pkh',['0' => 'Tidak Ada', '1' => 'Ada'],null,['class' => 'form-control show-tick', 'placeholder' => 'KPS/PKH']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::select('is_kip',['0' => 'Tidak Ada', '1' => 'Ada'],null,['class' => 'form-control show-tick', 'placeholder' => 'KIP']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_kip', null,['class' =>'form-control', 'placeholder' => 'Nama KIP']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
		<div class="col-sm-4">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('no_kps_pkh', null,['class' =>'form-control', 'placeholder' => 'Nomor KPS / PKH']) !!}
				</div>
			</div>
		</div>
			{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('no_kip', null,['class' =>'form-control', 'placeholder' => 'Nomor KIP']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

<div class="row clearfix">
	{{--END form kolom  --}}
	{{-- form kolom --}}
<div class="col-sm-12">
	{{-- form class --}}
	<div class="form-group">
		<div class="form-line">
			{!! Form::textarea('alasan_layak_kip', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Alasan Layak Menerima']) !!}
		</div>
	</div>
</div>
{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

<h2 class="card-inside-title">Data Ayah</h2>

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_ayah', null,['class' =>'form-control', 'placeholder' => 'Nama Ayah Sesuai KK']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nik_ayah', null,['class' => 'form-control', 'placeholder' => 'NIK Ayah sesuai KK']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('tempat_lahir_ayah', null,['class' =>'form-control', 'placeholder' => 'Tempat Lahir Ayah']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::date('tgl_lahir_ayah', null,['class' => 'form-control', 'placeholder' => 'Tanggal Lahir Ayah']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('pendidikan_ayah', null,['class' =>'form-control', 'placeholder' => 'Pendidikan Terakhir Ayah']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('pekerjaan_ayah', null,['class' => 'form-control', 'placeholder' => 'Pekerjaan Ayah']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('penghasilan_ayah', null,['class' =>'form-control', 'placeholder' => 'Penghasilan Ayah per Bulan']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('berkebutuhan_khusus_ayah', null,['class' => 'form-control', 'placeholder' => 'Berkebutuhan Khusus Ayah']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

		<h2 class="card-inside-title">Data Ibu</h2>

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_ibu', null,['class' =>'form-control', 'placeholder' => 'Nama Ibu Sesuai KK']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nik_ibu', null,['class' => 'form-control', 'placeholder' => 'NIK Ibu sesuai KK']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('tempat_lahir_ibu', null,['class' =>'form-control', 'placeholder' => 'Tempat Lahir Ibu']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::date('tgl_lahir_ibu', null,['class' => 'form-control', 'placeholder' => 'Tanggal Lahir Ibu']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('pendidikan_ibu', null,['class' =>'form-control', 'placeholder' => 'Pendidikan Terakhir Ibu']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('pekerjaan_ibu', null,['class' => 'form-control', 'placeholder' => 'Pekerjaan Ibu']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('penghasilan_ibu', null,['class' =>'form-control', 'placeholder' => 'Penghasilan Ibu per Bulan']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('berkebutuhan_khusus_ibu', null,['class' => 'form-control', 'placeholder' => 'Berkebutuhan Khusus Ibu']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}


		<h2 class="card-inside-title">Data Wali</h2>
		<small>Data dapat di kosongkan</small>

{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nama_wali', null,['class' =>'form-control', 'placeholder' => 'Nama Wali Sesuai KK']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('nik_wali', null,['class' => 'form-control', 'placeholder' => 'NIK Wali sesuai KK']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('tempat_lahir_wali', null,['class' =>'form-control', 'placeholder' => 'Tempat Lahir Wali']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::date('tgl_lahir_wali', null,['class' => 'form-control', 'placeholder' => 'Tanggal Lahir Wali']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('pendidikan_wali', null,['class' =>'form-control', 'placeholder' => 'Pendidikan Terakhir Wali']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('pekerjaan_wali', null,['class' => 'form-control', 'placeholder' => 'Pekerjaan Wali']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('penghasilan_wali', null,['class' =>'form-control', 'placeholder' => 'Penghasilan Wali per Bulan']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('berkebutuhan_khusus_wali', null,['class' => 'form-control', 'placeholder' => 'Berkebutuhan Khusus Wali']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}


		<h2 class="card-inside-title">Kontak Keluarga</h2>
		{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('kontak_no_tlep_1', null,['class' =>'form-control', 'placeholder' => 'Nomer Telephone Aktif']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('kontak_no_tlep_2', null,['class' => 'form-control', 'placeholder' => 'Nomer Telephone Aktif Alternatif']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('no_hp_1', null,['class' =>'form-control', 'placeholder' => 'Nomer Handphone Aktif']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('no_hp_2', null,['class' => 'form-control', 'placeholder' => 'Nomer Handphone Aktif Alternatif']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('email_1', null,['class' =>'form-control', 'placeholder' => 'Email Aktif']) !!}
			</div>
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('email_2', null,['class' => 'form-control', 'placeholder' => 'Email Aktif alternatif']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

		<h2 class="card-inside-title">Foto Siswa yang bersangkutan</h2>
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::file('foto_siswa', null,['class' => 'form-control']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}

{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}

