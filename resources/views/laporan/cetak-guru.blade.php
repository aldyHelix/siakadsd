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
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>L / P</th>
            <th>Jabatan</th>
            <th>Tipe Guru</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dt as $no=>$gurus)
        <tr>
            <th scope="row">{{$no+1}}</th>
            <td>{{$gurus->NIP}}</td>
            <td>{{$gurus->nama}}</td>
            <td>{{$gurus->jenis_kelamin}}</td>
            <td>{{$gurus->jabatan}}</td>
            <td>{{$gurus->tipe_guru}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>