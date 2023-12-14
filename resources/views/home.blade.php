@extends('layouts.template')

@section('content')
<div class="jumbotron py-4 px-5">
    {{-- @if (Session::get('canAccess'))
        <div class="alert alert-danger">{{ Session::get('canAccess') }}</div>
    @endif --}}
    <h1  class="display-4">
        Halo Admin!  
    </h1>
    <hr class="my-4">
    <p>Aplikasi ini hanya digunakan oleh pegawai administrator Kesiswaan
    </p>
@endsection