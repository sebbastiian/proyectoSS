<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/../css/styleNavegacion.css">
    <link rel="stylesheet" href="/../css/styleCreate.css">
    <title>Crear Marcas</title>
</head>
<body>


@extends('layouts.app')

@section('content')

<style>
    .navegacion{
        display: flex;
        justify-content: space-evenly;
    }
</style>
<div class="navegacion">

        <div class="crear">
            <div class="crearb">
            <a class="a" href="{{route('dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
              </svg> </a>
            </div>
        </div>

        <div class="crear">
            <a class="a" href="{{route('marcas.index')}}">
                <div class="crearb">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-cog" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5" />
                    <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M19.001 15.5v1.5" />
                    <path d="M19.001 21v1.5" />
                    <path d="M22.032 17.25l-1.299 .75" />
                    <path d="M17.27 20l-1.3 .75" />
                    <path d="M15.97 17.25l1.3 .75" />
                    <path d="M20.733 20l1.3 .75" />
                  </svg>
                Marcas
               </div>
            </a>
        </div>

        <div class="crear">
            <a class="a" href="{{route('tipos.index')}}">
                <div class="crearb">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-alert" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M12 17l.01 0" />
                    <path d="M12 11l0 3" />
                  </svg>
                  Tipos
                </div>
            </a>
        </div>

        <div class="crear">
            <a class="a" href="{{route('productos.index')}}">
                <div class="crearb">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-dollar" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M13 21h-7a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" />
                    <path d="M16 3v4" />
                    <path d="M8 3v4" />
                    <path d="M4 11h12.5" />
                    <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                    <path d="M19 21v1m0 -8v1" />
                  </svg>
                Productos
                </div>
            </a>
        </div>      
</div>


<div class="cajaform">
    <form action="{{route('tipos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset class="fieldset">
        <legend>Nuevo Tipo</legend>
        <div>
            <label for="nombre">Nombre</label>
             <input type="text" name="nombre" id="nombre">
        </div>
        <button type="submit" >Guardar</button>
    </fieldset>
    </form>
</div>
@endsection