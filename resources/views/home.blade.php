@extends('layouts.app')
@section('titulo', 'Bienvenido')
@section('subtitulo', '')
@section('content')
<h1>Pagar JCB</h1>
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

<hr>
<div class="inbox-container-wrap">
   <div class="inbox-container">
      <div class="col email-options ps-container" perfect-scrollbar="" wheel-propagation="true" suppress-scroll-x="true">
         <div class="padding-15">
            <div class="butt-container">
               <a href="/messages/compose" class="btn btn-primary btn-block btn-rounded">Redactar</a>
            </div>
            <ul class="main-options">
               <li class="activeli">
                  <a href="/messages/inbox">
                  <span class="title"> &nbsp; Bandeja de entrada</span>
                  <span class="badge pull-right">10</span>
                  </a>
               </li>
               <li>
                  <a href="/messages/inbox">
                  <span class="title"> &nbsp; Spam</span>
                  </a>
               </li>
               <li>
                  <a href="/messages/inbox">
                  <span class="title"> &nbsp; Borradores</span>
                  <span class="badge pull-right">16</span>
                  </a>
               </li>
               <li>
                  <a href="">
                  <span class="title"> &nbsp; Enviados</span>
                  </a>
               </li>
               <li>
                  <a href="/messages/inbox">
                  <span class="title"> &nbsp; Basura</span>
                  </a>
               </li>
               <hr class="poor">
               <h5>LABELS</h5>
               <li>
                  <a href="/messages/inbox">
                  <span class="title"> &nbsp; Clientes <i class="fa fa-stop pull-right faorange"></i></span>
                  </a>
               </li>
               <li>
                  <a href="/messages/inbox">
                  <span class="title"> &nbsp; Empresa <i class="fa fa-stop pull-right fayellow"></i></span>
                  </a>
               </li>
               <li>
                  <a href="/messages/inbox">
                  <span class="title"> &nbsp; Familia <i class="fa fa-stop pull-right facyan"></i></span>
                  </a>
               </li>
               <li>
                  <a href="/messages/inbox">
                  <span class="title"> &nbsp; Amigos <i class="fa fa-stop pull-right fapurple"></i></span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="message-list-wrapper">
      <div class="searchbox">
         <span class="sebox">Bandeja de Entrada</span> <br>(14 sin leer) <i class="fa fa-envelope-o"></i>
         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Buscar...">
      </div>
      <div class="wrap-list">
         <div class="messages-list">
            <ul>
               <li class="messages-item">
                  <a href="#">
                     <div class="leftist"><i class="fa fa-star"></i>
                        <label class="checkbox1" for="Option45">
                        <input id="Option45" type="checkbox" class="">
                        <span></span>
                        </label>
                     </div>
                     <span class="messages-item-subject"> Nicole Bell</span>
                     <span class="date-class text-muted pull-right"><i class="fa fa-paperclip"></i>&nbsp;7th Jan</span>
                     <span class="messages-item-content">
                        <p>Hi Peter, Thanks for the e-mail. Lorem ipsum dolor sit amet,</p>
                     </span>
                  </a>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option55">
                     <input id="Option55" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> John Doe </span>
                  <span class="date-class text-muted pull-right"><i class="fa fa-paperclip"></i>&nbsp;4th Jan</span>
                  <span class="messages-item-content">
                     <p>Dear Mr. Clarks I am interested in Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item active-message">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option65">
                     <input id="Option65" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> Jane Doe </span>
                  <span class="date-class text-muted pull-right">&nbsp;1st Jan</span>
                  <span class="messages-item-content">
                     <p>Dear Mr. Clarks In response Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star fa-starred"></i>
                     <label class="checkbox1" for="Option42">
                     <input id="Option42" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> Peter Drury </span>
                  <span class="date-class text-muted pull-right">&nbsp;29th Dec</span>
                  <span class="messages-item-content">
                     <p>Dear Mr. Clarks, As we discussed Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option32">
                     <input id="Option32" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> John Smith </span>
                  <span class="date-class text-muted pull-right"><i class="fa fa-paperclip"></i>&nbsp;26th Dec</span>
                  <span class="messages-item-content">
                     <p>Dear Peter, Good Day! Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option92">
                     <input id="Option92" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject">Congratulations </span>
                  <span class="date-class text-muted pull-right">&nbsp;7th jan</span>
                  <span class="messages-item-content">
                     <p>Dear friend Peter Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option30">
                     <input id="Option30" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> Sincere request to keep in touch.</span>
                  <span class="date-class text-muted pull-right"><i class="fa fa-paperclip"></i>&nbsp;7th jan</span>
                  <span class="messages-item-content">
                     <p>Dear Mr. Clarks,I was shocked Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <a href="#">
                     <div class="leftist"><i class="fa fa-star"></i>
                        <label class="checkbox1" for="Option45">
                        <input id="Option45" type="checkbox" class="">
                        <span></span>
                        </label>
                     </div>
                     <span class="messages-item-subject"> Nicole Bell</span>
                     <span class="date-class text-muted pull-right"><i class="fa fa-paperclip"></i>&nbsp;7th Jan</span>
                     <span class="messages-item-content">
                        <p>Hi Peter, Thanks for the e-mail. Lorem ipsum dolor sit amet,</p>
                     </span>
                  </a>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option55">
                     <input id="Option55" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> John Doe </span>
                  <span class="date-class text-muted pull-right"><i class="fa fa-paperclip"></i>&nbsp;4th Jan</span>
                  <span class="messages-item-content">
                     <p>Dear Mr. Clarks I am interested in Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option65">
                     <input id="Option65" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> Jane Doe </span>
                  <span class="date-class text-muted pull-right">&nbsp;1st Jan</span>
                  <span class="messages-item-content">
                     <p>Dear Mr. Clarks In response Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star fa-starred"></i>
                     <label class="checkbox1" for="Option42">
                     <input id="Option42" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> Peter Drury </span>
                  <span class="date-class text-muted pull-right">&nbsp;29th Dec</span>
                  <span class="messages-item-content">
                     <p>Dear Mr. Clarks, As we discussed Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option32">
                     <input id="Option32" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> John Smith </span>
                  <span class="date-class text-muted pull-right"><i class="fa fa-paperclip"></i>&nbsp;26th Dec</span>
                  <span class="messages-item-content">
                     <p>Dear Peter, Good Day! Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option92">
                     <input id="Option92" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject">Congratulations </span>
                  <span class="date-class text-muted pull-right">&nbsp;7th jan</span>
                  <span class="messages-item-content">
                     <p>Dear friend Peter Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
               <li class="messages-item">
                  <div class="leftist"><i class="fa fa-star"></i>
                     <label class="checkbox1" for="Option30">
                     <input id="Option30" type="checkbox" class="">
                     <span></span>
                     </label>
                  </div>
                  <span class="messages-item-subject"> Sincere request to keep in touch.</span>
                  <span class="date-class text-muted pull-right"><i class="fa fa-paperclip"></i>&nbsp;7th jan</span>
                  <span class="messages-item-content">
                     <p>Dear Mr. Clarks,I was shocked Lorem ipsum dolor sit amet,</p>
                  </span>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="text-wrapper bg-white">
      <div class="wrap-message">
         <div class="n0-scroll">
            <div class="message-topic">
               <i class="fa fa-star m-r-xs text-primary"></i> Development Files <span class="pull-right text-muted"><a href=""><i class="fa fa-reply"></i></a><a href=""><i class="fa fa-trash-o"></i></a></span>
            </div>
            <div class="message-sender">
               <img class="img-circle sender-img m-r-xs" src="http://dashy.strapui.com/laravel/img/profile1.jpg" alt="">
               <a href="#">Kumar Sanket</a> to <a href="#">me</a> &nbsp;<i class="fa fa-caret-square-o-down"></i>
               <small class="pull-right m-t-sm">
               <i class="fa fa-paperclip"></i> &nbsp;<a href="javascript:;">(2)</a> &nbsp;&nbsp; Today 7:30 AM
               </small>
            </div>
         </div>
         <div class="message-content">
            <p>Hi Peter,</p>
            <p>Thanks for the e-mail. It is always nice to hear from people, especially from you, Scott.</p>
            <p>I have not got any reply, a positive or negative one, from Seibido yet.<br>Let's wait and hope that it will make a BOOK.</p>
            <p>Have you finished your paperwork for Kaken and writing academic articles?<br>If you have some free time in the near future, I want to meet you and explain to you our next project.</p>
            <p>Why not drink out in Hiroshima if we are accepted?<br>We need to celebrate ourselves, don't we?<br>Let's have a small end-of-the-year party!</p>
            <p>Sincerely, K. Nakagawa</p>
         </div>
         <div class="messagefooter">
            <button type="button" class="btn btn-primary btn-rounded pull-right"><i class="fa fa-reply"></i> Responder</button>
         </div>
      </div>
   </div>
</div>
@endsection
