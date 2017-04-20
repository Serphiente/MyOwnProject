@extends('layouts.app')
@section('titulo', 'Productos')
@section('subtitulo', '')
@section('content')
<a href="{{ route('productos.create') }}" class="btn btn-primary ">  Nuevo</a>
<hr>
<div class="panel panel-default">

     <table  class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Concentración</th>
                <th>Presentación</th>
                <th>Precio (*)</th>
                <th>Laboratorio</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
       
        <tbody>
           
                @foreach($productos as $p)
                    <tr>
                    @if($p->modo_uso_id != "")
                        @php $mus = DB::table('modo_usos')->where('id', $p->modo_uso_id)->get();@endphp
                        @foreach($mus as $mu)
                            <td>{{ ucwords($p->nombre)}} {{$mu->uso}}</td>
                        @endforeach
                    @else
                        <td>{{ ucwords($p->nombre)}} </td>
                    @endif
                    <td>{{ $p->concentracion}} </td>

                    
                    <td>{{ $p->unidad_envase}} {{ ucwords($p->pf_nombre)}}(s)</td>
                    <td>{{ $p->precio_bodega}}</td>
                    @if($p->laboratorio_id != "")
                    @php $lab = DB::table('laboratorios')->where('id', $p->laboratorio_id)->get();@endphp
                        @foreach($lab as $l)
                            <td>{{ $l->nombre}}</td>
                        @endforeach
                    @else
                        <td>{{ $p->laboratorio_id}}</td>
                    @endif
                    <td>
                     <a href="#"><i class="fa fa-edit"></i></a>
                     <a href="#"><i class="fa fa-trash"></i></a>
                     </td>
                    </tr>
                @endforeach
            
         
        </tbody>
    </table>
    </div>

@endsection
