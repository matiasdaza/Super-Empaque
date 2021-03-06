<?php 
include ('../../conexion/conexion.php');
session_start();
if(!isset($_SESSION["USUARIO"])){
  header('location: ../../registro_usuario/login.html');
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>¡Súper Empaque!</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="../Coordinador.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>E</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>¡Súper</b>Empaque!</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../imagenes/logo.jpg" class="user-image" alt="User Image">
              <?php
              if(isset($_SESSION['USUARIO'])){
                echo "<span>".$_SESSION['USUARIO']['USU_NOMBRES']."</span>";
                $usuariorun=$_SESSION['USUARIO']['USU_RUN'];
              }
              ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../imagenes/logo.jpg" class="img-circle" alt="User Image">
                <?php
                    $tipousuario="Coordinador";
                    echo "<p>".$_SESSION['USUARIO']['USU_NOMBRES']." - ".$tipousuario."</p>";
                ?>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
              <center>
                <div class="pull-left">
                  <a href="CambioContrasenia.php" class="btn btn-default btn-flat">Cambiar contraseña</a>
                </div>
                <div class="pull-right">
                  <a href="../../registro_usuario/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </center>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../imagenes/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php
            if(isset($_SESSION['USUARIO'])){
              echo "<p>".$_SESSION['USUARIO']['USU_NOMBRES']." ".$_SESSION['USUARIO']['USU_APAT']."</p>";
            }
          ?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!--Menú home -->
      <ul class="sidebar-menu">
        <li class="header">MENÚ</li>
        <li class="treeview">
          <a href="../Coordinador.php">
            <i class="fa fa-home"></i> <span>Home</span> <!-- La class de aquí es para el icono -->
            <!-- <span class="pull-right-container"> esto es para que se despliegue el menú -->
            <!-- <i class="fa fa-angle-left pull-right"></i>-->
            <!--</span>-->
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-exclamation"></i>
            <span>Faltas</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="agregar_falta.php"><i class="fa fa-circle-o"></i>Agregar Falta</a></li>
            <li><a href="Eliminar_falta.php"><i class="fa fa-circle-o"></i> Eliminar Falta</a></li>
            <li><a href="Modificar_falta.php"><i class="fa fa-circle-o"></i> Modificar Falta</a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Justificaciones</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Estado_justificacion.php"><i class="fa fa-circle-o"></i>Estado de justificaciones</a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Mantención de tablas</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Tablas_basicas/Test.php"><i class="fa fa-circle-o"></i>Tabla Estado</a></li>
            <li><a href="Tablas_basicas/Tcest.php"><i class="fa fa-circle-o"></i>Tabla Casa de estudio</a></li>
            <li><a href="Tablas_basicas/Tsit.php"><i class="fa fa-circle-o"></i>Tabla Situación</a></li>
            <li><a href="Tablas_basicas/Ttfa.php"><i class="fa fa-circle-o"></i>Tabla Tipo de falta</a></li>
            <li><a href="Tablas_basicas/Ttjus.php"><i class="fa fa-circle-o"></i>Tabla Tipo de justificación</a></li>
            <li><a href="Tablas_basicas/Tttu.php"><i class="fa fa-circle-o"></i>Tabla Tipo de turno</a></li>
            <li><a href="Tablas_basicas/Ttusu.php"><i class="fa fa-circle-o"></i>Tabla Tipo de usuario</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="Crear_turnos.php">
            <i class="fa fa-calendar-check-o "></i> <span>Crear turnos</span> <!-- La class de aquí es para el icono -->
            <!-- <span class="pull-right-container"> esto es para que se despliegue el menú -->
            <!-- <i class="fa fa-angle-left pull-right"></i>-->
            <!--</span>-->
          </a>
        </li>
        <li class="treeview">
          <a href="../../Registro_usuario/registro.php">
            <i class="fa fa-user-plus"></i> <span>Registrar Usuarios</span> <!-- La class de aquí es para el icono -->
          </a>
        </li>
        <li class="treeview">
          <a href="Modificar_usuarios.php">
            <i class="fa fa-wrench"></i> <span>Modificar Usuarios</span> <!-- La class de aquí es para el icono -->
            <!-- <span class="pull-right-container"> esto es para que se despliegue el menú -->
            <!-- <i class="fa fa-angle-left pull-right"></i>-->
            <!--</span>-->
          </a>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cambiar contraseña 
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Cambiar contraseña</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ingrese los siguientes datos: </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="Mcambiocontrasenia.php" method="POST" method="POST" role="form">
                <!-- select -->
                <div class="form-group">
                  <label>Contraseña actual</label>
                  <input name="passactual" type="password" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label>Nueva contraseña</label>
                  <input name="passnueva" type="password" class="form-control" placeholder="">
                </div>                  
                    <div class="col-sm-2"> 
                      <button type="submit" name="enviar" class="btn btn-primary btn-block btn-flat" value="1">Enviar</button>
                    </div>
                                 
                  </div>
                  <!-- /.box-body -->
                </div>
              
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
