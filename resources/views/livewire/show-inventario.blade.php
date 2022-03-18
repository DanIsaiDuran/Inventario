<div>
    <div class="card  border-bottom p-2 ">
        <div id="header" class="d-flex flex-column flex-sm-row align-items-center text-center m-2">
            <h3 class="mb-0 fw-bolder ps-2">Listado de productos</h3>
            <div class="d-flex justify-content-end"></div>
            <button class="ml-auto p-2 btn btn-outline-primary round" data-toggle="modal" data-target="#productoModal">
                <i class="fas fa-plus me-24"></i>
                <span>Nuevo producto</span>
            </button>
        </div>

        @if ($productos->count())
        <table class="table">
            <thead>
              <tr class=" text-center">
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr class=" text-center">
                    <th scope="row">{{ $producto->id }}</th>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td class=" ">{{ $producto->stock }}</td>
                    <td>{{ $producto->precio }}</td>
                    @can('admin.inventario.editar')
                        <td><button class="btn btn-primary btn-sm">Editar</button></td>
                    @endcan

                    @can('admin.inventario.eliminar')
                        <td><button class="btn btn-danger btn-sm" wire:click="$emit('confirmarProducto', {{ $producto }})">Eliminar</button></td>
                    @endcan
                    
                    
                @endforeach
              </tbody>
        </table>
        @else
            <div class="m-2 text-center">
                No hay productos registrados
            </div>
        @endif
    </div>

    {{-- Modal productos --}}
    <div wire:ignore.self class="modal fade" id="productoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Crear producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row gy-1 pt-75">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input
                            type="text"
                            class="form-control"
                            wire:model="nombre"
                        />
                    </div>
                    <div>
                    </div>
                    
                    <div class="col-12 col-md-3">
                        <label class="form-label" for="stock">Stock</label>
                        <input
                            type="number"
                            name="stock"
                            class="form-control"
                            wire:model="stock"
                        />
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label" for="precio">Precio</label>
                        <input
                            type="number"
                            name="precio"
                            class="form-control"
                            wire:model="precio"
                        />
                    </div>
                    
                    
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="descripcion">Descripción</label>
                        <textarea class="form-control" wire:model="descripcion"> </textarea>
                    </div>

                    <div class="col-12 col-md-12">
                        <label class="form-label" for="imagen">Imagen</label>
                        <input type="file" name="imagen" class="form-control" wire:model="imagen">
                    </div>

                    <div wire:loading wire:target="imagen">
                        <span>Imagen cargando...</span>
                    </div>
                    
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button  type="button" class="btn btn-primary" wire:click="save" wire:loading.attr="disabled" wire:target="save, imagen">
                    Guardar
                </button>
            </div>
          </div>
        </div>
      </div>
    
</div>
