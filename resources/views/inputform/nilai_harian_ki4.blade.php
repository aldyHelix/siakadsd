@php 
	$ki = $kd->kompetensi_dasar->kelompok_indikator;
	$noki = $kd->kompetensi_dasar->no_indikator;
@endphp
<div class="row no5paddings">
	<div class="col-md-12">
			{{$ki}}.{{$noki}} : {{$kd->kompetensi_dasar->keterangan_kompetensi_dasar}}
	</div>
	<!-- P1 -->		
	<div class="col-xs-12 nopaddings">
			<div class="col col-xs-12 nopaddings">
				<div class="form-control-label-ct">
					<label>Praktek</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}praktikp1">P1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}praktikp1" name="dt[praktik_p1]" class="form-control" value="{{$kd->praktik_p1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}praktikp2">P2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}praktikp2" name="dt[praktik_p2]" class="form-control" value="{{$kd->praktik_p2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}praktikp3">P3</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}praktikp3" name="dt[praktik_p3]" class="form-control" value="{{$kd->praktik_p3}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}praktikp4">P4</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}praktikp4" name="dt[praktik_p4]" class="form-control" value="{{$kd->praktik_p4}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}praktikp5">P5</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}praktikp5" name="dt[praktik_p5]" class="form-control" value="{{$kd->praktik_p5}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}praktikmax">MAX</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}praktikmax" name="dt[praktik_max]" class="form-control" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END P1 -->
		<!--P2 -->
		<div class="col-xs-12 nopaddings">
			<div class="col col-xs-12 nopaddings">
				<div class="form-control-label-ct">
					<label>Produk</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}produkp1">P1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}produkp1" name="dt[produk_p1]" class="form-control" value="{{$kd->produk_p1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}produkp2">P2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}produkp2"  name="dt[produk_p2]" class="form-control" value="{{$kd->produk_p2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}produkp3">P3</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}produkp3"  name="dt[produk_p3]" class="form-control" value="{{$kd->produk_p3}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}produkp4">P4</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}produkp4"  name="dt[produk_p4]" class="form-control" value="{{$kd->produk_p4}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}produkp5">P5</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}produkp5"  name="dt[produk_p5]" class="form-control" value="{{$kd->produk_p5}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}produkmax">MAX</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}produkmax"  name="dt[produk_max]" class="form-control" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- END P2-->
	<!-- P3 -->
	<div class="col-xs-12 nopaddings">
			<div class="col col-xs-12 nopaddings">
				<div class="form-control-label-ct">
					<label>Proyek</label>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}proyekp1">P1</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}proyekp1"  name="dt[proyek_p1]"  class="form-control" value="{{$kd->proyek_p1}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}proyekp2">P2</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}proyekp2" name="dt[proyek_p2]" class="form-control" value="{{$kd->proyek_p2}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}proyekp3">P3</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}proyekp3"  name="dt[proyek_p3]" class="form-control" value="{{$kd->proyek_p3}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}proyekp4">P4</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}proyekp4"  name="dt[proyek_p4]" class="form-control" value="{{$kd->proyek_p4}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}proyekp5">P5</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}proyekp5"  name="dt[proyek_p5]" class="form-control" value="{{$kd->proyek_p5}}">
						</div>
					</div>
				</div>
			</div>
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}proyekmax">MAX</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}proyekmax"  name="dt[proyek_max]" class="form-control" value="" readonly> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col col-xs-2 nopaddings">
				<div class="col-xs-8 form-control-label-ct rg-5-padding">
					<label for="{{$ki}}{{$noki}}rata-rata">Rata Rata</label>
				</div>
				<div class="col-xs-4 nopaddings">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="{{$ki}}{{$noki}}rata-rata"  name="dt[rata_rata]" class="form-control" value="" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END P3 -->
		<div class="col-xs-12">
            <h2 class="card-inside-title">Deskripsi</h2>
            <div class="col-sm-12 nopaddings">
                <div class="form-group">
                    <div class="form-line">
                        <textarea rows="2" class="form-control no-resize" name="dt[deskripsi_raport]" placeholder="Please type what you want..."></textarea>
                    </div>
                </div>
            </div>
		</div>
	{!! Form::submit(isset($model) ? 'Perbarui' : 'Simpan', ['class'=>'btn btn-primary pull-right']) !!}	
</div>	
