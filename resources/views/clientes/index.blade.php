@extends('layouts.app')

@section('content')
    <div>
        <div class="card-header d-inline-flex">
        <h5>Clientes</h5>
            <a href="{{route('clientes.create')}}" class="btn btn-primary ml-auto">
                <i class="fas fa-plus"></i>
                Agregar
            </a>
        </div>

        <div class="card-body">

            <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <a class="navbar-brand">Listar</a>
                    <select class="custom-select" id="limit" name="limit">
                        @foreach([10,20,50,100] as $limit)
                        <option value="{{$limit}}" @if(isset($_GET['limit'])) {{($_GET['limit']==$limit)?'selected': ''}} @endif>{{$limit}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-8">
                <div class="form-group">
                    <a class="navbar-brand">Buscar</a>
                    <input class="form-control mr-sm-2" type="search" id="search" placeholder="Search" aria-label="Search" value="{{ (isset($_GET['search']))?$_GET['search']:''}}">
                </div>
            </div>
            </div>

            @if($clientes->total()>5)
            {{$clientes->links() }}
            @endif
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                            <th scope="col">idCliente</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">rfc</th>
                            <th scope="col">teléfono</th>
                            <th scope="col">correo</th>
                            <th scope="col">Dirección</th>
      <td></td>
    </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                        <td>{{$cliente->idCliente}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->apellidoPaterno}}</td>
                        <td>{{$cliente->apellidoMaterno}}</td>
                        <td>{{$cliente->rfc}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>{{$cliente->direccion}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class ="card-footer">
            @if($clientes->total()>5)
            {{$clientes->links() }}
            @endif
        </div>
    </div>
    <!-- JS PARA FILTAR Y BUSCAR MEDIANTE PAGINADO -->
<Script type="text/javascript">
    $('#limit').on('change', function(){
        window.location.href="{{ route('clientes.index')}}?limit=" + $(this).val()+ '&search=' + $('#search').val()
    })

    $('#search').on('keyup', function(e){
        if(e.keyCode == 13){
            window.location.href="{{ route('clientes.index')}}?limit=" +$('#limit').val()+'&search='+$(this).val()
        }
    })
</Script>
@endsection
