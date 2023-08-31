@extends('layouts.app')

@section('content')
<div class="divm">
    <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
            <h1>Crear producto</h1>
        @csrf
        <fieldset>
            <div>
                <label for="idtipo">Tipo</label>
                <select name="idtipo" id="idtipo" class="form-control">
                    @foreach($tipos as $prods)
                    <option value="{{$prods->idtipo}}">{{$prods->idtipo}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="idmarca">Marca</label>
                <select name="idmarca" id="idmarca" class="form-control">
                    @foreach($marcas as $prod)
                    <option value="{{$prod->idmarca}}">{{$prod->idmarca}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="descripcion">Descripcion del producto</label>
                <input type="text" name="descripcion" id="descripcion" >
            </div>
    
            <div>
                <label for="cantidad">Cantidad del producto</label>
                <input type="number" name="cantidad" id="cantidad" >
            </div>
    
            <div>
                <label for="contneto">Contenido Neto</label>
                <input type="text" name="contneto" id="contneto" >
            </div>
    
            <div>
                <label for="unidadxempaque">Unidad x Empaque</label>
                <input type="number" name="unidadxempaque" id="unidadxempaque" >
            </div>
    
            <div>
                <select name="disponibilidad" class="form-control">
                    <option value="Disponible">Disponible</option>
                    <option value="NoDisponible">No Disponible</option>
                </select>
            </div>
    
            <div>
                <label for="valor">Valor del producto</label>
                <input type="text" name="valor" id="valor" >
            </div>
        
            <div>
                <label for="imagen">Imagen del producto</label>
                <input type="file" name="imagen" id="imagen">
            </div>
            <a href="" onclick="return alert('¡Producto Agregado!')"><button type="submit">Crear Producto</button></a>
    </fieldset>
    </form>
</div>
@endsection