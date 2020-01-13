@php 
	$ki = $kd->kompetensi_dasar->kelompok_indikator;
	$noki = $kd->kompetensi_dasar->no_indikator;
@endphp
<div class="row no5paddings">
	<div class="col-md-12">
		{{$ki}}.{{$noki}} : {{$kd->kompetensi_dasar->keterangan_kompetensi_dasar}}
	</div>
	<!-- P1 -->		
	<div class="col-xs-12 nopaddings p1">
			<div class="col col-xs-2 nopaddings">
				<div class="form-control-label-ct">
					<label>Pelajaran 1</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p1lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p1lisan" class="form-control input-nopadding p1" name="dt[p1lisan]" value="{{$kd->p1lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p1tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p1tulis" class="form-control input-nopadding p1" name="dt[p1tulis]" value="{{$kd->p1tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p1tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p1tugas1" class="form-control input-nopadding p1" name="dt[p1tugas1]" value="{{$kd->p1tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p1tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p1tugas2" class="form-control input-nopadding p1" name="dt[p1tugas2]" value="{{$kd->p1tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p1rata-rata">RT</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p1rata-rata" class="form-control input-nopadding p1" name="dt[p1rata_rata]" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END P1 -->
		<!--P2 -->
		<div class="col-xs-12 nopaddings">
			<div class="col col-xs-2 nopaddings">
				<div class="form-control-label-ct">
					<label>Pelajaran 2</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p2lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p2lisan" class="form-control input-nopadding" name="dt[p2lisan]" value="{{$kd->p2lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p2tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p2tulis" class="form-control input-nopadding" name="dt[p2tulis]" value="{{$kd->p2tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p2tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p2tugas1" class="form-control input-nopadding" name="dt[p2tugas1]" value="{{$kd->p2tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p2tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p2tugas2" class="form-control input-nopadding" name="dt[p2tugas2]" value="{{$kd->p2tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p2rata-rata">RT</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p2rata-rata" class="form-control input-nopadding p1" name="dt[p2rata_rata]" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- END P2-->
	<!-- P3 -->
	<div class="col-xs-12 nopaddings">
			<div class="col col-xs-2 nopaddings">
				<div class="form-control-label-ct">
					<label>Pelajaran 3</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p3lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p3lisan" class="form-control input-nopadding" name="dt[p3lisan]" value="{{$kd->p3lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p3tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p3tulis" class="form-control input-nopadding" name="dt[p3tulis]" value="{{$kd->p3tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p3tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p3tugas1" class="form-control input-nopadding" name="dt[p3tugas1]" value="{{$kd->p3tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p3tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p3tugas2" class="form-control input-nopadding" name="dt[p3tugas2]" value="{{$kd->p3tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p3rata-rata">RT</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p3rata-rata" class="form-control input-nopadding p1" name="dt[p3rata_rata]" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END P3 -->
		<!-- P4 -->
	<div class="col-xs-12 nopaddings">
			<div class="col col-xs-2 nopaddings">
				<div class="form-control-label-ct">
					<label>Pelajaran 4</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p4lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p4lisan" class="form-control input-nopadding" name="dt[p4lisan]" value="{{$kd->p4lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p4tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p4tulis" class="form-control input-nopadding" name="dt[p4tulis]" value="{{$kd->p4tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p4tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p4tugas1" class="form-control input-nopadding" name="dt[p4tugas1]" value="{{$kd->p4tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p4tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p4tugas2" class="form-control input-nopadding" name="dt[p4tugas2]" value="{{$kd->p4tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p4rata-rata">RT</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p4rata-rata" class="form-control input-nopadding p1" name="dt[p4rata_rata]" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END P4 -->
		<!-- P5 -->
	<div class="col-xs-12 nopaddings">
			<div class="col col-xs-2 nopaddings">
				<div class="form-control-label-ct">
					<label>Pelajaran 5</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p5lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p5lisan" class="form-control input-nopadding" name="dt[p5lisan]" value="{{$kd->p5lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p5tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p5tulis" class="form-control input-nopadding" name="dt[p5tulis]" value="{{$kd->p5tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p5tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p5tugas1" class="form-control input-nopadding" name="dt[p5tugas1]" value="{{$kd->p5tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p5tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p5tugas2" class="form-control input-nopadding" name="dt[p5tugas2]" value="{{$kd->p5tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}p5rata-rata">RT</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}p5rata-rata" class="form-control input-nopadding p1" name="dt[p5rata_rata]" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END P5 -->
	<!-- Nilai -->
	<div class="col-xs-12 nopaddings">
			<div class="col col-xs-2 nopaddings">
				<div class="form-control-label-ct">
					<label>Nilai</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}nph">NPH</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}nph" class="form-control input-nopadding" name="dt[NPH]" value="" readonly>
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="npas1">NPAS 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}npas1" class="form-control input-nopadding" name="dt[NPAS1]" value="{{$kd->NPAS1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="npas2">NPAS 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}npas2" class="form-control input-nopadding" name="dt[NPAS2]" value="{{$kd->NPAS2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="npas2">Nil KD</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}nilaikd" class="form-control input-nopadding" name="dt[nilai_kd]" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END P5 -->
		<div class="col-xs-12 nopaddings">
            <h2 class="card-inside-title">Deskripsi</h2>
            <div class="col-sm-12 nopaddings">
                <div class="form-group nomarginbot">
                    <div class="form-line">
                        <textarea rows="2" class="form-control no-resize" placeholder="Please type what you want..." name="dt[deskripsi_raport]">{{$kd->deskripsi_raport}}</textarea>
                    </div>
                </div>
            </div>
		</div>
	{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}	
</div>
