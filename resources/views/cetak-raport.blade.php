<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
 <style>
     table.sikap{
        border: 1px solid black;
     }
     table, td .sikap{
         padding-left: 10px;
     }
     table, td .nilai{
        padding-left: 10px;
        padding-right: 10px;}
     }
</style>
<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg .tg-baqh{text-align:center;vertical-align:top}
    .tg .tg-0lax{text-align:center;vertical-align:top;padding-left: 10px;padding-right: 10px;}
    .tg .tg-0lab{text-align:center;align:justify;vertical-align:top;padding-left: 10px;padding-right: 10px;}

    .ta  {border-collapse:collapse;border-spacing:0;}
    .ta td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .ta th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .ta .ta-zv4m{border-color: white;text-align:left;vertical-align:top}
    .ta .ta-8jgo{border-color: white;text-align:center;vertical-align:top}
    </style>
</head>
<body>
<b style="padding-left: 150px"> RAPORT PESERTA DIDIK DAN PROFIL PESERTA DIDIK </b> <br>
<br>
<br>
<table class="noberder">
    <tr>
        <td>Nama Peserta Didik</td>
        <td>: <b> {{$siswa->nama_lengkap}}</b></td>
    </tr>
    <tr>
        <td style="width: 150px;">NISN / NIS</td>
        <td>: {{$siswa->NISN}} / {{$siswa->INDUK}}</td>
        <td style="width: 100px;"></td>
        <td>Kelas</td>
        <td>: {{$kelassiswa->kelassis}}</td>
    </tr>
    <tr>
        <td style="width: 50px;">Nama Sekolah </td>
        <td>: {{$profilsekolah->nama_sekolah}}</td>
        <td style="width: 100px;"></td>
        <td >Semester</td>
        @if($kelassiswa->kelassis%2 == 0)
        <td>: Genap</td>
        @else
        <td>: Ganjil</td>
        @endif
    </tr>
    <tr>
        <td style="width: 50px;">Alamat Sekolah</td>
        <td>: {{$profilsekolah->alamat_sekolah}} {{$profilsekolah->kecamatan}}</td>
        <td style="width: 100px;"></td>
        <td>Tahun Pelajaran</td>
        <td>: {{$kelassiswa->kelas->tahun_ajaran}}</td>
    </tr>
</table>
<br>
<br>

<b style="padding-left: 20px;">Nilai Sikap</b>
<br>
<br>
<table class="sikap">
    <tr>
        <td style="width: 200px; height: 100px;">Sikap Spiritual</td>
        <td>: </td>
        <td style="width: 500px; height: 100px; padding-left: 10px; padding-right: 10px;">Ananda Alfi Divanadia Damayanti sangat baik dalam berperilaku syukur, dan sudah mampu meningkatkan sikap toleransi</td>
    </tr>
    <tr>
        <td style="width: 200px; height: 100px;">Sikap Sosial</td>
        <td>: </td>
        <td style="width: 500px; height: 100px; padding-left: 10px; padding-right: 10px;">Ananda Alfi Divanadia Damayanti, sangat jujur, disiplin, tanggung jawab, santun, peduli, dan sudah mampu meningkatkan sikap percaya diri</td>
    </tr>
