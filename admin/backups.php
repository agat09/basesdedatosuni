<?php
session_start();
include 'conex.php';
$conex = mysqli_connect("myserveruni.mysql.database.azure.com", "agat@myserveruni", "Uni095359", "bd");

if(isset($_SESSION['NombreUsuario'])) {
     if ($_SESSION["idNiveles"] == 1) {
        $user = $_SESSION['NombreUsuario'];
           $codigo = $_SESSION["Codigo"];

           $consulta=mysqli_query($conex, "select Foto from usuarios where Codigo = $codigo");                  
             while($filas=mysqli_fetch_array($consulta)){
                        $foto=$filas['Foto'];                           
                }
         
         
      ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BD_UNI</title>
    <!-- Bootstrap core CSS-->
     <link href="#" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
   <!-- <link href="../css/style.css" rel="stylesheet">-->

    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/u.png" type="image/x-icon">

    <!-- <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <script src="../js/jquery.js"></script>
    <script src="js/back-to-top.js"></script>
    <!--<script src="../js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="usuarios/myjava.js"></script>

    <!-- <link href="css/sweetalert.css" rel="stylesheet">
    <script type="text/javascript" src="/js/functions.js"></script>
    <script src="js/sweetalert.min.js"></script>-->


</head>
<!-- Navigation-->

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <img src="../images/u.png" width="30" class="d-inline-block alingn-center" alt="Logo UNI">
        <a class="navbar-brand" href="#">&nbsp; &nbsp; Base de Datos</a>
    <?php
         
include ('includes/perfil.php');
 ?>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administrador**">
                    <a class="nav-link" href="administrador.php">
                        <i class="fa fa-fw fa-users"></i>
                        <span class="nav-link-text">Administrador</span>
                    </a>

                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Alumnos">
                    <a class="nav-link" href="estudiantes.php">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">Alumnos</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profesores">
                    <a class="nav-link" href="profesor.php">
                        <i class="fa fa-fw fa-user-plus"></i>
                        <span class="nav-link-text">Profesores</span>
                    </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profesores">
                    <a class="nav-link" href="asignaciones.php">
                        <i class="fa fa-fw fa-user-plus"></i>
                        <span class="nav-link-text">Asignaciones</span>
                    </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profesores">
                    <a class="nav-link" href="numero_asignaciones.php">
                        <i class="fa fa-fw fa-user-plus"></i>
                        <span class="nav-link-text">Numeros de Asignaciones</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Examenes">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-clone"></i>
                        <span class="nav-link-text">Examenes</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laboratorios">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-database"></i>
                        <span class="nav-link-text">Laboratorios</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pruebas">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-clipboard"></i>
                        <span class="nav-link-text">Pruebas</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pruebas">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-clipboard"></i>
                        <span class="nav-link-text">Grupos</span>
                    </a>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pruebas">
                    <a class="nav-link" href="horarios.php">
                        <i class="fa fa-fw fa-clipboard"></i>
                        <span class="nav-link-text">Horarios</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reportes">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-file-pdf-o"></i>
                        <span class="nav-link-text">Reportes</span>
                    </a>
                </li>
                   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reportes">
                    <a class="nav-link" href="cambiar_foto.php">
                       <i class="fa fa-fw fa-file-pdf-o"></i>
                        <span class="nav-link-text">Cambiar Foto</span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Backups">
                    <a class="nav-link" href="portada.html">
                        <i class="fa fa-fw fa-folder-open-o"></i>
                        <span class="nav-link-text">Backups</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left">--</i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="index.php">
                        <i class="fa fa-fw fa-power-off"> </i>Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--*************Comienzo del contenido del contenido de las unidades*******-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/index.php">Portada</a>
                </li>
                  <li class="breadcrumb-item">
                    <a href="paneladmin.php">Panel Administrador</a>
                </li>
                <li class="breadcrumb-item active">Backups&nbsp;</li>
        
            </ol>
        </div>

        <!--************************************************************************************************-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <center><img src="../images/u.png" width="80" height="80" class="img-responsive"></center>
                   
                    <!--<div class="col-md-3">
                        <img class="img-responsive img-circle" src="<?php echo $foto ?>" width="50px" height="50px">
                        <h5><i class="fa fa-circle fa-stack-1x fa-inverse" style="color:green; text-align: left; "></i><b> &nbsp; Online:</b>
                         <?php echo $user ?>
                        </h5>
                    </div>-->

                </div>
                </div>
            <!-- /.row -->
            <!-- Content Row -->

            <div class="row">
                <!-- Content Column -->
                <div class="col-md-12">
                    <div class="container"> 

                        <div class="card card border-primary md-12 " style="max-width: 100rem;">
                            <div class="card-header">
                                <div class="card-body text-primary">
                                </div>
                                <center>
                                    <h4><b>Copias de Seguridad de la Base de Datos</b></h4>
                                </center>
                            </div>
                            <div class="panel-body">


                                <?php
        include 'backup_bd/Connet.php';
                                    ?>
                                <div class="row">
                                    <form action="Backup.php" method="post">
                                        <!--Fin del Segundo Row -->
                                        <div class="col-md-4">
                                            <center>
                                                <img src="../images/db.png">
                                                <input type="submit" name="copia" value="Realizar Copia de Seguridad" class="btn btn-success">
                                            </center>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <center>
                                        <img src="../images/db2.png">

                                        <form action="backup_bd/Restore.php" method="POST">
                                            <label>Selecciona un punto de restauración</label>
                                            <select name="restorePoint" class="form-control" required="true">
                                                <option value="" disabled="" selected="">Selecciona un punto de restauración</option>
                                                <?php
                $ruta="backup_bd/".BACKUP_PATH;
                if(is_dir($ruta)){
                    if($aux=opendir($ruta)){
                        while(($archivo = readdir($aux)) !== false){
                            if($archivo!="."&&$archivo!=".."){
                                $nombrearchivo=str_replace(".sql", "", $archivo);
                                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
                                $ruta_completa=$ruta.$archivo;
                                if(is_dir($ruta_completa)){
                                }else{
                                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
                                }
                            }
                        }
                        closedir($aux);
                    }
                }else{
                    echo $ruta." No es ruta válida";
                }
            ?>
                                            </select>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Restaurar</button>
                                        </form>
                                    </center>
                                </div>

                            </div>
                            <!-- Fin del Panel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Base de Datos UNI derechos reservados 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up">-</i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Seguro que desea Salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione la opcion de salir si esta seguro!!</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../index.php">Salir</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="../vendor/chart.js/Chart.min.js"></script>
        <script src="../vendor/datatables/jquery.dataTables.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="../js/sb-admin-datatables.min.js"></script>
        <script src="../js/sb-admin-charts.min.js"></script>
    </div>
</body>


</html>

<?php
     }
     else{
        echo '<script> alert("No Tienes los permisos para acceder a esta pagina.");</script>';
         echo '<script> window.location="../login.php"; </script>';
     }
}else{
 echo '<script> window.location="../login.php"; </script>';
}
?>
