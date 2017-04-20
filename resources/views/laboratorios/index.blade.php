@extends('layouts.app')
@section('titulo', 'Laboratorios')
@section('subtitulo', '')
@section('content')
<a href="{{ route('laboratorios.create') }}" class="btn btn-primary ">  Nuevo</a>
<hr>
<div class="panel panel-default">

     <table  class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Rut</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Opciones</th>
                        <!--<th>&nbsp;</th>-->
            </tr>
        </thead>
       
        <tbody>
           
                @foreach($laboratorios as $l)
                 <tr>
                <td>{{ $l->nombre}}</td>
                <td>{{ $l->rut}} - {{ $l->dv}}</td>
                <td>{{ $l->direccion}}</td>
                <td>{{ $l->nombre_comuna}}</td>
                <td>{{ $l->telefono}}</td>
                <td>{{ $l->email}}</td>
                <td>[Editar] [Eliminar]</td>
                </tr>
                @endforeach
            
         
        </tbody>
    </table>
    </div>

@endsection
