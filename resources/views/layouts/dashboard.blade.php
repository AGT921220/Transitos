<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Total Cargo | Plataforma</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--


  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->

<!--SCRIPT ANALYTICS-->
@include('dashboard.partials.analytics')

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">




<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts
<script src="{{ asset('bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js')}}"></script>
-->

<!-- Sparkline -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<!-- Slimscroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>

<!-- COMENTA LO DE BOOTSTRAP CSS, PERO RESPALDA ESTE ARCHIVO -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TTC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TTC ERP </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Información de usuario lateral -->
          @include('dashboard.partials.navbar.info_user')
          <!-- Ajustes Sidebar -->
          @include('dashboard.partials.navbar.control_sidebar')

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset(auth()->user()->user_profile) }}" class="img-circle" alt="User Image">

        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }} </p>
        </div>
      </div>


      <!-- Búsqueda -->
      @include('dashboard.partials.search')
      <!-- Búsqueda -->

      <!-- Menu Principal -->


      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fa fa-book"></i><span>Utilerías</span>
                    <span class="pull-right-container">
                        <i class="fa  fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu menu-open treeview-menu-visible">

              @include('dashboard.partials.contenido.movimientos')
                </ul>
            </li>
        </li>
    </ul>
    <!--Provisional-->

<<!--Catálogos-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Mis Catálogos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> País</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Estados</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Ciudades</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Colonias</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Código postal</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Empleados</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Puestos</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Clientes</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Empresas</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Moneda</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Familia</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Fabricante</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Unidad de medida</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Proveedor</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Tipo de traslado</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Tipo unidad</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Unidad</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Tipo combustible</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Código SAT</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Subcontratados</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Encargado de recibo</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Encargado de yarda</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Sellos</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Inbon</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Casetas</a></li>
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Yardas</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Rutas</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Servicios</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Llantas</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Incidencias</a></li>

          </ul>
        </li>

        <!--Operaciones-->
        <li class="treeview">
            <a href="#">
              <i class="fa fa-truck"></i> <span>Mis Operaciones</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Cotizaciones
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Nueva
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="#"><i class="fa fa-circle-o"></i> Directo</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Consolidado</a></li>
                        </ul>
                      </li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Corregir</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Aprobar</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Cancelar</a></li>

                </ul>
              </li>


              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Traslados
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">

                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Completar información</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Iniciar viaje</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Visualizar viaje</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Cancelar</a></li>
                        </ul>
                      </li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Corregir</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Aprobar</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Cancelar</a></li>

                </ul>
              </li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Carta porte</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Incidencias</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Transporte de personal</a></li>
            </ul>
          </li>


<!--Mis gastos-->
<li class="treeview">
    <a href="#">
      <i class="fa fa-money"></i> <span>Mis Gastos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Compras
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Insumos de oficina</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Refacciones</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Polizas de servicios</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Devoluciones</a></li>

        </ul>
      </li>

    </ul>
  </li>
<!--Mis finanzas-->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-line-chart"></i>
      <span>Mis Finanzas</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Inversiones</a></li>
      <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Informes gerenciales</a></li>

    </ul>
  </li>
<!--Mi administración-->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-users"></i>
      <span>Mi Administración</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Recursos humanos</a></li>
      <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Caja chica</a></li>
    </ul>
  </li>
<!--Mi contabilidad-->
<li class="treeview">
    <a href="#">
      <i class="fa fa-calculator"></i>
      <span>Mi Contabilidad</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Cfdi de traslado</a></li>
      <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Cuentas por pagar</a></li>
      <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Cuentas por cobrar</a></li>
      <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Pagos</a></li>
      <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Bancos</a></li>
      <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Pago a conductores</a></li>
      <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Activos fijos</a></li>
      <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Contabilidad financiera</a></li>
    </ul>
  </li>


<!--Mi taller -->
<li class="treeview">
    <a href="#">
      <i class="fa fa-tachometer"></i> <span>Mi Taller</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Reparaciones <span class="pull-right-container">
            <a href="#"><i class="fa fa-circle-o"></i> Pedidos a proveedores <span class="pull-right-container">
                <a href="#"><i class="fa fa-circle-o"></i> Contratos <span class="pull-right-container">
        <a href="#"><i class="fa fa-circle-o"></i> Inventario
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Recepción</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Consumos</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Traspasos</a></li>
        </ul>
      </li>

    </ul>
  </li>
<!--Mi gestión de documentos-->
<li class="treeview">
    <a href="#">
      <i class="fa fa-file"></i> <span>Mi Gestión Documentos</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Safety
          <span class="pull-right-container">
          </span>
        </a>

      </li>

    </ul>
  </li>
  <!-- Mi CRM -->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-balance-scale"></i> <span>Mi CRM</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
  </li>
  <!--Mi Power BI-->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-area-chart"></i> <span>Mi Power BI</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Safety
          <span class="pull-right-container">
          </span>
        </a>

      </li>

    </ul>
  </li>
  <!--Mis Reportes-->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i> <span>Mis Reportes</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Safety
          <span class="pull-right-container">
          </span>
        </a>

      </li>

    </ul>
  </li>

  <!--Mi configuración-->
  <li class="treeview">
    <a href="#">
      <i class="fa fa-cog"></i> <span>Mi Configuración</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
     </li>
          <!-- Modulos -->
      <!-- Menu Principal ***** -->

<!--Salir del sistema-->
<li class="treeview">
    <a href="#">
      <i class="fa fa-sign-out"></i> <span>Salir de TTC</span>
      <span class="pull-right-container">

      </span>
    </a>
     </li>
    </section>
    <!-- /.sidebar -->
  </aside>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                <h1>Dashboard <small>Panel de opciones</small></h1>
                <ol class="breadcrumb">

                </ol>
                </section>

    <!-- Main content -->
          <section class="content">
            @if ( session('success') )
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @elseif(session('mensaje'))
            <div class="alert alert-warning">{{ session('mensaje') }}</div>
        @endif

    <main class="py-4">
        @yield('content')
      </main>

    </section>

</div>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">

    </div>
    <strong>Copyright &copy; 2020 <a>TTC ERP</a>.</strong>  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">

        <!-- /.control-sidebar-menu -->


        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->








<!-- AdminLTE dashboard demo (This is only for demo purposes)
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
-->

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>



<script src="{{ asset('chart/Chart.js')}}"></script>
<script src="{{ asset('chart/utils.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>


</body>
</html>
