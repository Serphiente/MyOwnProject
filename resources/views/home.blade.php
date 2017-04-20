@extends('layouts.app')
@section('titulo', 'Bienvenido')
@section('subtitulo', '')
@section('content')

<div class="row">
   <div class="col-md-4">
      <div class="stat panel striped-bg">
         <div class="row">
            <div class="col-md-3 bg-info icon-col striped-bg">
               <i class="fa fa-eye fa-4x"></i>
            </div>
            <div class="col-md-9 text-col">
               <i class="fa fa-eye fa-5x"></i>
               <h2>5</h2>
               <p>Órdenes de Compra del día</p>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-4">
      <div class="stat panel striped-bg">
         <div class="row">
            <div class="col-md-3 bg-warning icon-col striped-bg">
               <i class="fa fa-bar-chart fa-4x"></i>
            </div>
            <div class="col-md-9 text-col">
               <i class="fa fa-bar-chart fa-5x"></i>
               <h2>58</h2>
               <p>Ordenes de compra mes en curso</p>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-4">
      <div class="stat panel striped-bg">
         <div class="row">
            <div class="col-md-3 bg-danger icon-col striped-bg">
               <i class="fa fa-calculator fa-4x"></i>
            </div>
            <div class="col-md-9 text-col">
               <i class="fa fa-calculator fa-5x"></i>
               <h2>$20.000.000</h2>
               <p>Total Facturado Mensual</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
