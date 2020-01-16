<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body style="width: 900px;">
<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>No.Induk</th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>L / P</th>
            <th>Kelas</th>
            <th>Tempat, Tgl Lahir</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dt as $no=>$siswas)
        <tr>
            <th scope="row">{{$no+1}}</th>
            <td>{{$siswas->INDUK}}</td>
            <td>{{$siswas->NISN}}</td>
            <td>{{$siswas->nama_lengkap}}</td>
            @if ($siswas->jenis_kelamin === 'Laki-Laki')
                <td>L</td>
            @else 
                <td>P</td>
            @endif
            <td>{{!empty($siswas->current_kelas->nama_kelas) ? $siswas->current_kelas->nama_kelas : '-'}}</td>
            <td>{{$siswas->tempat_lahir}}, {{date('d-m-Y', strtotime($siswas->tgl_lahir))}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>