</table>
{{-- Tabel Nilai Pengetahuan dan Nilai Keterampilan --}}
<br>
<b style="padding-left: 20px; padding-right: 20px;">Nilai Pengetahuan dan Ketrampilan</b>
<br>
<br>
    <table class="tg nilai">
      <tr>
        <th class="tg-baqh" rowspan="2" style="width: 10px">No.</th>
        <th class="tg-baqh" rowspan="2" style="width: 90px">Muatan Pelajaran</th>
        <th class="tg-baqh" colspan="3">Pengetahuan</th>
        <th class="tg-baqh" colspan="3">Ketrampilan</th>
      </tr>
      <tr>
        <td class="tg-0lax" style="width: 30px">Nilai</td>
        <td class="tg-0lax" style="width: 30px">Predikat</td>
        <td class="tg-0lax" style="width: 150px">Deskripsi</td>
        <td class="tg-0lax" style="width: 30px">Nilai</td>
        <td class="tg-0lax" style="width: 30px">Predikat</td>
        <td class="tg-0lax" style="width: 150px">Deskripsi<br></td>
      </tr>
        @foreach($matapel as $no=>$mp)
        @if (count($mp->kd_ki4)>0)
                @foreach ($nilaiki4 as $kd)
                    @php
                        $rtki4[] = $kd->rata_rata;
                    @endphp
                @endforeach
                    @php
                        $rtmapelki4 = array_sum($rtki4)/count($rtki4);
                        $rtmapelki4 = number_format((float)$rtmapelki4, 2, '.','');
                        if((87<$rtmapelki4)&&(100>=$rtmapelki4)){
                            $predikatki4 = 'A';
                            $descki4 = 'Ananda '.$siswa->nama_lengkap.' sangat baik dalam';
                        }
                        elseif((73<$rtmapelki4)&&((87>=$rtmapelki4)))
                        {
                            $predikatki4 = 'B';
                            $descki4 = 'Ananda '.$siswa->nama_lengkap.' baik dalam';
                        }
                        elseif(($rtmapelki4>=60)&&((73>=$rtmapelki4)))
                        {
                            $predikatki4 = 'C';
                            $descki4 = 'Ananda '.$siswa->nama_lengkap.' cukup dalam';
                        }
                        else{
                            $predikatki4 = 'D';
                            $descki4 = 'Ananda '.$siswa->nama_lengkap.' perlu bimbingan dalam';
                        }
                    @endphp  
            @else
                @php
                $rtmapelki4 = 'kosong';
                $predikatki4 = '-';
                $descki4 = '-';
                @endphp
            @endif

        @if (count($mp->kd_ki3)>0)
            @foreach ($nilaiki3 as $kd)
                @php
                    $rtki3[] = $kd->nilai_kd;
                @endphp
            @endforeach
                @php
                    $rtmapelki3 = array_sum($rtki3)/count($rtki3);
                    $rtmapelki3 = number_format((float)$rtmapelki3, 2, '.','');
                    if((87<$rtmapelki3)&&(100>=$rtmapelki3)){
                            $predikatki3 = 'A';
                            $descki3 = 'Ananda '.$siswa->nama_lengkap.' sangat baik dalam';
                        }
                        elseif((73<$rtmapelki3)&&((87>=$rtmapelki3)))
                        {
                            $predikatki3 = 'B';
                            $descki3 = 'Ananda '.$siswa->nama_lengkap.' baik dalam';
                        }
                        elseif(($rtmapelki3>=60)&&((73>=$rtmapelki3)))
                        {
                            $predikatki3 = 'C';
                            $descki3 = 'Ananda '.$siswa->nama_lengkap.' cukup dalam';
                        }
                        else{
                            $predikatki3 = 'D';
                            $descki3 = 'Ananda '.$siswa->nama_lengkap.' perlu bimbingan dalam';
                        }
                @endphp   
        @else
            @php
            $rtmapelki3 = 'kosong';
            $predikatki3 = '-';
            $descki3 = '-';
            @endphp
        @endif
      <tr>
            <td class="tg-0lax">{{$no+1}}</td>
            <td class="tg-0lax">{{$mp->nama_mata_pelajaran}}</td>
            <td class="tg-0lax">{{$rtmapelki3}}</td>
            <td class="tg-0lax">{{$predikatki3}}</td>
            <td class="tg-0lab">{{$descki3}}</td>
            <td class="tg-0lax">{{$rtmapelki4}}</td>
            <td class="tg-0lax">{{$predikatki4}}</td>
            <td class="tg-0lab">{{$descki4}}</td>
      </tr>
      @endforeach
    </table>
<br>
<br>
<b style="padding-left: 20px;">Ekstrakulikuler</b>
<br>
<br>
<table>
    <tr>
        <th>No.</th>
        <th style="width: 250px">Kegiatan Ekstrakulikuler</th>
        <th style="width: 450px">Keterangan</th>
    </tr>
    @foreach($siswa->siswaekskul as $no=>$eks)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$eks->ekskul->nama_ekskul}}</td>
        <td>Ananda mengikuti dan berpartisipasi dalam kegiatan Ekstrakulikuler {{$eks->ekskul->nama_ekskul}} dan memiliki hasil yang baik</td>
    </tr>
    @endforeach
