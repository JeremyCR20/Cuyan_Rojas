<div class="modal-content">
    <form id="formUpdate" action="{{ $producto->id ? route('producto.update', $producto) : route('producto.store') }}" method="post">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Producto</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if($producto->id)
                @method('PUT')
                <input type="hidden" name="id" value="{{ $producto->id }}">
            @endif
            @csrf
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" class="form-control" id="codigo" placeholder="Ingrese código" value="{{ $producto->codigo }}">
                <div id="msg_codigo"></div>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre" value="{{ $producto->nombre }}">
                <div id="msg_nombre"></div>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Ingrese descripción">{{ $producto->descripcion }}</textarea>
                <div id="msg_descripcion"></div>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" class="form-control" id="precio" placeholder="Ingrese precio" value="{{ $producto->precio }}">
                <div id="msg_precio"></div>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" class="form-control" id="stock" placeholder="Ingrese stock" value="{{ $producto->stock }}">
                <div id="msg_stock"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="guardar"><span id="textoBoton">Guardar</span></button>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </form>
</div>
