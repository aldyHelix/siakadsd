
<div class="row no5paddings">
	<div class="col-md-12">
		{{$kd->kompetensi_dasar->kelompok_indikator}}/{{$kd->kompetensi_dasar->no_indikator}}. {{$kd->kompetensi_dasar->keterangan_kompetensi_dasar}}
	</div>
	<!-- P1 -->		
	<div class="col-xs-12 nopaddings">
			<div class="col col-xs-2 nopaddings">
				<div class="form-control-label-ct">
					<label>Pelajaran 1</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1lisan" class="form-control input-nopadding p1" name="p1lisan" value="{{$kd->p1lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tulis" class="form-control input-nopadding p1" name="p1tulis" value="{{$kd->p1tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tugas1" class="form-control input-nopadding p1" name="p1tugas1" value="{{$kd->p1tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tugas2" class="form-control input-nopadding p1" name="p1tugas2" value="{{$kd->p1tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1ratarata">Rata - Rata</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1ratarata" class="form-control input-nopadding p1has" name="p1rata_rata" value="{{$kd->p1rata_rata}}">
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
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2lisan" class="form-control input-nopadding" name="p2lisan" value="{{$kd->p2lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2tulis" class="form-control input-nopadding" name="p2tulis" value="{{$kd->p2tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2tugas1" class="form-control input-nopadding" name="p2tugas1" value="{{$kd->p2tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2tugas2" class="form-control input-nopadding" name="p2tugas2" value="{{$kd->p2tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2ratarata">Rata - Rata</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p2ratarata" class="form-control input-nopadding" name="p2rata_rata" value="{{$kd->p2rata_rata}}">
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
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3lisan" class="form-control input-nopadding" name="p3lisan" value="{{$kd->p3lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3tulis" class="form-control input-nopadding" name="p3tulis" value="{{$kd->p3tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3tugas1" class="form-control input-nopadding" name="p3tugas1" value="{{$kd->p3tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3tugas2" class="form-control input-nopadding" name="p3tugas2" value="{{$kd->p3tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3ratarata">Rata - Rata</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p3ratarata" class="form-control input-nopadding" name="p3rata_rata" value="{{$kd->p3rata_rata}}">
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
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4lisan" class="form-control input-nopadding" name="p4lisan" value="{{$kd->p4lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4tulis" class="form-control input-nopadding" name="p4tulis" value="{{$kd->p4tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4tugas1" class="form-control input-nopadding" name="p4tugas1" value="{{$kd->p4tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4tugas2" class="form-control input-nopadding" name="p4tugas2" value="{{$kd->p4tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4ratarata">Rata - Rata</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p4ratarata" class="form-control input-nopadding" name="p4rata_rata" value="{{$kd->p4rata_rata}}">
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
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5lisan">Lisan</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5lisan" class="form-control input-nopadding" name="p5lisan" value="{{$kd->p5lisan}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5tulis">Tulis</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5tulis" class="form-control input-nopadding" name="p5tulis" value="{{$kd->p5tulis}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5tugas1">Tugas 1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5tugas1" class="form-control input-nopadding" name="p5tugas1" value="{{$kd->p5tugas1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5tugas2">Tugas 2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5tugas2" class="form-control input-nopadding" name="p5tugas2" value="{{$kd->p5tugas2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5ratarata">Rata - Rata</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p5ratarata" class="form-control input-nopadding" name="p5rata_rata" value="{{$kd->p5rata_rata}}">
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
					<label for="nph">NPH</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="nph" class="form-control input-nopadding"name="NPH" value="{{$kd->NPH}}">
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
							<input type="text" id="npas2" class="form-control input-nopadding" name="NPAS1" value="{{$kd->NPAS1}}">
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
							<input type="text" id="npas2" class="form-control input-nopadding" name="NPAS2" value="{{$kd->NPAS2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="nilaikd">Nilai KD</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group nomarginbot">
						<div class="form-line">
							<input type="text" id="nilaikd" class="form-control input-nopadding" name="nilai_kd" value="{{$kd->nilai_kd}}">
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
                        <textarea rows="2" class="form-control no-resize" placeholder="Please type what you want..." name="deskripsi_raport">{{$kd->deskripsi_raport}}</textarea>
                    </div>
                </div>
            </div>
		</div>
	{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}	
</div>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript">
	$(document).ready(function(){
		$(".p1").change(function(){
			var p1lisan = $("#{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1lisan").val();
			var p1tulis = $("#{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tulis").val();
			var p1tugas1 = $("#{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tugas1").val();
			var p1tugas2 = $("#{{$kd->kompetensi_dasar->kelompok_indikator}}{{$kd->kompetensi_dasar->no_indikator}}p1tugas2").val();

			var p1ratarata = 0;
			p1ratarata = (p1lisan + p1tulis + p1tugas1 + p1tugas2) / 4;
			console.log(p1ratarata);
			$(".p1has").val(p1ratarata);
		});
	});
</script>
