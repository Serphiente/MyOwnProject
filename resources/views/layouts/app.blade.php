<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
   <head>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta charset="utf-8">
      <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
      <title>@yield('titulo')</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta content="" name="description">
      <meta content="" name="author">
     

      <script src="http://dashy.strapui.com/laravel/js/vendor.js" type="text/javascript"></script>
      <script  src="{{ asset('js/jquery-2.2.4.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
      
      <script src="http://dashy.strapui.com/laravel/vendor/ckeditor/ckeditor.js" type="text/javascript"></script>
      <script src="http://dashy.strapui.com/laravel/js/app.js" type="text/javascript"></script>
       <script type="text/javascript" src="{{asset('js/select2.full.min.js') }}"></script>
       <script type="text/javascript" src="{{asset('js/perfect-scrollbar.jquery.js')}}"></script>
      <style>.cke{visibility:hidden;}</style>
      <!-- Scripts -->
      
      <script>
         window.Laravel = {!! json_encode([
             'csrfToken' => csrf_token(),
         ]) !!};
      </script>
       <script type="text/javascript">
    $(document).ready(function() {
    $('.datatable').DataTable( {
         dom: 'Bfrtip',
          "language": {
                "url": "dataTables.spanish.lang"
            },
         "lengthChange": true,
         buttons: [
        {
            extend: 'copy',
            text: 'Copiar',
            exportOptions: {
                modifier: {
                    page: 'all'
                }
            }
        },
        {
            extend: 'print',
            text: 'Imprimir',
            exportOptions: {
                modifier: {
                    page: 'all'
                }
            }
        },
        {
            extend: 'pdf',
            text: 'PDF',
            exportOptions: {
                modifier: {
                    page: 'all'
                }
            }
        }
    ],
        "language": {
            "search":"Buscar:",
            "loadingRecords": "Cargando...",
            "zeroRecords":    "Sin resultados",
            "paginate": {
                "first":      "Primero",
                "last":       "Último",
                "next":       "Adelante",
                "previous":   "Atrás"
            },
            "infoEmpty":      "Mostrando 0 hasta 0 de un total de  0 resultados",
            "info":           "Mostrando _START_ - _END_ de un total de _TOTAL_ resultados",
            "lengthMenu":     "Mostrando _MENU_ resultados",
        }
    } );
} );


