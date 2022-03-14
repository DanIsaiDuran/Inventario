@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <h1>Administración de Inventario</h1>
        </div>
        
    </div>
    
@stop

@section('content')
    @livewire('show-inventario')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop