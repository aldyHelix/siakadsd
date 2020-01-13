<script>
		$(document).ready(function(){
				var {{$ki}}{{$noki}}p1lisan = $('#{{$ki}}{{$noki}}p1lisan').val();
				var {{$ki}}{{$noki}}p1tulis = $('#{{$ki}}{{$noki}}p1tulis').val();
				var {{$ki}}{{$noki}}p1tugas1 = $('#{{$ki}}{{$noki}}p1tugas1').val();
				var {{$ki}}{{$noki}}p1tugas2 = $('#{{$ki}}{{$noki}}p1tugas2').val();

				var {{$ki}}{{$noki}}p2lisan = $('#{{$ki}}{{$noki}}p2lisan').val();
				var {{$ki}}{{$noki}}p2tulis = $('#{{$ki}}{{$noki}}p2tulis').val();
				var {{$ki}}{{$noki}}p2tugas1 = $('#{{$ki}}{{$noki}}p2tugas1').val();
				var {{$ki}}{{$noki}}p2tugas2 = $('#{{$ki}}{{$noki}}p2tugas2').val();

				var {{$ki}}{{$noki}}p3lisan = $('#{{$ki}}{{$noki}}p3lisan').val();
				var {{$ki}}{{$noki}}p3tulis = $('#{{$ki}}{{$noki}}p3tulis').val();
				var {{$ki}}{{$noki}}p3tugas1 = $('#{{$ki}}{{$noki}}p3tugas1').val();
				var {{$ki}}{{$noki}}p3tugas2 = $('#{{$ki}}{{$noki}}p3tugas2').val();
				
				var {{$ki}}{{$noki}}p4lisan = $('#{{$ki}}{{$noki}}p4lisan').val();
				var {{$ki}}{{$noki}}p4tulis = $('#{{$ki}}{{$noki}}p4tulis').val();
				var {{$ki}}{{$noki}}p4tugas1 = $('#{{$ki}}{{$noki}}p4tugas1').val();
				var {{$ki}}{{$noki}}p4tugas2 = $('#{{$ki}}{{$noki}}p4tugas2').val();

				var {{$ki}}{{$noki}}p5lisan = $('#{{$ki}}{{$noki}}p5lisan').val();
				var {{$ki}}{{$noki}}p5tulis = $('#{{$ki}}{{$noki}}p5tulis').val();
				var {{$ki}}{{$noki}}p5tugas1 = $('#{{$ki}}{{$noki}}p5tugas1').val();
				var {{$ki}}{{$noki}}p5tugas2 = $('#{{$ki}}{{$noki}}p5tugas2').val();

				var {{$ki}}{{$noki}}hasilp1 = ( parseInt({{$ki}}{{$noki}}p1lisan) + parseInt({{$ki}}{{$noki}}p1tulis) + parseInt({{$ki}}{{$noki}}p1tugas1) + parseInt({{$ki}}{{$noki}}p1tugas2))/4;
				$('#{{$ki}}{{$noki}}p1rata-rata').val({{$ki}}{{$noki}}hasilp1);	
				var {{$ki}}{{$noki}}hasilp2 = ( parseInt({{$ki}}{{$noki}}p2lisan) + parseInt({{$ki}}{{$noki}}p2tulis) + parseInt({{$ki}}{{$noki}}p2tugas1) + parseInt({{$ki}}{{$noki}}p2tugas2))/4;
				$('#{{$ki}}{{$noki}}p2rata-rata').val({{$ki}}{{$noki}}hasilp2);	
				var {{$ki}}{{$noki}}hasilp3 = ( parseInt({{$ki}}{{$noki}}p3lisan) + parseInt({{$ki}}{{$noki}}p3tulis) + parseInt({{$ki}}{{$noki}}p3tugas1) + parseInt({{$ki}}{{$noki}}p3tugas2))/4;
				$('#{{$ki}}{{$noki}}p3rata-rata').val({{$ki}}{{$noki}}hasilp3);	
				var {{$ki}}{{$noki}}hasilp4 = ( parseInt({{$ki}}{{$noki}}p4lisan) + parseInt({{$ki}}{{$noki}}p4tulis) + parseInt({{$ki}}{{$noki}}p4tugas1) + parseInt({{$ki}}{{$noki}}p4tugas2))/4;
				$('#{{$ki}}{{$noki}}p4rata-rata').val({{$ki}}{{$noki}}hasilp4);	
				var {{$ki}}{{$noki}}hasilp5 = ( parseInt({{$ki}}{{$noki}}p5lisan) + parseInt({{$ki}}{{$noki}}p5tulis) + parseInt({{$ki}}{{$noki}}p5tugas1) + parseInt({{$ki}}{{$noki}}p5tugas2))/4;
				$('#{{$ki}}{{$noki}}p5rata-rata').val({{$ki}}{{$noki}}hasilp5);	
			$("input").on("keyup", function(){
				var {{$ki}}{{$noki}}p1lisan = $('#{{$ki}}{{$noki}}p1lisan').val();
				var {{$ki}}{{$noki}}p1tulis = $('#{{$ki}}{{$noki}}p1tulis').val();
				var {{$ki}}{{$noki}}p1tugas1 = $('#{{$ki}}{{$noki}}p1tugas1').val();
				var {{$ki}}{{$noki}}p1tugas2 = $('#{{$ki}}{{$noki}}p1tugas2').val();

				var {{$ki}}{{$noki}}p2lisan = $('#{{$ki}}{{$noki}}p2lisan').val();
				var {{$ki}}{{$noki}}p2tulis = $('#{{$ki}}{{$noki}}p2tulis').val();
				var {{$ki}}{{$noki}}p2tugas1 = $('#{{$ki}}{{$noki}}p2tugas1').val();
				var {{$ki}}{{$noki}}p2tugas2 = $('#{{$ki}}{{$noki}}p2tugas2').val();

				var {{$ki}}{{$noki}}p3lisan = $('#{{$ki}}{{$noki}}p3lisan').val();
				var {{$ki}}{{$noki}}p3tulis = $('#{{$ki}}{{$noki}}p3tulis').val();
				var {{$ki}}{{$noki}}p3tugas1 = $('#{{$ki}}{{$noki}}p3tugas1').val();
				var {{$ki}}{{$noki}}p3tugas2 = $('#{{$ki}}{{$noki}}p3tugas2').val();
				
				var {{$ki}}{{$noki}}p4lisan = $('#{{$ki}}{{$noki}}p4lisan').val();
				var {{$ki}}{{$noki}}p4tulis = $('#{{$ki}}{{$noki}}p4tulis').val();
				var {{$ki}}{{$noki}}p4tugas1 = $('#{{$ki}}{{$noki}}p4tugas1').val();
				var {{$ki}}{{$noki}}p4tugas2 = $('#{{$ki}}{{$noki}}p4tugas2').val();

				var {{$ki}}{{$noki}}p5lisan = $('#{{$ki}}{{$noki}}p5lisan').val();
				var {{$ki}}{{$noki}}p5tulis = $('#{{$ki}}{{$noki}}p5tulis').val();
				var {{$ki}}{{$noki}}p5tugas1 = $('#{{$ki}}{{$noki}}p5tugas1').val();
				var {{$ki}}{{$noki}}p5tugas2 = $('#{{$ki}}{{$noki}}p5tugas2').val();

				var {{$ki}}{{$noki}}hasilp1 = ( parseInt({{$ki}}{{$noki}}p1lisan) + parseInt({{$ki}}{{$noki}}p1tulis) + parseInt({{$ki}}{{$noki}}p1tugas1) + parseInt({{$ki}}{{$noki}}p1tugas2))/4;
				$('#{{$ki}}{{$noki}}p1rata-rata').val({{$ki}}{{$noki}}hasilp1);	
				var {{$ki}}{{$noki}}hasilp2 = ( parseInt({{$ki}}{{$noki}}p2lisan) + parseInt({{$ki}}{{$noki}}p2tulis) + parseInt({{$ki}}{{$noki}}p2tugas1) + parseInt({{$ki}}{{$noki}}p2tugas2))/4;
				$('#{{$ki}}{{$noki}}p2rata-rata').val({{$ki}}{{$noki}}hasilp2);	
				var {{$ki}}{{$noki}}hasilp3 = ( parseInt({{$ki}}{{$noki}}p3lisan) + parseInt({{$ki}}{{$noki}}p3tulis) + parseInt({{$ki}}{{$noki}}p3tugas1) + parseInt({{$ki}}{{$noki}}p3tugas2))/4;
				$('#{{$ki}}{{$noki}}p3rata-rata').val({{$ki}}{{$noki}}hasilp3);	
				var {{$ki}}{{$noki}}hasilp4 = ( parseInt({{$ki}}{{$noki}}p4lisan) + parseInt({{$ki}}{{$noki}}p4tulis) + parseInt({{$ki}}{{$noki}}p4tugas1) + parseInt({{$ki}}{{$noki}}p4tugas2))/4;
				$('#{{$ki}}{{$noki}}p4rata-rata').val({{$ki}}{{$noki}}hasilp4);	
				var {{$ki}}{{$noki}}hasilp5 = ( parseInt({{$ki}}{{$noki}}p5lisan) + parseInt({{$ki}}{{$noki}}p5tulis) + parseInt({{$ki}}{{$noki}}p5tugas1) + parseInt({{$ki}}{{$noki}}p5tugas2))/4;
				$('#{{$ki}}{{$noki}}p5rata-rata').val({{$ki}}{{$noki}}hasilp5);
			});	
		});
	</script>