<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-ua-Compatible" content="IE=edge">
    <title>TaxFe | AsistenteTributario</title>
    <!-- Tell the browser to be responsive to screen width-->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--BOOTSTRAP 3.3.5-->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!--Theme style-->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/universidad.png">
    <link rel="shortcut icon" href="../public/img/univer.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">
</head>

<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        <header class="main-header">

            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>TaxFe</b>AsistenteTributario</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>TaxFe</b></span>
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
                                <img src="" class="user-image" alt="User Image">
                                <span class="hidden-xs">Elvis Pachacama </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="" class="img-circle" alt="User Image">
                                    <p>
                                        Elvis Pachacama

                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-right">
                                        <a href="../ajax/usuario.php?op=salir"
                                            class="btn btn-default btn-flat">Cerrar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </nav>
        </header>
        <!-- Left side column. contains the Logo and sidebar-->
        <aside class="main-sidebar">
            <!--sidebar: style can be found in sidebar. less-->
            <section class="sidebar">
                <!--sidebar menu:  : style can be found in sidebar.less-->
                <ul class="sidebar-menu">
                    <li class="header"></li>
                    <li class="treeview">
                        <a href="escritorio.php">
                            <i class="fa fa-tasks"></i>
                            <span>Escritorio</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-building"></i>
                            <span>Adminitrador</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="tipocontribuyente.php"><i class="fa fa-circle-o"></i>Tipo Contribuyente</a></li>
                            <li><a href="plan.php"><i class="fa fa-circle-o"></i>Planes</a></li>
                            <li><a href="usuarios.php"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Recibidos</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="alumno.php"><i class="fa fa-circle-o"></i>Estudiantes</a></li>
                            <li><a href="profesor.php"><i class="fa fa-circle-o"></i>Profesores </a> </li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Reportes</span><i class="fa fa-angle-left pull-right"></i>

                        </a>
                        <ul class="treeview-menu">
                            <li><a href="asignatura.php"><i class="fa fa-circle-o"></i>Asignatura</a></li>

                        </ul>
                    </li>          

                    <li>
                        <a href="../files/Manual-de-usuario.pdf">
                            <i class="fa fa-plus-square"></i><span>Ayuda</span>
                            <small class="label pull-right bg-red">PDF</small>
                        </a>
                    </li>
                    <li>

                        <a href="acerca.php">
                            <i class="fa fa-info-circle"></i><span>Acerca De..</span>
                            <small class="label pull-right bg-yellow">PDF</small>
                        </a>
                    </li>




                </ul>
            </section>
        </aside>