</table>
<br>
<br>
<b style="padding-left: 20px;">Saran - Saran</b>
<br>
<br>
<table>
    <tr>
        <td class="tg-baqh" style="width: 800px">Dengan Dukungan Orangtua, Anada dapat mengembangkan bakat menulisnya lebih baik lagi</td>
    </tr>
</table>
<br>
<br>
<b style="padding-left: 20px;">Tinggi Badan dan Berat Badan</b>
<br>
<br>
<table class="tg">
    <tr>
        <th>No.</th>
        <th>Aspek Penilaian</th>
        <th>Hasil</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Tinggi Badan</td>
        <td>{{$catatansiswa->tinggi_badan}} cm</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Berat Badan</td>
        <td>{{$catatansiswa->berat_badan}} Kg</td>
    </tr>
</table>
<br>
<br>
<b style="padding-left: 20px;">Kondisi Kesehatan</b>
<br>
<br>
<table class="tg">
    <tr>
        <th>No.</th>
        <th>Aspek Fisik</th>
        <th>Keterangan</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Pendengaran</td>
        <td>{{$catatansiswa->kesehatan_pendengaran}}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Pengelihatan</td>
        <td>{{$catatansiswa->kesehatan_pengelihatan}}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Gigi</td>
        <td>{{$catatansiswa->kesehatan_gigi}}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Lainnya</td>
        <td>{{$catatansiswa->kesehatan_lainnya}}</td>
    </tr>
</table>
<br>
<br>
<b style="padding-left: 20px;">Prestasi</b>
<br>
<br>
<table>
    <tr>
        <th>No.</th>
        <th>Nama Prestasi</th>
        <th>Keterangan</th>
    </tr>
    @if(!empty($siswa->prestasi))
    @foreach($siswa->prestasi as $no=>$pr)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$pr->nama_prestasi}}</td>
        <td>Prestasi {{$pr->jenis_prestasi}} yang diselenggarakan oleh {{$pr->penyelenggara}}.Peringkat {{$pr->peringkat}} dengan hasil berupa {{$pr->saran_saran}}.</td>
    </tr>
    @endforeach
    @else
    <tr>
        <td>Siswa Belum mengikuti ajang prestasi</td>
    </tr>
    @endif
</table>
<br>
<br>
<b style="padding-left: 20px;">Ketidakhadiran</b>
<br>
<br>
<table >
    <tr>
        <td style="padding-right: 100px;">Sakit</td>
        <td>{{$catatansiswa->absensi_sakit}}</td>
    </tr>
    <tr>
        <td style="padding-right: 100px;">Izin</td>
        <td>{{$catatansiswa->absensi_ijin}}</td>
    </tr>
    <tr>
        <td style="padding-right: 100px;">Tanpa Keterangan</td>
        <td>{{$catatansiswa->absensi_tanpa_keterangan}}</td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<table class="ta">
        <tr>
          <th class="ta-8jgo">Mengetahui<br></th>
          <th class="ta-zv4m"></th>
          <th class="ta-zv4m"></th>
          <th class="ta-zv4m"></th>
          <th class="ta-zv4m"></th>
          <th class="ta-zv4m"></th>
          <th class="ta-zv4m"></th>
          <th class="ta-zv4m"></th>
          @php 
            $date = date_create($nilaisiswa->tgl_penerimaan_raport);
          @endphp
          <th class="ta-8jgo">Malang, {{date_format($date, "d M Y")}}</th>
        </tr>
        <tr>
          <td class="ta-8jgo">Orangtua / Wali</td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo"></td>
          <td class="ta-8jgo">Guru {{$kelassiswa->kelas->nama_kelas}}</td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo"></td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo"></td>
        </tr>
        <tr>
          <td class="ta-zv4m">..............................................</td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo">{{$kelassiswa->kelas->guru->nama}}</td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo">NIP. {{$kelassiswa->kelas->guru->NIP}}</td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo">Mengetahui,</td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo">Kepala Sekolah</td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo">{{$profilsekolah->kepala_sekolah->nama}}</td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
        </tr>
        <tr>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-8jgo">NIP. {{$profilsekolah->kepala_sekolah->NIP}}</td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
          <td class="ta-zv4m"></td>
        </tr>
      </table>

</body>
</html>
