<!DOCTYPE HTML>
<!--
        Minimaxing by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title><?php echo $topic; ?></title>
        <link type="image/x-icon" href="<?php echo base_url(); ?>assets/uploads/files/logo_transp.png" rel="icon" />
        <link type="image/x-icon" href="<?php echo base_url(); ?>assets/uploads/files/logo_transp.png" rel="shortcut icon" /> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Webapp/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Webapp/css/tables.css" />
    </head>
    <body>
        <div id="page-wrapper">
            <div id="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="12u">

                            <header id="header">
                                <h1><img id="logo" src="<?php echo base_url(); ?>assets/uploads/files/logo_transp.png" /></h1>
                                <nav id="nav">
                                    <a class='<?php echo $topic == "Noticias" ? "current-page-item" : ""; ?>'
                                       href="<?php echo site_url('mostrar_noticias') ?>">Últimas Noticias</a>
                                    <a class='<?php echo $topic == "Documentos" ? "current-page-item" : ""; ?>'
                                       href="<?php echo site_url('mostrar_documentos') ?>">Últimos Documentos</a>
                                    <?php 
                                        if ($user_rol <= 2) {
                                            echo '<a href="' . site_url('usuarios') . '">Panel de Administración</a>';
                                        }
                                    ?>
                                    <a href="<?php echo site_url("cerrar_sesion"); ?>">Cerrar sesión</a>
                                </nav>
                            </header>

                        </div>
                    </div>
                </div>
            </div>