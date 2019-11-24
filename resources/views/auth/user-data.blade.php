@extends('layouts.app-dashboard')
@section('content')
<ol class="breadcrumb">
    <a href="{{URL::previous()}}">
        <button type="button" class="btn btn-warning waves-effect">
            <i class="material-icons">navigate_before</i>
            <span>KEMBALI</span>
        </button>
    </a>
    <li><a href="javascript:void(0);">Home</a></li>
    <li class="active">User</li>
</ol>
<!-- Hover Rows -->
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2>Data User</h2>
                        </div>
                        <div class="col-lg-2 pull-right">
                            <a href="{{route('register.user')}}">
                                <button type="button" class="btn btn-primary waves-effect">
                                <i class="material-icons">group_add</i>
                                <span>Tambah User</span>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>NIP</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $no=>$item)
                            <tr>
                                <th scope="row">{{$no+1}}</th>
                                <td>{{$item->guru->nama}}</td>
                                <td>{{$item->nip}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->role}}</td>
                                <td>
                                    {!! Form::model($item, ['route' => ['user.destroy', $item->id], 'method' => 'delete'] ) !!}
                                    <a href="{{route('user.edit', $item->id)}}">
                                        <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                        <i class="material-icons">delete</i>
                                    </button>
                                    {!! Form::close()!!}      
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Hover Rows -->
@endsection