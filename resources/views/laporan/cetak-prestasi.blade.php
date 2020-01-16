<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg .tg-k2ve{font-family:"Times New Roman", Times, serif !important;;border-color:#000000;text-align:left;vertical-align:top}
    .tg .tg-yla0{font-weight:bold;text-align:center;vertical-align:middle;width:133px;}
    .tg .tg-0lax{text-align:left;vertical-align:top}
    hr{width:900px;}
</style>
</head>
<body >
    <div style="width: 900px; text-align:center;">
        <h3>Laporan Prestasi Siswa</h3>
        <hr>
    </div>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-yla0" style="width:50px;">No<br></th>
                <th class="tg-yla0">Nama Siswa</th>
                <th class="tg-yla0">Nama Prestasi</th>
                <th class="tg-yla0">Tahun Prestasi</th>
                <th class="tg-yla0">Jenis Prestasi</th>
                <th class="tg-yla0">Peringkat</th>
                <th class="tg-yla0">Penyelenggara</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dt as $no=>$d)
            <tr>
                <td class="tg-0lax" scope="row">{{$no+1}}</td>
                <td class="tg-0lax">{{$d->siswa->nama_lengkap}}</td>
                <td class="tg-0lax">{{$d->nama_prestasi}}</td>
                <td class="tg-0lax">{{$d->tahun_prestasi}}</td>
                <td class="tg-0lax">{{$d->jenis_prestasi}}</td>
                <td class="tg-0lax">{{$d->peringkat}}</td>
                <td class="tg-0lax">{{$d->penyelenggara}}</td>
            </tr>
            @endforeach
        </tbody>
    </table> 
</body>
</html>
