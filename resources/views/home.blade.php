@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! 
                    @if(Auth::user()->hasrole('pegawai'))
                    <strong>Pegawai</strong>
                    @elseif(Auth::user()->hasrole('petugas'))
                    <strong>Petugas</strong>
                    @elseif(Auth::user()->hasrole('kepalaUPT'))
                    <strong>kepala UPT</strong>
                    @elseif(Auth::user()->hasrole('kepalaDinas'))
                    <strong>kepala DInas</strong>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
