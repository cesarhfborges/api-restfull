<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL;?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo BASE_URL;?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        <?php echo NOMESISTEMA; ?> - <?php echo NOMEEMPRESA; ?>
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo BASE_URL;?>assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo BASE_URL;?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container ">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>">
                    <?php if (date("m") == 12):?>
                        <img src="<?php echo BASE_URL; ?>assets/img/logo-natal.png" alt="" width="100">
                    <?php endif;?>
                    <?php
                    if (date("m") != 12):?>
                        <img src="<?php echo BASE_URL; ?>assets/img/logo-em-png-1.png" alt="" width="100">
                    <?php endif;?>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo BASE_URL; ?>" class="nav-link">
                            <i class="material-icons">dashboard</i> Dashboard
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
        <div class="page-header error-page header-filter" style="background-image: url('<?php echo BASE_URL; ?>assets/img/background-1.jpg')">
            <!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
            <div class="content-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title text-light font-weight-bold display-1">404</h1>
                        <h2>Página não encontrada :(</h2>
                        <h4>Ooooups! A página que voce tentou exibir não existe.</h4>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="copyright float-right">
                        Powered by Sd Redes&nbsp;&reg;, Tecnologia e Segurança de redes.&nbsp;<?php echo date('Y'); ?> &copy;
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo BASE_URL;?>assets/js/core/jquery.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/js/core/popper.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL;?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="<?php echo BASE_URL;?>assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo BASE_URL;?>assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo BASE_URL;?>assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo BASE_URL;?>assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
</body>
</html>
