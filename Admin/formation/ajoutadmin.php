
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Gestion des Tables</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="../TemplateAdmin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../TemplateAdmin/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="../TemplateAdmin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../TemplateAdmin/css/style.css" rel="stylesheet" />
    <link href="../TemplateAdmin/css/style_responsive.css" rel="stylesheet" />
    <link href="../TemplateAdmin/css/style_default.css" rel="stylesheet" id="style_color" />

    <link href="../TemplateAdmin/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../TemplateAdmin/assets/uniform/css/uniform.default.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="{{action('SessionController@index')}}">
                <img src="../../logo.png" alt="Admin Lab" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="arrow"></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->

            <!-- END  NOTIFICATION -->
            <div class="top-nav ">
                <ul class="nav pull-right top-menu" >

                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img width="20" height="20" src="" alt="">
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">

                            <li><a href="deconnexion.php"><i class="icon-key"></i> Déconnexion</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div id="sidebar" class="nav-collapse collapse">
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
                <input type="text" class="search-query" placeholder="Search" />
            </form>
        </div>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li class="has-sub ">
                <a href="http://localhost/flat-login-form/Admin/formation/form.php" class="">
                    <span class="icon-box"> <i class="icon-book"></i></span> Ajouter un Produit

                </a>
            </li>
            <li class="has-sub ">
                <a href="http://localhost/flat-login-form/Admin/formation/ajoutadmin.php" class="">
                    <span class="icon-box"> <i class="icon-book"></i></span> Ajouter un Admin

                </a>
            </li>
            <li class="has-sub ">
                <a href="http://localhost/flat-login-form/Admin/formation/list.php" class="">
                    <span class="icon-box"> <i class="icon-book"></i></span> Liste des Produits

                </a>
            </li>
            <li class="has-sub ">
                <a href="http://localhost/flat-login-form/Admin/formation/listadmin.php" class="">
                    <span class="icon-box"> <i class="icon-book"></i></span> listes Admins

                </a>
            </li>
        </ul>
        </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN THEME CUSTOMIZER-->
                    <div id="theme-change" class="hidden-phone">
                        <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-navy-blue" data-style="navy-blue"></span>
                            </span>
                        </span>
                    </div>
                    <!-- END THEME CUSTOMIZER-->
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        Gestion D'un Site de Vente En Ligne
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                        </li>
                        <li>
                            <a href="#">Administration</a> <span class="divider">&nbsp;</span>
                        </li>
                        <li><a href="#">Ajouter un Admin</a><span class="divider-last">&nbsp;</span></li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
            </div>
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Gestion des Admininstrateurs</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>

                        </div>
                        <div class="widget-body">
                            <table>
                                <form action="ajoutadministrateur.php" method="post">

                                    <tr><td>id             :</td><td><input type="text" name="id"></td></tr>
                                    <tr><td>Prénom    :</td><td><input type="text" name="first_name"></td></tr>
                                    <tr><td>Nom    :</td><td><input type="text" name="last_name"></td></tr>
                                    <tr><td>Email   :</td><td><input type="text" name="email"></td></tr>
                                    <tr><td>Mot de passe           :</td><td><input type="text" name="password"></td></tr>
                                    <tr><td></td><td><input type="submit" value="ajouter Admin"></td></tr>
                                </form>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->

            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div id="footer">
    2016 &copy; Admin
    <div class="span pull-right">
        <span class="go-top"><i class="icon-arrow-up"></i></span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="../TemplateAdmin/js/jquery-1.8.3.min.js"></script>
<script src="../TemplateAdmin/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../TemplateAdmin/js/jquery.blockui.js"></script>
<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="../TemplateAdmin/js/excanvas.js"></script>
<script src="../TemplateAdmin/js/respond.js"></script>
<![endif]-->
<script type="text/javascript" src="../TemplateAdmin/assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../TemplateAdmin/assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../TemplateAdmin/assets/data-tables/DT_bootstrap.js"></script>
<script src="../TemplateAdmin/js/scripts.js"></script>
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
    });
</script>
</body>
<!-- END BODY -->
</html>
