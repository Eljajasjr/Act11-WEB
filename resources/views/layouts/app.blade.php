@extends('adminlte::page')

@section('title', 'Proyecto Task9 - Laravel 8')

@section('content_header')
    <h1>@yield('page_title')</h1>
@stop

@section('content')
    @yield('main_content')
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Versión</b> 1.0.0
    </div>
    <strong>Actividad realizada por [Tu Nombre] - © {{ date('Y') }}</strong>
@stop