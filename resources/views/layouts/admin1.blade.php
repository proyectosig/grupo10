<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ACUDE DE RL</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!--Fullcalendar-->
    <link rel="stylesheet" href="{{asset('fullcalendar/fullcalendar.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{url('home')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>DE</b>RL</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ACUDE DE RL</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      {{ Auth::user()->email }}
                      <small>ACUDE DE RL</small>
                      <small>SIG115</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Reportes Estrategicos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('parametros1')}}"><i class="fa fa-circle-o"></i> Transacciones de personas juridicas</a></li>
                <!--<li><a href="#"><i class="fa fa-circle-o"></i> Registro de Medico</a></li>-->
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('parametros2')}}"><i class="fa fa-circle-o"></i> Creditos con monto mayor a $5715</a></li>
                <!--<li><a href="#"><i class="fa fa-circle-o"></i> Registro de Medico</a></li>-->
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('parametros3')}}"><i class="fa fa-circle-o"></i> Directivos mayor numero de transacciones</a></li>
                <!--<li><a href="#"><i class="fa fa-circle-o"></i> Registro de Medico</a></li>-->
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('parametros4')}}"><i class="fa fa-circle-o"></i> Ahorros menores a $1000</a></li>
                <!--<li><a href="#"><i class="fa fa-circle-o"></i> Registro de Medico</a></li>-->
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('parametros5')}}"><i class="fa fa-circle-o"></i> Socios con saldo deudor</a></li>
                <!--<li><a href="#"><i class="fa fa-circle-o"></i> Registro de Medico</a></li>-->
              </ul>
            </li>
           
            <!--
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Doctores</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('clinica/medico')}}"><i class="fa fa-circle-o"></i>Gestión de Medico</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>-->

            <!--
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span></span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
               -->         
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de Informacion Gerencial ACUDE DE RL: USUARIO ESTRATEGICO</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                                  <!--Contenido-->
                              @yield('contenido')
                                  <!--Fin Contenido-->
                           </div>
                        </div>
                            
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!--Fullcalendar-->
    <script type="text/javascript" src="{{ asset('fullcalendar/lib/moment.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('fullcalendar/fullcalendar.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('fullcalendar/locale/es.js') }} "></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>

     @yield('scripts')
      <script>
                $(function () {
                  //iCheck for checkbox and radio inputs
                  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                  });
                  //Red color scheme for iCheck
                  $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                  });
                  //Flat red color scheme for iCheck
                  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                  });
                });
      </script>
    
  </body>
</html>
