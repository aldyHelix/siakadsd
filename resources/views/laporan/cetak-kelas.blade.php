<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body style="width: 900px;">
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Semester</th>
            <th>Tahun Ajaran</th>
            <th>Jumlah Siswa</th>
            <th>Guru Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dt as $no=>$d)
        <tr>
            <th scope="row">{{$no+1}}</th>
            <td>{{$d->nama_kelas}}</td>
            <td>Semester {{$d->semester}}</td>
            <td>{{$d->tahun_ajaran}}</td>
            <td>{{count($d->siswa)}}</td>
            <td>{{$d->guru->nama}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>