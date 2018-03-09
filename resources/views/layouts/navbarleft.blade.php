@extends('layouts.app')
@section('isi')
<body id="app-layout">
 <nav class="navbar navbar-default navbar-static-top">
  <div class="container">
   <div class="navbar-header">
    <!-- Collapsed Hamburger -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
     <span class="sr-only">Toggle Navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     </button>

<!-- Branding Image -->
<a class="navbar-brand" href="{{ url('/') }}">
     <strong> SISTANAK </strong>
</a>
</div>
</div>

<div class="collapse navbar-collapse" id="app-navbar-collapse">
     <ul class="nav navbar-nav">
          @if(Auth::user()->hasrole('pegawai'))
          @include('pegawai')
          @elseif(Auth::user()->hasrole('petugas'))
          @include('petugas')
          @elseif(Auth::user()->hasrole('kepalaUPT'))
          @include('kepalaUPT')
          @elseif(Auth::user()->hasrole('kepalaDinas'))
          @include('kepalaDinas')
          @endif
     </ul>
</div>
</nav>
</body>
@endsection