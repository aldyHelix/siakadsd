<h2 class="card-inside-title">Data Siswa Utama</h2>
{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group {!! $errors->has('nama_lengkap') ? 'has-error' : '' !!}">
			<div class="form-line">
				{!! Form::text('nama_lengkap', null,['class' =>'form-control', 'placeholder' => 'Nama Lengkap']) !!}
			</div>
			{!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('INDUK', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('NISN', '<p class="help-block">:message</p>') !!}
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
				{!! $errors->first('NIK', '<p class="help-block">:message</p>') !!}
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
				{!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
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
				{!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
			{{--END form kolom  --}}
			{{-- form kolom --}}
		<div class="col-sm-6">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::date('tgl_lahir', null,['class' => 'datepicker form-control', 'placeholder' => 'Tanggal Lahir', 'id'=>'datetimepicker']) !!}
				</div>
				{!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('no_reg_akta_lahir', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('kepercayaan', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('kewarganegaraan', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('berkebutuhan_khusus', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('alamat_jalan', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
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
				{!! $errors->first('rw', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nama_dusun', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nama_kelurahan_desa', '<p class="help-block">:message</p>') !!}
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
				{!! $errors->first('kecamatan', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('kota_kab', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('kode_pos', '<p class="help-block">:message</p>') !!}
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
				{!! $errors->first('status_tempat_tinggal', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('moda_transportasi', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('no_kartu_keluarga_sejahtera', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('anak_ke', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
		<div class="col-sm-4">
			{{-- form class --}}
			<div class="form-group">
				<div class="form-line">
					{!! Form::select('is_kps_pkh',['0' => 'KPS/PKH Tidak Ada', '1' => 'KPS/PKH Ada'],null,['class' => 'form-control show-tick']) !!}
				</div>
				{!! $errors->first('is_kps_pkh', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
			{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-4">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::select('is_kip',['0' => 'KIP Tidak Ada', '1' => 'KIP Ada'],null,['class' => 'form-control show-tick']) !!}
			</div>
			{!! $errors->first('is_kip', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nama_kip', '<p class="help-block">:message</p>') !!}
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
				{!! $errors->first('no_kps_pkh', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('no_kip', '<p class="help-block">:message</p>') !!}
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
		{!! $errors->first('alasan_layak_kip', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nama_ayah', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nik_ayah', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('tempat_lahir_ayah', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::date('tgl_lahir_ayah', null,['class' => 'form-control', 'placeholder' => 'Tanggal Lahir Ayah', 'id'=>'datetimepicker']) !!}
			</div>
			{!! $errors->first('tgl_lahir_ayah', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('pendidikan_ayah', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('pekerjaan_ayah', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('penghasilan_ayah', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('berkebutuhan_khusus_ayah', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nama_ibu', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nik_ibu', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('tempat_lahir_ibu', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::date('tgl_lahir_ibu', null,['class' => 'form-control', 'placeholder' => 'Tanggal Lahir Ibu', 'id'=>'datetimepicker']) !!}
			</div>
			{!! $errors->first('tgl_lahir_ibu', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('pendidikan_ibu', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('pekerjaan_ibu', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('penghasilan_ibu', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('berkebutuhan_khusus_ibu', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nama_wali', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('nik_wali', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('tempat_lahir_wali', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
		{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::date('tgl_lahir_wali', null,['class' => 'form-control', 'placeholder' => 'Tanggal Lahir Wali', 'id'=>'datetimepicker']) !!}
			</div>
			{!! $errors->first('tgl_lahir_wali', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('pendidikan_wali', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('pekerjaan_wali', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('penghasilan_wali', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('berkebutuhan_khusus_wali', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('kontak_no_tlep_1', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('kontak_no_tlep_2', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('no_hp_1', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('no_hp_2', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('email_1', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('email_2', '<p class="help-block">:message</p>') !!}
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
			{!! $errors->first('foto_siswa', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	{{--END form kolom  --}}
	@if (isset($model)&& $model->foto_siswa !== '')
	<div class="col-sm-6 col-md-3">
		<p>Foto Siswa</p>
		<div class="thumbnail">
		<img src="{{ url('/img/' . $model->foto_siswa) }}">
		</div>
	</div>
	@endif
</div>
{{-- END Form baris --}}

{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}

