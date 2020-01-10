@if(!empty($catatansiswa))
	{!! Form::model($catatansiswa, ['route' => ['catatansiswa.update', $catatansiswa->id_catatan_siswa],'method' =>'patch'])!!}
@else 
	{!! Form::open(array('route' => 'catatansiswa.store')) !!}
	{!! Form::hidden('id_nilai_siswa', $nilaisiswa->id_nilai_siswa,['class' =>'form-control']) !!}
@endif
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-4">
		<div class="col-xs-8 form-control-label-ct rg-5-padding">
			<label for="asakit">Absensi Sakit</label>
		</div>
		{{-- form class --}}
		<div class="col-xs-4 nopaddings">
			<div class="form-group {!! $errors->has('absensi_sakit') ? 'has-error' : '' !!}">
				<div class="form-line">
					{!! Form::text('absensi_sakit', null,['id' => 'asakit', 'class' =>'form-control', 'placeholder' => 'Absen Karena Sakit']) !!}
				</div>
				{!! $errors->first('absensi_sakit', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
	{{-- form kolom --}}
	<div class="col-sm-4">
		<div class="col-xs-8 form-control-label-ct rg-5-padding">
			<label for="aijin">Absensi Ijin</label>
		</div>
		{{-- form class --}}
		<div class="col-xs-4 nopaddings">
			<div class="form-group {!! $errors->has('absensi_ijin') ? 'has-error' : '' !!}">
				<div class="form-line">
					{!! Form::text('absensi_ijin', null,['id' => 'aijin','class' =>'form-control', 'placeholder' => 'Absen Karena Ijin']) !!}
				</div>
				{!! $errors->first('absensi_ijin', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
		{{-- form kolom --}}
	<div class="col-sm-4">
		<div class="col-xs-8 form-control-label-ct rg-5-padding">
			<label for="ata">Absensi Tanpa Ket</label>
		</div>
		{{-- form class --}}
		<div class="col-xs-4 nopaddings">
			<div class="form-group">
				<div class="form-line">
					{!! Form::text('absensi_tanpa_keterangan', null,['id' => 'ata', 'class' =>'form-control', 'placeholder' => 'Absen Tanpa Keterangan']) !!}
				</div>
				{!! $errors->first('absensi_tanpa_keterangan', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6 nopaddings">
		<div class="col-xs-8 col-xs-6 form-control-label-ct rg-5-padding">
			<label for="tinggibdn">Tinggi Badan Siswa</label>
		</div>
		{{-- form class --}}
		<div class="col-xs-4 nopaddings">
			<div class="input-group {!! $errors->has('tinggi_badan') ? 'has-error' : '' !!}">
				<div class="form-line">
					{!! Form::text('tinggi_badan', null,['id' => 'tinggibdn','class' =>'form-control', 'placeholder' => 'Tinggi Badan Siswa Contoh: 180']) !!}
				</div>
				<span class="input-group-addon"> Cm</span>
				{!! $errors->first('tinggi_badan', '<p class="help-block">:message</p>') !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
	{{-- form kolom --}}
	<div class="col-sm-6 nopaddings">
		<div class="col-xs-8 col-xs-6 form-control-label-ct rg-5-padding">
			<label for="beratbdn">Berat Badan Siswa</label>
		</div>
		{{-- form class --}}
		<div class="col-xs-4 nopaddings">
			<div class="input-group {!! $errors->has('berat_badan') ? 'has-error' : '' !!}">
				<div class="form-line">
					{!! Form::text('berat_badan', null,['id' => 'beratbdn', 'class' =>'form-control', 'placeholder' => 'Berat Badan Contoh: 70kg']) !!}
				</div>
				<span class="input-group-addon"> Kg</span>
				{!! $errors->first('berat_badan', '<p class="help-block">:message</p>') !!}
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
			<div class="col-xs-4 col-xs-6 form-control-label-ct rg-5-padding">
				<label >Kesehatan Pendengaran</label>
			</div>
			{{-- form class --}}
			<div class="col-xs-8 nopaddings">
				<div class="form-group">
					<div class="form-line">
						{!! Form::textarea('kesehatan_pendengaran', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi kesehatan Pendengaran siswa']) !!}
					</div>
					{!! $errors->first('kesehatan_pendengaran', '<p class="help-block">:message</p>') !!}
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
			<div class="col-xs-4 col-xs-6 form-control-label-ct rg-5-padding">
				<label >Kesehatan Pengelihatan</label>
			</div>
			{{-- form class --}}
			<div class="col-xs-8 nopaddings">
				<div class="form-group">
					<div class="form-line">
						{!! Form::textarea('kesehatan_pengelihatan', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi kesehatan pengelihatan siswa']) !!}
					</div>
					{!! $errors->first('kesehatan_pengelihatan', '<p class="help-block">:message</p>') !!}
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
			<div class="col-xs-4 col-xs-6 form-control-label-ct rg-5-padding">
				<label >Kesehatan Gigi</label>
			</div>
			{{-- form class --}}
			<div class="col-xs-8 nopaddings">
				<div class="form-group">
					<div class="form-line">
						{!! Form::textarea('kesehatan_gigi', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi kesehatan gigi siswa']) !!}
					</div>
					{!! $errors->first('kesehatan_gigi', '<p class="help-block">:message</p>') !!}
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
			<div class="col-xs-4 col-xs-6 form-control-label-ct rg-5-padding">
				<label >Kesehatan Lainnya</label>
			</div>
			{{-- form class --}}
			<div class="col-xs-8 nopaddings">
				<div class="form-group">
					<div class="form-line">
						{!! Form::textarea('kesehatan_lainnya', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi kesehatan lainnya']) !!}
					</div>
					{!! $errors->first('kesehatan_lainnya', '<p class="help-block">:message</p>') !!}
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
			<div class="col-xs-4 col-xs-6 form-control-label-ct rg-5-padding">
				<label >Deskripsi Prestasi Akademik </label>
			</div>
			{{-- form class --}}
			<div class="col-xs-8 nopaddings">
				<div class="form-group">
					<div class="form-line">
						{!! Form::textarea('prestasi_akademik', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Deskripsi prestasi akademik siswa']) !!}
					</div>
					{!! $errors->first('prestasi_akademik', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
	</div>
{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}
{!! Form::close() !!}