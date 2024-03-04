@csrf
<div class="row">
    <div class="col-12">
    <div class="form-group">
        <label form="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{(isset($cliente))?$cliente->nombre:old('nombre')}}" required>
    </div>
    </div>

    <div class="col-12">
    <div>
    <label form="">Apellido Paterno</label>
        <input type="text" class="form-control" name="ApellidoPaterno" value="{{(isset($cliente))?$cliente->ApellidoPaterno:old('ApellidoPaterno')}}" required>
    </div>
    </div>

    <div class="col-12">
    <div>
    <label form="">Apellido Materno</label>
        <input type="text" class="form-control" name="ApellidoMaterno" value="{{(isset($ApellidoMaterno))?$cliente->ApellidoMaterno:old('ApellidoMaterno')}}" required>
    </div>
    </div>

    <div class="col-12">
    <div>
    <label form="">RFC</label>
        <input type="text" class="form-control" name="rfc" value="{{(isset($cliente))?$cliente->rfc:old('rfc')}}" required>
    </div>
    </div>

    <div class="col-12">
    <div>
    <label form="">Teléfono</label>
        <input type="text" class="form-control" name="telefono" value="{{(isset($cliente))?$cliente->telefono:old('telefono')}}" required>
    </div>
    </div>

    <div class="col-12">
    <div>
    <label form="RFC">Correo</label>
        <input type="text" class="form-control" name="correo" value="{{(isset($cliente))?$cliente->correo:old('correo')}}" required>
    </div>
    </div>

    <div class="col-12">
    <div>
    <label form="RFC">Dirección</label>
        <input type="text" class="form-control" name="direccion" value="{{(isset($cliente))?$cliente->direccion:old('direccion')}}" required>
    </div>
    </div>


</div>
