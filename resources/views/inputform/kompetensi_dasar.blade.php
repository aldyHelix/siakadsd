{{-- form baris --}}
{{-- ukuran --}}
<div class="row clearfix">
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				<select class="form-control show-tick">
					<option value="">-- Pilih Mata Pelajaran --</option>
					@foreach ($matapel as $item)
					<option value="{{$item->id_mata_pelajaran}}">{{$item->nama_mata_pelajaran}} (Kelas {{$item->kelas}})</option>    
					 @endforeach
				</select>
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
	{{-- form kolom --}}
	<div class="col-sm-6">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::select('kelompok_indikator',['' => 'Pilih Kelompok Indikator' ,'ki1' => 'KI 1', 'ki2' => 'KI 2', 'ki3' => 'KI 3', 'ki4' => 'KI 4'],'Pilih Kelompok Indikator',['class' => 'form-control show-tick']) !!}
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
			{!! Form::select('kelas',['' => 'Pilih Kelas' ,'1' => 'Kelas 1', '2' => 'Kelas 2', '3' => 'Kelas 3', '4' => 'Kelas 4', '5' => 'Kelas 5', '6' => 'Kelas 6'],'Pilih Kelas',['class' => 'form-control show-tick']) !!}
		</div>
	</div>
</div>
{{--END form kolom  --}}
{{-- form kolom --}}
<div class="col-sm-6">
	{{-- form class --}}
	<div class="form-group">
		<div class="form-line">
			{!! Form::select('semester',['' => 'Pilih Semester' ,'1' => 'Semester 1', '2' => 'Semester 2'],'Pilih Semester',['class' => 'form-control show-tick']) !!}
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
	<div class="col-sm-3">
		{{-- form class --}}
		<div class="form-group">
			<div class="form-line">
				{!! Form::text('no_indikator', null,['class' =>'form-control', 'placeholder' => 'nomor urut Indikator']) !!}
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
				{!! Form::textarea('keterangan_kompetensi_dasar', null,['rows' => '2', 'class' => 'form-control no-resize','placeholder' => 'Keterangan Kompetensi Dasar']) !!}
			</div>
		</div>
	</div>
	{{--END form kolom  --}}
</div>
{{-- END Form baris --}}
{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary']) !!}
