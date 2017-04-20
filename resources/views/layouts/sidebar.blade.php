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