@extends('admin.template.main')
 
 @section('body')

 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse bg-inverse" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('') }}">Gestor Informatico | Inicio</a>
            </div>
            <!-- /.navbar-header -->
         
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                 <li><a href="{{ route('admin.auth.login') }}">Iniciar Session </a></li>
                 <li><a href="{{ route('admin.users.create') }}">Registrarse</a></li>

                @if(Auth::user())
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{ Auth::user()->name }}
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ route('admin.auth.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                @endif
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    @if(Auth::user())
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                       

                            <div class="input-group custom-search-form">
                                
                            </div>
                            <!-- /input-group -->

                        </li>

                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{route ('admin.index') }}"><i class="fa fa-home fa-fw"></i>Inicio</a>
                        </li>
                    </ul>
                    @endif
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
            <div class="row"> 
            @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop