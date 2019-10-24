@extends('layouts.app-dashboard')
@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{$guru->nama}}
                    </h2>
                </div>
                <div class="body">
                    {{$guru->nama}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

