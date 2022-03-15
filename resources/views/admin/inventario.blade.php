@extends('adminlte::page')

@section('title', 'Inventario')
{{-- @section('plugins.Sweetalert2', true) --}}

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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('confirmarProducto', (producto) => {
            Swal.fire({
                title: '¿Estas seguro?',
                text: "No podrás deshacer esta acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('eliminarProducto', producto);
                }
            })
        })

        Livewire.on('productoEliminado', function() {
            Swal.fire(
                'Producto eliminado',
            )
        })

        window.addEventListener('closeModal', event => {
            $('.modal').modal('hide').data('bs.modal', null);              
        })
    </script>
@stop