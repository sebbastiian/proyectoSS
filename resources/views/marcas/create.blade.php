@extends('layouts.app')

@section('content')
<div class="divm">
    <form action="{{route('marcas.store')}}" method="POST" enctype="multipart/form-data">
        <fieldset>
            <h1>Crear Marca</h1>
        @csrf
        <div class="divmm">
            <label for="nombre">Nombre</label>
             <input type="text" name="nombre" id="nombre">
        </div>
        <button type="submit" >Guardar</button>
    </fieldset>
    </form>
</div>
@endsection