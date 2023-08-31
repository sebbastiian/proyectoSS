@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('productos.update', $productos) }}" method="POST" enctype="multipart/form-data">
         <h1>Editar producto</h1>
        @csrf
        @method('GET')
    <fieldset>
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
        <a href="" onclick="return alert('¡Cambios realizados!')"><button type="submit">Guardar cambios</button></a>
        </fieldset>
    </form>
</div>
@endsection
