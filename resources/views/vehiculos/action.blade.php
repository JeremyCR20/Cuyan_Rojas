<div class="modal-content">
    <form id="formUpdate" action="{{ $vehiculo->id ? route('vehiculo.update', $vehiculo) : route('vehiculo.store') }}" method="post">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Vehículos</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if($vehiculo->id)
                @method('PUT')
                <input type="hidden" name="id" value="{{ $vehiculo->id }}">
            @endif
            @csrf
            <div class="form-group">
                <label for="placa">Placa</label>
                <input type="text" name="placa" class="form-control" id="placa" placeholder="Ingrese placa" value="{{ $vehiculo->placa }}">
                <div id="msg_placa"></div>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="modelo" placeholder="Ingrese modelo" value="{{ $vehiculo->modelo }}">
                <div id="msg_modelo"></div>
            </div>
            <div class="form-group">
                <label for="propietario">Propietario</label>
                <input type="text" name="propietario" class="form-control" id="propietario" placeholder="Ingrese propietario" value="{{ $vehiculo->propietario }}">
                <div id="msg_propietario"></div>
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