</script>




 <link href="{{ asset('css/blue.css') }}" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/t0m/select2-bootstrap-css/bootstrap3/select2-bootstrap.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css"/>
      <link rel="stylesheet" type="text/css" href="{{asset('css/perfect-scrollbar.css')}}">
   </head>
   <body class="page-header-fixed page-quick-sidebar-over-content ">
      <div id="app-container">
         <nav class="navbar navbar-inverse navbar-fixed-top striped-bg" id="top-navbar">
            <div class="container-fluid">
               <div class="navbar-header">
                  <a class="sidenav-toggle" href="#"><span class="brandbar"><i class="fa fa-bars hidd"></i></span></a>
                  <a class="navbar-brand" href="http://another.cl"><i class="fa fa-paper-plane"></i>&nbsp; {{ config('app.name', 'Laravel') }}</a> 
                  <div class="solution">&gt;&gt;&nbsp;Seremos mejores cada día.</div>
               </div>
               <div class="right-admin">
                  <ul>
                     <li class="dropdown hidd">
                        <a href="#" class="dropdown-toggle admin-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                            @if (!Auth::guest())
                             <img class="img-circle admin-img" src="{{Auth::user()->img}}" alt="">

                            @endif

                           
                        </a>
                        <ul class="dropdown-menu admin" role="menu">
                           <li role="presentation" class="dropdown-header">Admin name</li>
                           <li><a href="http://dashy.strapui.com/laravel/profile"><i class="fa fa-info"></i> Profile</a></li>
                           
                        </ul>
                     </li>
                  </ul>
               </div>
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right top-nav">
                    
                
                     <li>
                        <a href="javascript:;" id="boxed-layout"><i class="fa fa-expand-toggle fa-tp"></i></a>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle notoggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="notification"><i class="fa fa-bell-o"></i></span>
                        <b class="badge nobadge">5</b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg ddown" role="menu">
                           <li role="presentation" class="dropdown-header">Notificaciones</li>
                           <li>
                              <a href="#" class="notification-wrap">
                                 <div class="notification-media">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <div><span class="label label-danger">Urgent</span></div>
                                 </div>
                                 <div class="notification-info">
                                    <div class="time-info text-muted pull-right"><small><i class="fa fa-comments"></i>Hace 2 horas </small></div>
                                    <h5>Heading </h5>
                                    <p>Hey Anna! Sorry for delayed response. I've just finished reading the mail you sent couple of...</p>
                                 </div>
                              </a>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <a href="#" class="notification-wrap">
                                 <div class="pull-left notification-media">
                                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <div><span class="label label-info">New</span></div>
                                 </div>
                                 <div class="notification-info">
                                    <div class="time-info text-muted pull-right"><small><i class="fa fa-comments"></i> 23rd Dec 2014</small></div>
                                    <h5>Heading </h5>
                                    <p>Hey Anna! Sorry for delayed response. I've just finished reading the mail you sent couple of...</p>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li >
                        <a href="#" class="dropdown-toggle admin-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <img class="img-circle admin-img" src="@if(!Auth::guest()){{Auth::user()->img}} @else 'http://dashy.strapui.com/laravel/img/profile1.jpg' @endif" alt="">&nbsp;&nbsp;&nbsp;<span class="add">@if(!Auth::guest()){{Auth::user()->name}} @else 'User' @endif&nbsp;
                        </a>
                       
                     </li>
                  </ul>
               </div>
            </div>
         </nav>

          @if (!Auth::guest())
         <div class="striped-bg" id="sidenav">
            <div role="tabpanel" id="navTabs">
               <div class="sidebar-controllers">
                  <ul class="nav nav-tabs nav-justified sidebar-top-nav" role="tablist">
                     <li role="presentation" class="active"><a href="#menu"><i class="fa fa-bars"></i></a></li>
                     <li role="presentation"><a href="#comments"><i class="fa fa-comments-o"></i></a></li>
                     <li role="presentation"><a href="#charts"><i class="fa fa-line-chart"></i></a></li>
                     <li role="presentation"><a href="#calendar"><i class="fa fa-calendar"></i></a></li>
                     <li role="presentation"><a href="#notification"><i class="fa fa-bell-o"></i></a></li>
                  </ul>
                  <div class="">
                     <div class="tab-content-scroller tab-content sidebar-section-wrap ps-container" data-ps-id="125e0877-1a26-f6d6-6907-972ef3bf9374">
                        <div role="tabpanel" class="tab-pane active" id="menu">
                           <div class="photo-container text-center">
                           
                               <a href="http://dashy.strapui.com/laravel/profile">
                                   <img src="{{Auth::user()->img}}" alt="" class="img-circle dash-profile">
                              </a>
                              <div class="t-p">
                                 <a href="http://dashy.strapui.com/laravel/profile">
                                  @php
                                 if (Auth::user()->id == 1){
                                    echo "~ Do it for him ~";
                                 }else{
                                    echo "~ " . Auth::user()->name . " ~" ;
                                 }
                                 @endphp
                                 </a>
                              </div>
                          


                           </div>
                           <div class="section-heading">Menus</div>
                           <ul class="nav sidebar-nav ">
                              <li class="active"><a href="http://another.cl/home"><i class="fa fa-home"></i> Home</a></li>

                              <li class="sidenav-dropdown">
                                 <a class="subnav-toggle" href="#"><i class="fa fa-users "></i> Clientes <i class="fa fa-angle-down fa-angle-down  pull-right"></i></a>
                                 <ul class="nav sidenav-sub-menu">
                                    <li><a href=""><i class="fa fa-users"></i> Registrar Cliente</a></li>
                                    <li><a href=""><i class="fa fa-users"></i> Listar Clientes</a></li>
                                 </ul>
                              </li>
                              

                              <li class="sidenav-dropdown">
                                 <a class="subnav-toggle" href="#"><i class="fa fa-briefcase "></i> Proveedores <i class="fa fa-angle-down fa-angle-down  pull-right"></i></a>
                                 <ul class="nav sidenav-sub-menu">
                                    <li><a href=""><i class="fa fa-briefcase"></i> Registrar Proveedor</a></li>
                                    <li><a href=""><i class="fa fa-briefcase"></i> Listar Proveedores</a></li>
                                 </ul>
                              </li>

                              <li class="sidenav-dropdown">
                                 <a class="subnav-toggle" href="#"><i class="fa fa-tag "></i> Productos <i class="fa fa-angle-down fa-angle-down  pull-right"></i></a>
                                 <ul class="nav sidenav-sub-menu">
                                    <li><a href="http://another.cl/productos/create"><i class="fa fa-tag"></i> Registrar Producto</a></li>
                                    <li><a href="http://another.cl/productos"><i class="fa fa-tag"></i> Listar Productos</a></li>
                                    <li><a href=""><i class="fa fa-tag"></i> Presentación Farmacológica</a></li>
                                    <li><a href=""><i class="fa fa-tag"></i> Modo de Uso</a></li>
                                 </ul>
                              </li>

                              <li class="sidenav-dropdown">
                                 <a class="subnav-toggle" href="#"><i class="fa fa-truck"></i> Laboratorios <i class="fa fa-angle-down fa-angle-down  pull-right"></i></a>
                                 <ul class="nav sidenav-sub-menu">
                                    <li><a href="http://another.cl/laboratorios/create"><i class="fa fa-truck"></i> Registrar Laboratorio</a></li>
                                    <li><a href="http://another.cl/laboratorios"><i class="fa fa-truck"></i> Listar Laboratorios</a></li>
                                 </ul>
                              </li>

                              <li class="sidenav-dropdown">
                                 <a class="subnav-toggle" href="#"><i class="fa fa-truck"></i> Pedidos <i class="fa fa-angle-down fa-angle-down  pull-right"></i></a>
                                 <ul class="nav sidenav-sub-menu">
                                    <li><a href=""><i class="fa fa-truck"></i> Generar Orden de Compŕa</a></li>
                                    <li><a href=""><i class="fa fa-truck"></i> Listar Ordenes de Compra</a></li>
                                 </ul>
                              </li>

                              <li class="sidenav-dropdown">
                                 <a class="subnav-toggle" href="#"><i class="fa fa-truck"></i> Ventas <i class="fa fa-angle-down fa-angle-down  pull-right"></i></a>
                                 <ul class="nav sidenav-sub-menu">
                                    <li><a href=""><i class="fa fa-truck"></i> Generar Factura</a></li>
                                    <li><a href=""><i class="fa fa-truck"></i> Listar Facturas</a></li>
                                 </ul>
                              </li>
                              <br>
                             
                              <li><a href="http://another.cl/usuarios"><i class="fa fa-bookmark-o"></i> Usuarios</a></li>

                              <li class="sidenav-dropdown">
                                 <a class="subnav-toggle" href="#"><i class="fa fa-pencil-square-o"></i> Reportes <i class="fa fa-angle-down fa-angle-down  pull-right"></i></a>
                                 <ul class="nav sidenav-sub-menu">
                                    <li><a href="http://another.cl/messages/reporte1"><i class="fa fa-pencil-square-o "></i> Ventas Mensuales</a></li>
                                    <li><a href="http://another.cl/messages/reporte2"><i class="fa fa-pencil-square-o"></i>Utilidad Mensual</a></li>
                                     <li><a href="http://another.cl/messages/reporte3"><i class="fa fa-pencil-square-o"></i>Ventas Vendedor</a></li>
                                 </ul>
                              </li>
                              
                            
                             
                               <!--<li><a href=""><i class="fa fa-sign-out"></i> Salir</a></li>-->
                               <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                           </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="comments">
                           <div class="section-heading">Members</div>
                           <ul class="online-members">
                              <li><a href=""><img class="img-circle chat-image" src="@if(!Auth::guest()){{Auth::user()->img}} @else 'http://dashy.strapui.com/laravel/img/profile1.jpg' @endif" alt="">Kumar Sanket <i class="fa fa-circle pull-right text-success"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="http://dashy.strapui.com/laravel/img/user-icon.png" alt="">Kumar Pratik <i class="fa fa-circle pull-right text-success"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="http://dashy.strapui.com/laravel/img/user-icon.png" alt="">Megha Kumari <i class="fa fa-circle pull-right text-success"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="http://dashy.strapui.com/laravel/img/user-icon.png" alt="">Sankhadeep Roy <i class="fa fa-circle pull-right text-success"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="http://dashy.strapui.com/laravel/img/profile.jpg" alt="">Suraj Ahmad Choudhury <i class="fa fa-circle pull-right text-success"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="@if(!Auth::guest()){{Auth::user()->img}} @else 'http://dashy.strapui.com/laravel/img/profile1.jpg' @endif" alt="">Kumar Sanket <i class="fa fa-circle pull-right text-warning"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="http://dashy.strapui.com/laravel/img/user-icon.png" alt="">Megha Kumari <i class="fa fa-circle pull-right text-warning"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="http://dashy.strapui.com/laravel/img/user-icon.png" alt="">Kumar Pratik <i class="fa fa-circle pull-right text-warning"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="http://dashy.strapui.com/laravel/img/user-icon.png" alt="">Mrigank Mridul <i class="fa fa-circle pull-right text-muted"></i></a></li>
                              <li><a href=""><img class="img-circle chat-image" src="http://dashy.strapui.com/laravel/img/user-icon.png" alt="">Amith M S <i class="fa fa-circle pull-right text-muted"></i></a></li>
                           </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="charts">
                           <div class="section-heading">Charts</div>
                           <div class="section-content text-center">
                              <h4>Today's View</h4>
                              <div class="chart-container">
                                 <div id="sidebar-piechart" class="c3" style="max-height: 140px; position: relative;">
                                    <svg width="140" height="140" style="overflow: hidden;">
                                       <defs>
                                          <clipPath id="c3-1492647760038-clip">
                                             <rect width="140" height="116"></rect>
                                          </clipPath>
                                          <clipPath id="c3-1492647760038-clip-xaxis">
                                             <rect x="-31" y="-20" width="202" height="40"></rect>
                                          </clipPath>
                                          <clipPath id="c3-1492647760038-clip-yaxis">
                                             <rect x="-29" y="-4" width="20" height="140"></rect>
                                          </clipPath>
                                          <clipPath id="c3-1492647760038-clip-grid">
                                             <rect width="140" height="116"></rect>
                                          </clipPath>
                                          <clipPath id="c3-1492647760038-clip-subchart">
                                             <rect width="140"></rect>
                                          </clipPath>
                                       </defs>
                                       <g transform="translate(0.5,4.5)">
                                          <text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="70" y="58" style="opacity: 0;"></text>
                                          <rect class="c3-zoom-rect" width="140" height="116" style="opacity: 0;"></rect>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip)" class="c3-regions" style="visibility: hidden;"></g>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip-grid)" class="c3-grid" style="visibility: hidden;">
                                             <g class="c3-xgrid-focus">
                                                <line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="116" style="visibility: hidden;"></line>
                                             </g>
                                          </g>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip)" class="c3-chart">
                                             <g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;">
                                                <rect class=" c3-event-rect c3-event-rect-0" x="0" y="0" width="140" height="116"></rect>
                                             </g>
                                             <g class="c3-chart-bars">
                                                <g class="c3-chart-bar c3-target c3-target-1" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-shapes c3-shapes-1 c3-bars c3-bars-1" style="cursor: pointer;"></g>
                                                </g>
                                                <g class="c3-chart-bar c3-target c3-target-2" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-shapes c3-shapes-2 c3-bars c3-bars-2" style="cursor: pointer;"></g>
                                                </g>
                                                <g class="c3-chart-bar c3-target c3-target-3" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-shapes c3-shapes-3 c3-bars c3-bars-3" style="cursor: pointer;"></g>
                                                </g>
                                             </g>
                                             <g class="c3-chart-lines">
                                                <g class="c3-chart-line c3-target c3-target-1" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-shapes c3-shapes-1 c3-lines c3-lines-1"></g>
                                                   <g class=" c3-shapes c3-shapes-1 c3-areas c3-areas-1"></g>
                                                   <g class=" c3-selected-circles c3-selected-circles-1"></g>
                                                   <g class=" c3-shapes c3-shapes-1 c3-circles c3-circles-1" style="cursor: pointer;"></g>
                                                </g>
                                                <g class="c3-chart-line c3-target c3-target-2" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-shapes c3-shapes-2 c3-lines c3-lines-2"></g>
                                                   <g class=" c3-shapes c3-shapes-2 c3-areas c3-areas-2"></g>
                                                   <g class=" c3-selected-circles c3-selected-circles-2"></g>
                                                   <g class=" c3-shapes c3-shapes-2 c3-circles c3-circles-2" style="cursor: pointer;"></g>
                                                </g>
                                                <g class="c3-chart-line c3-target c3-target-3" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-shapes c3-shapes-3 c3-lines c3-lines-3"></g>
                                                   <g class=" c3-shapes c3-shapes-3 c3-areas c3-areas-3"></g>
                                                   <g class=" c3-selected-circles c3-selected-circles-3"></g>
                                                   <g class=" c3-shapes c3-shapes-3 c3-circles c3-circles-3" style="cursor: pointer;"></g>
                                                </g>
                                             </g>
                                             <g class="c3-chart-arcs" transform="translate(70,53)">
                                                <text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text>
                                                <g class="c3-chart-arc c3-target c3-target-1">
                                                   <g class=" c3-shapes c3-shapes-1 c3-arcs c3-arcs-1">
                                                      <path class=" c3-shape c3-shape c3-arc c3-arc-1" transform="scale(1,1)" style="fill: rgb(6, 197, 172); cursor: pointer; opacity: 1;" d="M-9.251788222064308,49.49269556908445A50.349999999999994,50.349999999999994 0 0,1 -33.92057565760415,-37.20909898206018L0,0Z"></path>
                                                   </g>
                                                   <text dy=".35em" class="" transform="translate(-22.27708417793645,6.338376928807033)" style="opacity: 1; text-anchor: middle; pointer-events: none;">35.3%</text>
                                                </g>
                                                <g class="c3-chart-arc c3-target c3-target-2">
                                                   <g class=" c3-shapes c3-shapes-2 c3-arcs c3-arcs-2">
                                                      <path class=" c3-shape c3-shape c3-arc c3-arc-2" transform="scale(1,1)" style="fill: rgb(63, 170, 227); cursor: pointer; opacity: 1;" d="M3.0830483168534612e-15,-50.349999999999994A50.349999999999994,50.349999999999994 0 1,1 -9.251788222064308,49.49269556908445L0,0Z"></path>
                                                   </g>
                                                   <text dy=".35em" class="" transform="translate(23.06244819071337,2.137050540619402)" style="opacity: 1; text-anchor: middle; pointer-events: none;">52.9%</text>
                                                </g>
                                                <g class="c3-chart-arc c3-target c3-target-3">
                                                   <g class=" c3-shapes c3-shapes-3 c3-arcs c3-arcs-3">
                                                      <path class=" c3-shape c3-shape c3-arc c3-arc-3" transform="scale(1,1)" style="fill: rgb(238, 99, 76); cursor: pointer; opacity: 1;" d="M-33.92057565760415,-37.20909898206018A50.349999999999994,50.349999999999994 0 0,1 -9.249144950560384e-15,-50.349999999999994L0,0Z"></path>
                                                   </g>
                                                   <text dy=".35em" class="" transform="translate(-8.366808540977198,-21.597222423291637)" style="opacity: 1; text-anchor: middle; pointer-events: none;">11.8%</text>
                                                </g>
                                             </g>
                                             <g class="c3-chart-texts">
                                                <g class="c3-chart-text c3-target c3-target-1" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-texts c3-texts-1"></g>
                                                </g>
                                                <g class="c3-chart-text c3-target c3-target-2" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-texts c3-texts-2"></g>
                                                </g>
                                                <g class="c3-chart-text c3-target c3-target-3" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-texts c3-texts-3"></g>
                                                </g>
                                             </g>
                                          </g>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip-grid)" class="c3-grid c3-grid-lines">
                                             <g class="c3-xgrid-lines"></g>
                                             <g class="c3-ygrid-lines"></g>
                                          </g>
                                          <g class="c3-axis c3-axis-x" clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip-xaxis)" transform="translate(0,116)" style="visibility: visible; opacity: 0;">
                                             <text class="c3-axis-x-label" transform="" x="140" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text>
                                             <g class="tick" transform="translate(70, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                </text>
                                             </g>
                                             <path class="domain" d="M0,6V0H140V6"></path>
                                          </g>
                                          <g class="c3-axis c3-axis-y" clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 0;">
                                             <text class="c3-axis-y-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="1.2em" style="text-anchor: end;"></text>
                                             <g class="tick" transform="translate(0,111)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">10</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,100)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">15</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,89)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">20</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,77)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">25</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,66)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">30</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,54)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">35</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,43)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">40</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,32)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">45</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,20)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">50</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,9)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">55</tspan>
                                                </text>
                                             </g>
                                             <path class="domain" d="M-6,1H0V116H-6"></path>
                                          </g>
                                          <g class="c3-axis c3-axis-y2" transform="translate(140,0)" style="visibility: hidden; opacity: 0;">
                                             <text class="c3-axis-y2-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text>
                                             <g class="tick" transform="translate(0,116)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,105)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.1</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,94)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.2</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,82)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.3</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,70)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.4</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,59)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.5</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,48)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.6</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,36)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.7</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,24)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.8</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,13)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.9</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,1)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">1</tspan>
                                                </text>
                                             </g>
                                             <path class="domain" d="M6,1H0V116H6"></path>
                                          </g>
                                       </g>
                                       <g transform="translate(0.5,140.5)" style="visibility: hidden;">
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip-subchart)" class="c3-chart">
                                             <g class="c3-chart-bars"></g>
                                             <g class="c3-chart-lines"></g>
                                          </g>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                             <rect class="background" x="0" width="140" style="visibility: hidden; cursor: crosshair;"></rect>
                                             <rect class="extent" x="0" width="0" style="cursor: move;"></rect>
                                             <g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;">
                                                <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                             </g>
                                             <g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;">
                                                <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                             </g>
                                          </g>
                                          <g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760038-clip-xaxis)" style="opacity: 0;">
                                             <g class="tick" transform="translate(70, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                </text>
                                             </g>
                                             <path class="domain" d="M0,6V0H140V6"></path>
                                          </g>
                                       </g>
                                       <g transform="translate(0,120)">
                                          <g class=" c3-legend-item c3-legend-item-1" style="visibility: visible; cursor: pointer;">
                                             <text x="41" y="9" style="pointer-events: none;">1</text>
                                             <rect class="c3-legend-item-event" x="27" y="-5" width="32" height="18" style="fill-opacity: 0;"></rect>
                                             <rect class="c3-legend-item-tile" x="27" y="0" width="10" height="10" style="pointer-events: none; fill: rgb(6, 197, 172);"></rect>
                                          </g>
                                          <g class=" c3-legend-item c3-legend-item-2" style="visibility: visible; cursor: pointer;">
                                             <text x="73" y="9" style="pointer-events: none;">2</text>
                                             <rect class="c3-legend-item-event" x="59" y="-5" width="32" height="18" style="fill-opacity: 0;"></rect>
                                             <rect class="c3-legend-item-tile" x="59" y="0" width="10" height="10" style="pointer-events: none; fill: rgb(63, 170, 227);"></rect>
                                          </g>
                                          <g class=" c3-legend-item c3-legend-item-3" style="visibility: visible; cursor: pointer;">
                                             <text x="105" y="9" style="pointer-events: none;">3</text>
                                             <rect class="c3-legend-item-event" x="91" y="-5" width="22" height="18" style="fill-opacity: 0;"></rect>
                                             <rect class="c3-legend-item-tile" x="91" y="0" width="10" height="10" style="pointer-events: none; fill: rgb(238, 99, 76);"></rect>
                                          </g>
                                       </g>
                                    </svg>
                                    <div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div>
                                 </div>
                              </div>
                              <h4>Today's Signups</h4>
                              <div class="chart-container2">
                                 <div id="sidebar-barchart" class="c3" style="max-height: 120px; position: relative;">
                                    <svg width="200" height="120" style="overflow: hidden;">
                                       <defs>
                                          <clipPath id="c3-1492647760115-clip">
                                             <rect width="197" height="66"></rect>
                                          </clipPath>
                                          <clipPath id="c3-1492647760115-clip-xaxis">
                                             <rect x="-31" y="-20" width="259" height="70"></rect>
                                          </clipPath>
                                          <clipPath id="c3-1492647760115-clip-yaxis">
                                             <rect x="-29" y="-4" width="21" height="90"></rect>
                                          </clipPath>
                                          <clipPath id="c3-1492647760115-clip-grid">
                                             <rect width="197" height="66"></rect>
                                          </clipPath>
                                          <clipPath id="c3-1492647760115-clip-subchart">
                                             <rect width="197"></rect>
                                          </clipPath>
                                       </defs>
                                       <g transform="translate(1.5,4.5)">
                                          <text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="98.5" y="33" style="opacity: 0;"></text>
                                          <rect class="c3-zoom-rect" width="197" height="66" style="opacity: 0;"></rect>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip)" class="c3-regions" style="visibility: visible;"></g>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip-grid)" class="c3-grid" style="visibility: visible;">
                                             <g class="c3-xgrid-focus">
                                                <line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="66" style="visibility: hidden;"></line>
                                             </g>
                                          </g>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip)" class="c3-chart">
                                             <g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;">
                                                <rect class=" c3-event-rect c3-event-rect-0" x="0.05555555555555536" y="0" width="21.88888888888889" height="66"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-1" x="22.055555555555557" y="0" width="21.88888888888889" height="66"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-2" x="44.05555555555556" y="0" width="21.88888888888889" height="66"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-3" x="66.05555555555556" y="0" width="21.88888888888889" height="66"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-4" x="88.05555555555556" y="0" width="21.88888888888889" height="66"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-5" x="110.05555555555556" y="0" width="21.88888888888889" height="66"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-6" x="132.05555555555554" y="0" width="21.88888888888889" height="66"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-7" x="154.05555555555554" y="0" width="21.88888888888889" height="66"></rect>
                                                <rect class=" c3-event-rect c3-event-rect-8" x="176.05555555555554" y="0" width="21.88888888888889" height="66"></rect>
                                             </g>
                                             <g class="c3-chart-bars">
                                                <g class="c3-chart-bar c3-target c3-target-data1" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1" style="cursor: pointer;">
                                                      <path class=" c3-shape c3-shape-0 c3-bar c3-bar-0" d="M 2.2444444444444436,66 L2.2444444444444436,61.56818181818183 L19.755555555555556,61.56818181818183 L19.755555555555556,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                      <path class=" c3-shape c3-shape-1 c3-bar c3-bar-1" d="M 24.244444444444444,66 L24.244444444444444,36.45454545454545 L41.75555555555556,36.45454545454545 L41.75555555555556,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                      <path class=" c3-shape c3-shape-2 c3-bar c3-bar-2" d="M 46.24444444444444,66 L46.24444444444444,51.22727272727273 L63.75555555555555,51.22727272727273 L63.75555555555555,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                      <path class=" c3-shape c3-shape-3 c3-bar c3-bar-3" d="M 68.24444444444444,66 L68.24444444444444,6.909090909090911 L85.75555555555556,6.909090909090911 L85.75555555555556,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                      <path class=" c3-shape c3-shape-4 c3-bar c3-bar-4" d="M 90.24444444444444,66 L90.24444444444444,29.068181818181813 L107.75555555555556,29.068181818181813 L107.75555555555556,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                      <path class=" c3-shape c3-shape-5 c3-bar c3-bar-5" d="M 112.24444444444444,66 L112.24444444444444,20.20454545454545 L129.75555555555556,20.20454545454545 L129.75555555555556,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                      <path class=" c3-shape c3-shape-6 c3-bar c3-bar-6" d="M 134.24444444444444,66 L134.24444444444444,52.70454545454545 L151.75555555555556,52.70454545454545 L151.75555555555556,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                      <path class=" c3-shape c3-shape-7 c3-bar c3-bar-7" d="M 156.24444444444444,66 L156.24444444444444,47.5340909090909 L173.75555555555556,47.5340909090909 L173.75555555555556,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                      <path class=" c3-shape c3-shape-8 c3-bar c3-bar-8" d="M 178.24444444444444,66 L178.24444444444444,58.61363636363637 L195.75555555555556,58.61363636363637 L195.75555555555556,66 z" style="stroke: rgb(6, 197, 172); fill: rgb(6, 197, 172); opacity: 1;"></path>
                                                   </g>
                                                </g>
                                             </g>
                                             <g class="c3-chart-lines">
                                                <g class="c3-chart-line c3-target c3-target-data1" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"></g>
                                                   <g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"></g>
                                                   <g class=" c3-selected-circles c3-selected-circles-data1"></g>
                                                   <g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1" style="cursor: pointer;"></g>
                                                </g>
                                             </g>
                                             <g class="c3-chart-arcs" transform="translate(98.5,28)">
                                                <text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text>
                                             </g>
                                             <g class="c3-chart-texts">
                                                <g class="c3-chart-text c3-target c3-target-data1" style="opacity: 1; pointer-events: none;">
                                                   <g class=" c3-texts c3-texts-data1"></g>
                                                </g>
                                             </g>
                                          </g>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip-grid)" class="c3-grid c3-grid-lines">
                                             <g class="c3-xgrid-lines"></g>
                                             <g class="c3-ygrid-lines"></g>
                                          </g>
                                          <g class="c3-axis c3-axis-x" clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip-xaxis)" transform="translate(0,66)" style="visibility: visible; opacity: 1;">
                                             <text class="c3-axis-x-label" transform="" x="197" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text>
                                             <g class="tick" transform="translate(11, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(33, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">1</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(55, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">2</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(77, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">3</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(99, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">4</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(121, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">5</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(143, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">6</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(165, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">7</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(187, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">8</tspan>
                                                </text>
                                             </g>
                                             <path class="domain" d="M0,6V0H197V6"></path>
                                          </g>
                                          <g class="c3-axis c3-axis-y" clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;">
                                             <text class="c3-axis-y-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="1.2em" style="text-anchor: end;"></text>
                                             <g class="tick" transform="translate(0,66)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">0</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,59)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">50</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,52)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">100</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,44)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">150</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,37)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">200</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,30)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">250</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,22)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">300</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,15)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">350</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,7)" style="opacity: 1;">
                                                <line x2="-6"></line>
                                                <text x="-9" y="0" style="text-anchor: end;">
                                                   <tspan x="-9" dy="3">400</tspan>
                                                </text>
                                             </g>
                                             <path class="domain" d="M-6,1H0V66H-6"></path>
                                          </g>
                                          <g class="c3-axis c3-axis-y2" transform="translate(197,0)" style="visibility: hidden; opacity: 1;">
                                             <text class="c3-axis-y2-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text>
                                             <g class="tick" transform="translate(0,66)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,60)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.1</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,54)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.2</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,47)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.3</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,40)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.4</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,34)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.5</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,28)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.6</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,21)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.7</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,14)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.8</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,8)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">0.9</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(0,1)" style="opacity: 1;">
                                                <line x2="6" y2="0"></line>
                                                <text x="9" y="0" style="text-anchor: start;">
                                                   <tspan x="9" dy="3">1</tspan>
                                                </text>
                                             </g>
                                             <path class="domain" d="M6,1H0V66H6"></path>
                                          </g>
                                       </g>
                                       <g transform="translate(1.5,120.5)" style="visibility: hidden;">
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip-subchart)" class="c3-chart">
                                             <g class="c3-chart-bars"></g>
                                             <g class="c3-chart-lines"></g>
                                          </g>
                                          <g clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                             <rect class="background" x="0" width="197" style="visibility: hidden; cursor: crosshair;"></rect>
                                             <rect class="extent" x="0" width="0" style="cursor: move;"></rect>
                                             <g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;">
                                                <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                             </g>
                                             <g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;">
                                                <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                             </g>
                                          </g>
                                          <g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://dashy.strapui.com/laravel/blank#c3-1492647760115-clip-xaxis)" style="opacity: 1;">
                                             <g class="tick" transform="translate(11, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(33, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">1</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(55, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">2</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(77, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">3</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(99, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">4</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(121, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">5</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(143, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">6</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(165, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">7</tspan>
                                                </text>
                                             </g>
                                             <g class="tick" transform="translate(187, 0)" style="opacity: 1;">
                                                <line y2="6" x1="0" x2="0"></line>
                                                <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                   <tspan x="0" dy=".71em" dx="0">8</tspan>
                                                </text>
                                             </g>
                                             <path class="domain" d="M0,6V0H197V6"></path>
                                          </g>
                                       </g>
                                       <g transform="translate(0,100)">
                                          <g class=" c3-legend-item c3-legend-item-data1" style="visibility: visible; cursor: pointer;">
                                             <text x="91.328125" y="9" style="pointer-events: none;">data1</text>
                                             <rect class="c3-legend-item-event" x="77.328125" y="-5" width="45.34375" height="18" style="fill-opacity: 0;"></rect>
                                             <rect class="c3-legend-item-tile" x="77.328125" y="0" width="10" height="10" style="pointer-events: none; fill: rgb(6, 197, 172);"></rect>
                                          </g>
                                       </g>
                                    </svg>
                                    <div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div>
                                 </div>
                              </div>
                              <hr class="lighter">
                              <div class="transaction">
                                 <h4 class="eft">Today's Signups</h4>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-  " role="progressbar" aria-valuenow="67.34%" aria-valuemin="0" aria-valuemax="100" style="width: 67.34%%;">67.34%</div>
                                 </div>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-success  " role="progressbar" aria-valuenow="87.95%" aria-valuemin="0" aria-valuemax="100" style="width: 87.95%%;">87.95%</div>
                                 </div>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-warning  " role="progressbar" aria-valuenow="27.64%" aria-valuemin="0" aria-valuemax="100" style="width: 27.64%%;">27.64%</div>
                                 </div>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-danger  " role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;">12</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="calendar">
                           <div class="section-heading">Today</div>
                           <ul class="today-ul">
                              <li>
                                 <a href="">
                                    <div class="panel-here"><span class="label label-primary">7:00 AM</span></div>
                                    <div class="happened">something happened</div>
                                 </a>
                              </li>
                              <li>
                                 <a href="">
                                    <div class="panel-here"><span class="label label-primary">8:00 AM</span></div>
                                    <div class="happened">something more happenned</div>
                                 </a>
                              </li>
                              <li>
                                 <a href="">
                                    <div class="panel-here"><span class="label label-primary">9:00 AM</span></div>
                                    <div class="happened">lorem ipsum happened</div>
                                 </a>
                              </li>
                           </ul>
                           <div class="section-heading">7th April 2015</div>
                           <ul class="today-ul dead">
                              <li>
                                 <a href="">
                                    <div class="panel-here"><span class="label label-primary">7:00 AM</span></div>
                                    <div class="happened">something happened</div>
                                 </a>
                              </li>
                              <li>
                                 <a href="">
                                    <div class="panel-here"><span class="label label-primary">8:00 AM</span></div>
                                    <div class="happened">something more happenned</div>
                                 </a>
                              </li>
                              <li>
                                 <a href="">
                                    <div class="panel-here"><span class="label label-primary">9:00 AM</span></div>
                                    <div class="happened">lorem ipsum happened</div>
                                 </a>
                              </li>
                           </ul>
                           <div class="section-heading">9th April 2015</div>
                           <ul class="today-ul dead">
                              <li>
                                 <a href="">
                                    <div class="panel-here"><span class="label label-primary">7:00 AM</span></div>
                                    <div class="happened">something happened</div>
                                 </a>
                              </li>
                              <li>
                                 <a href="">
                                    <div class="panel-here"><span class="label label-primary">8:00 AM</span></div>
                                    <div class="happened">something more happenned</div>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="notification">
                           <div class="section-heading">Notifications</div>
                           <div class="notification-info">
                              <ul class="notif-ul">
                                 <li>
                                    <a href="" class="notification-wrap">
                                       <div class="notification-media">
                                          <span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                          <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                          </span>
                                          <div><span class="label label-danger">Urgent</span></div>
                                       </div>
                                       <div class="notification-info">
                                          <div class="time-info"><small><i class="fa fa-comments"></i> 2 hours ago</small></div>
                                          <h5>Heading </h5>
                                          <p>Hey Anna! Sorry for delayed response. I've just finished reading the mail you sent couple of...</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="" class="notification-wrap">
                                       <div class="pull-left notification-media">
                                          <span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                          <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                          </span>
                                          <div><span class="label label-info">New</span></div>
                                       </div>
                                       <div class="notification-info">
                                          <div class="time-info"><small><i class="fa fa-comments"></i> 23rd Dec 2014</small></div>
                                          <h5>Heading </h5>
                                          <p>Hey Anna! Sorry for delayed response. I've just finished reading the mail you sent couple of...</p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                           <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                           <div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endif
         <div id="body-container">
            <div class="page-title clearfix">
               <div class="pull-left">
                  <h1>@yield('titulo')</h1>
                  <small class="subtitle"> @yield('subtitulo')</small>
               </div>
              
            </div>
            <div class="conter-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well wellb">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-wrap" class="footer">
               Copyright © {{date("Y")}} Droguería Concepción
               <span class="pull-right">
               <a href="javascript:;"><i class="fa "></i></a>
               <a href="javascript:;">&nbsp;<i class="fa "></i></a>
               </span>
            </div>
         </div>
      </div>


      
    <script type="text/javascript">

	$(function(){

		// Sidebar Charts

		// Pie Chart
		var chart3 = c3.generate({
		   bindto: '#sidebar-piechart',
		    data: {
		         
		        // iris data from R
		        columns: [
		            ['1', 36],
		            ['2', 54],
		            ['3', 12],
		        ],
		        type : 'pie',
		        onclick: function (d, i) { console.log("onclick", d, i); },
		        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
		        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
		    },
		    color: {
		        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
		    },
		    pie: {
		      expand: true
		    },
		    size: {
		      width: 140,
		      height: 140
		    },
		    tooltip: {
		      show: false
		    }

		});



		// Bar Chart
		var chart6 = c3.generate({
		    bindto: '#sidebar-barchart',
		    data: {
		        columns: [
		            ['data1', 30, 200, 100, 400, 250, 310, 90, 125, 50]
		        ],
		        type: 'bar'
		    },
		    bar: {
		        width: {
		            ratio: 0.8
		        }
		    },
		    size: {
		      width: 200,
		      height: 120
		    },
		    tooltip: {
		      show: false
		    },
		    color: {
		        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
		    },
		    axis: {
		      y: {
		        show: false,
		        color: '#ffffff'
		      }
		}
		});


		// Sidebar Tabs
		$('#navTabs .sidebar-top-nav a').click(function (e) {
		 	e.preventDefault()
		 	$(this).tab('show');

		 	setTimeout(function(){
				$('.tab-content-scroller').perfectScrollbar('update');		 		
		 	}, 10);

		});



		$('.subnav-toggle').click(function() {
			$(this).parent('.sidenav-dropdown').toggleClass('show-subnav');
			$(this).find('.fa-angle-down').toggleClass('fa-flip-vertical');

		 	setTimeout(function(){
				$('.tab-content-scroller').perfectScrollbar('update');		 		
		 	}, 500);

		});

	    $('.sidenav-toggle').click(function() {
	        $('#app-container').toggleClass('push-right');

		 	setTimeout(function(){
				$('.tab-content-scroller').perfectScrollbar('update');		 		
		 	}, 500);

	    });


	    // Boxed Layout Toggle
		$('#boxed-layout').click(function() {
			
	        $('body').toggleClass('box-section');

	        var hasClass = $('body').hasClass('box-section');

	        $.get('/api/change-layout?layout='+ (hasClass ? 'boxed': 'fluid'));

		});



		$('.tab-content-scroller').perfectScrollbar();

		$('.theme-picker').click(function() {
			changeTheme($(this).attr('data-theme'));
		});


	});

	function changeTheme(theme) {

		$('<link>')
		  .appendTo('head')
		  .attr({type : 'text/css', rel : 'stylesheet'})
		  .attr('href', '/css/app-'+theme+'.css');

		$.get('api/change-theme?theme='+theme);

	}
	
	
</script>
<script type="text/javascript">
    $(".select2").select2();
</script>
   </body>
</html>