@extends('layouts.app')


@section('content')
    <div>
        <table>
            <a class="bl" href="{{route('productos.create')}}"><button>Crear</button></a>
            <tr>
                <td>Descripcion</td>
                <td>Cantidad</td>
                <td>Contneto</td>
                <td>UnidadxEMP</td>
                <td>Disponibilidad</td>
                <td>Valor</td>
                <td>Imagen</td>
            </tr>

            @forelse ($productos as $fila)   
    
            <tr>
                <td>
                    {{ $fila ->descripcion}}
                </td>
                <td>
                    {{ $fila ->cantidad}}
                </td>
                <td>
                    {{ $fila ->contneto}}
                </td>
                <td>
                    {{ $fila ->unidadxempaque}}
                </td>
                <td>
                    {{ $fila ->disponibilidad}}
                </td>
                <td>
                    {{ $fila ->valor}}
                </td>
                <td>
                    @if ($fila->imagen)
                    <img src="{{asset('storage/imagenes/' . $fila->imagen) }}" alt="imagen" width="50">
                @else
                    Sin Imagen
                @endif
                <td><a class="bl" href="{{route('productos.edit',$fila ->idproducto)}}"><button>Editar</button></a></td>
                </td>
            </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection
