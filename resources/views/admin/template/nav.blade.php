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

                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                        @if(Auth::user())

                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->

                        </li>

                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{route ('admin.index') }}"><i class="fa fa-home fa-fw"></i>Inicio</a>
                        </li>
                        <li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Item 2</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*tables') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-table fa-fw"></i> Item 3</a>
                        </li>
                        <li {{ (Request::is('*forms') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-edit fa-fw"></i> Item 4</a>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Elements Items<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('') }}">Sub Item 1</a>
                                </li>
                                <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('' ) }}">Sub Item 2</a>
                                </li>
                                <li {{ (Request::is('*notifications') ? 'class="active"' : '') }}>
                                    <a href="{{ url('') }}">Sub Item 3</a>
                                </li>
                                <li {{ (Request::is('*typography') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('') }}">Sub Item 4</a>
                                </li>
                                <li {{ (Request::is('*icons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('') }}"> Sub Item 5</a>
                                </li>
                                <li {{ (Request::is('*grid') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('') }}">Sub Item 6</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Item 5<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*blank') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('') }}">Blank Page</a>
                                </li>
                                <li>
                                    <a href="{{ url ('') }}">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-file-word-o fa-fw"></i> Item 6</a>
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