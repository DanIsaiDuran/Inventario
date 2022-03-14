<div>
    <div class="card  border-bottom p-2 ">
        <div id="header" class="d-flex flex-column flex-sm-row align-items-center text-center m-2">
            <h4 class="mb-0 fw-bolder ps-2">Listado de productos</h4>
            <div class="d-flex justify-content-end"></div>
            <button class="ml-auto p-2 btn btn-outline-primary round" data-toggle="modal" data-target="#productoModal">
                <i class="fas fa-plus me-24"></i>
                <span>Nuevo producto</span>
            </button>
        </div>

        @if ($productos->count())
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
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
    <div class="modal fade" id="productoModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                            name="nombre"
                            class="form-control"
                        />
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label" for="nombre">Stock</label>
                        <input
                            type="number"
                            name="stock"
                            class="form-control"
                        />
                    </div>
                    <div class="col-12 col-md-3">
                        <label class="form-label" for="nombre">Precio</label>
                        <input
                            type="number"
                            name="precio"
                            class="form-control"
                        />
                    </div>
                    
                    
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="nombre">Descripción</label>
                        <textarea class="form-control"> </textarea>
                    </div>
                    
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    
</div>
