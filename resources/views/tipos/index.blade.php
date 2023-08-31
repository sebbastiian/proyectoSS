@extends('layouts.app')


@section('content')
    <div>
        <table>
            <a class="bl" href="{{route('tipos.create')}}"><button>Crear</button></a>
            <tr>
                <td>Nombre</td>
            </tr>

            @forelse ($tipos as $fila)   
    
            <tr>
                <td>
                    {{ $fila ->nombre}}
                </td>
            </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection
