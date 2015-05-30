<?php 
session_start();
        $idusuario = 0;
	$usuario = '';	
	$usuarionombre = '';
        $usuarioapellido = '';
        $idrol = '';
        $fechaalta ='';

	if (isset ($_SESSION['idusuario'])){ 
                $usuarioid = $_SESSION['idusuario'];
		$usuario = $_SESSION['usuario'];
                $usuarionombre = $_SESSION['nombre'];
                $usuarioapellido = $_SESSION['apellido'];
                $fechaalta = $_SESSION['fechaalta'];
                $rol = $_SESSION['rol'];
                if ($rol=='1'){
                    $rol = 'Director';
                }
                if ($rol=='2'){
                    $rol = 'Secretaria';
                }
                if ($rol=='3'){
                    $rol = 'Docente';
                }
                if ($rol=='4'){
                    $rol = 'Alumno';
                }
	}
	else {            header('Location:../index.php');        }        
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Intranet - Academica</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <link href="../recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../recursos/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../recursos/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../recursos/css/style.min.css" rel="stylesheet" type="text/css" />
    <link href="../recursos/css/skin-purple.min.css" rel="stylesheet" type="text/css" />    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../recursos/js/showhide.js" type="text/javascript"></script>
    
    
  </head>
    <body class="skin-purple sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="#" class="logo">
          <span class="logo-mini">I-A</span>
          <span class="logo-lg">Intranet - Academica</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown messages-menu">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php if ($rol == 'Director' || $rol=='Secretaria') { ?>
                  <img src="../recursos/img/admin.png" class="user-image" alt="User Image"/>
                  <?php } ?>
                  <?php if ($rol == 'Docente') { ?>
                  <img src="../recursos/img/teacher.png" class="user-image" alt="User Image"/>
                  <?php } ?>
                  <?php if ($rol == 'Alumno') { ?>
                  <img src="../recursos/img/college.png" class="user-image" alt="User Image"/>
                  <?php } ?>
                  <span class="hidden-xs"><?php echo $usuarionombre.' '.$usuarioapellido;?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                      <?php if ($rol == 'Director' || $rol=='Secretaria') { ?>
                    <img src="../recursos/img/admin.png" class="img-circle" alt="User Image" />
                      <?php } ?>
                    <?php if ($rol == 'Docente') { ?>
                    <img src="../recursos/img/teacher.png" class="img-circle" alt="User Image" />
                      <?php } ?>
                    <?php if ($rol == 'Alumno') { ?>
                    <img src="../recursos/img/college.png" class="img-circle" alt="User Image" />
                      <?php } ?>
                    <p>
                      <?php echo $usuarionombre.' '.$usuarioapellido;?>
                        <small><?php echo $rol; ?></small>
                      <small>Miembro desde <?php echo $fechaalta; ?> </small>
                    </p>
                  </li>
                  <!--<li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat" id="btnPerfil" data-toggle="modal" data-target="#myModal">Perfil</a>
                                          </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat" id="btnCerrarSesion">Salir</a>
                    </div>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </div>
            
        </nav>
      </header>
        
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
                <?php if ($rol == 'Director' || $rol=='Secretaria') { ?>
              <img src="../recursos/img/adminwhite.png" class="img-circle" alt="User Image" />
                <?php } ?>
              <?php if ($rol == 'Docente') { ?>
              <img src="../recursos/img/teacherwhite.png" class="img-circle" alt="User Image" />
                <?php } ?>
              <?php if ($rol == 'Alumno') { ?>
              <img src="../recursos/img/collegewhite.png" class="img-circle" alt="User Image" />
                <?php } ?>
            </div>
            <div class="pull-left info">
                <p><?php echo $usuarionombre ?></p>
              <!-- Status -->
              <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <ul class="sidebar-menu">
              <li class="header"><span >ITEMS</span></li>
            <!-- Optionally, you can add icons to the links -->
            <!--<li class="active"><a href="#"><i class='fa fa-link'></i> <span>Configurar Grupos</span></a></li>-->
            <!--<li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>-->
                <?php if ($rol == 'Director' || $rol=='Secretaria') { ?>
                
		<li class="treeview">
                <?php if ($rol == 'Director') { ?>
              <a href="#"><i class='fa fa-link'></i> <span>Grupo</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" name="div1">Mantenimiento Grupo</a></li>
                <li><a href="#">Visualizar Grupo</a></li>
              </ul>
              <?php } ?>
            </li>
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Usuario</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <?php if ($rol=='Secretaria') { ?>
                <li><a href="#" name="div2">Mantenimiento Usuario</a></li>
                <?php } ?>
                <li><a href="#">Visualizar Usuario</a></li>                                
              </ul>
              <?php if ($rol=='Secretaria') { ?>
              <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Matricula</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Mantenimiento Matricula</a></li>
                <li><a href="#">Visualizar Matricula</a></li>
              </ul>
            </li>
            <?php } ?>
            </li>  
            <?php if ($rol == 'Director') { ?>
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Asistencia</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Regularizar Asistencia</a></li>
              </ul>
            </li>
            <?php } ?>
            <?php } if ($rol == 'Docente') { ?>
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Asistencia</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Visualizar Grupo de Estudio</a></li>                
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Calificación</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Visualizar Grupo de Estudio</a></li>                
              </ul>
            </li>
		<?php } if ($rol == 'Alumno') { ?>
            <li class="treeview">
            <a href="#"><i class='fa fa-link'></i> <span>Calificación</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Visualizar Calificación</a></li>                
              </ul>
            </li>
            <li class="treeview">
            <a href="#"><i class='fa fa-link'></i> <span>Asistencia</span>  <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Visualizar Asistencia</a></li>                
              </ul>
            </li>
            <?php }  ?>            
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <section class="content-header">
            <h1>
                      
            <small>Bienvenido</small>
          </h1>
          <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Navegación</a></li>
            <?php if ($rol == 'Director' || $rol=='Secretaria') { ?>
            <li class="active">Administración</li>
            <?php } if ($rol == 'Docente') {?>
            <li class="active">Docente</li>
            <?php } if ($rol == 'Alumno') {?>
            <li class="active">Alumno</li>
            <?php } ?>
          </ol>
        </section>
        <section class="content">
        <?php include 'reggrupo.php' ?>    
        <?php include 'regusuario.php' ?>
        <?php include 'perfil.php' ?> 
        </section>
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Gracias por tu visita
        </div>
        <strong>Copyright &copy; 2015 <a href="#">Intranet - Académica</a>.</strong> All rights reserved.
      </footer>
        
     <script src="../recursos/js/jQuery-2.1.4.min.js"></script>
    <script src="../recursos/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../recursos/js/app.min.js" type="text/javascript"></script>
    <script src="../recursos/js/logout.js" type="text/javascript"> </script>

  </body>
</html>
