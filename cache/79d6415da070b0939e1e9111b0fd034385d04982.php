<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/views/admin/assets/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/views/admin/assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/views/admin/assets/css/_all-skins.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/styles/atelier-cave-dark.min.css">
    <!-- iCheck -->
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
        <a href="/" class="logo">
            <span class="logo-mini"><strong>Enay</strong></span>
            <span class="logo-lg"><strong>Enaylal</strong> Doc</span>
        </a>

        <!-- Header -->
        <!-- Barre de navigation du haut -->
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Menu d'information de l'administrateur -->
                    <li class="dropdown user user-menu" style="margin: 0; padding: 0;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="http://lorempicsum.com/futurama/64/64/2" alt="User image" class="user-image">
                            <span class="hidden-xs">
                                Admin ADMIN
                            </span>
                        </a>

                        <!-- Le contenu du menu -->
                        <ul class="dropdown-menu">
                            <!-- En-ête du menu-->
                            <li class="user-header">
                                <img src="http://lorempicsum.com/futurama/64/64/2" alt="User image">
                                <p>
                                    Admin ADMIN
                                    <small>Admin</small>
                                </p>
                            </li>

                            <!-- Pied de page du menu -->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="" class="btn btn-default btn-flat">
                                        Déconnexion
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- Fin du menu de l'administrateur -->
                    </li>
                </ul>
                <!-- Fin du menu du haut -->
            </div>
        </nav>
    </header>

    <!-- Menu de gauche -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="http://lorempicsum.com/futurama/64/64/2" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>
                       YOLO

                       HEZHE
                    </p>
                </div>
            </div>
            <!-- Menu -->
            <ul class="sidebar-menu">

                <!-- Guide de base -->
                <li class="treeview">
                    <a href="/book">
                        <i class="fa fa-book"></i>
                        <span>Guide de démarrage</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="/book/install">Installation</a></li>
                        <li><a href="/book/server">Configuration serveur</a></li>
                    </ul>
                </li>

                <!-- Tutoriel -->
                <li class="treeview">
                    <a href="/tutorial">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Tutoriel d'exemple</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="/tutorial/first-page">Votre première page</a></li>
                        <li><a href="/tutorial/news-list">Lister des articles</a></li>
                    </ul>
                </li>

                <!-- Routing -->
                <li class="treeview">
                    <a href="/routing">
                        <i class="fa fa-road"></i>
                        <span>Routing</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="/routing/base">Les bases</a></li>
                        <li><a href="/routing/create">Créer des routes</a></li>
                        <li><a href="/routing/callbacks">Le callback</a></li>
                        <li><a href="/routing/name">Les noms de route</a></li>
                        <li><a href="/routing/groups">Les groupes</a></li>
                        <li><a href="/routing/middlewares">Les middlewares</a></li>
                    </ul>
                </li>

                <!-- Les données -->
                <li class="treeview">
                    <a href="/data">
                        <i class="fa fa-database"></i>
                        <span>Les données</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="/data/table">Les tables</a></li>
                        <li><a href="/data/entity">Les entités</a></li>
                    </ul>
                </li>

                <!-- HTTP -->
                <li class="treeview">
                    <a href="/http">
                        <i class="fa fa-exchange"></i>
                        <span>Requête &amp; Réponse</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="/http/request">Les requêtes</a></li>
                        <li><a href="/http/response">Les réponses</a></li>
                        <li><a href="/http/messages">Les messages de retour</a></li>
                        <li><a href="/http/controller">Les contrôleurs</a></li>
                    </ul>
                </li>

                <!-- Autre -->
                <li class="treeview">
                    <a href="/other">
                        <i class="fa fa-info"></i>
                        <span>Autre composants</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="/other/session">Les sessions</a></li>
                        <li><a href="/other/cookie">Les cookies</a></li>
                        <li><a href="/other/translate">Les traductions</a></li>
                        <li><a href="/other/config">La configuration</a></li>
                        <li><a href="/other/binary">Le binaire</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">


    <!-- Content Wrapper. Contains page content -->
    <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.5
        </div>
        <strong>Copyright &copy; 2016 easyweb-quality.fr.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
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
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.6 -->
<script src="/views/admin/assets/js/bootstrap.js"></script>
<script src="/views/admin/assets/js/app.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<!-- Morris.js charts -->
</body>
</html>

