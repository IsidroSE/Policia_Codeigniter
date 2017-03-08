<!DOCTYPE html>
<html>
    <head>
        <title>Gestión de <?php echo $topic; ?></title>
        <link type="image/x-icon" href="<?php echo base_url(); ?>assets/uploads/files/logo_transp.png" rel="icon" />
        <link type="image/x-icon" href="<?php echo base_url(); ?>assets/uploads/files/logo_transp.png" rel="shortcut icon" /> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Webapp/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <?php foreach ($output->css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($output->js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
    </head>
    <body>
        <!-- CABECERA -->
        
            <div id="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="12u">

                            <header id="header">
                                <h1><img id="logo" src="<?php echo base_url(); ?>assets/uploads/files/logo_transp.png" /></h1>
                                <nav id="nav">
                                    <a class='<?php echo $topic == "usuarios" ? "current-page-item" : ""; ?>' 
                                       href='<?php echo site_url('usuarios') ?>'>Usuarios</a>
                                    <a class='<?php echo $topic == "roles" ? "current-page-item" : ""; ?>' 
                                       href='<?php echo site_url('roles') ?>'>Roles</a>
                                    <a class='<?php echo $topic == "categorias" ? "current-page-item" : ""; ?>' 
                                       href='<?php echo site_url('categorias') ?>'>Categorias</a>
                                    <a class='<?php echo $topic == "noticias" ? "current-page-item" : ""; ?>' 
                                       href='<?php echo site_url('noticias') ?>'>Noticias</a>
                                    <a class='<?php echo $topic == "documentos" ? "current-page-item" : ""; ?>' 
                                       href='<?php echo site_url('documentos') ?>'>Documentos</a>
                                    <a class='<?php echo $topic == "slider" ? "current-page-item" : ""; ?>' 
                                       href='<?php echo site_url('imagenes_slider') ?>'>Slider</a>
                                    <a class='<?php echo $topic == "panel_usuario" ? "current-page-item" : ""; ?>' 
                                       href='<?php echo site_url('mostrar_noticias') ?>'>Panel de usuario</a>
                                    <a class='<?php echo $topic == "cerrar_sesion" ? "current-page-item" : ""; ?>' 
                                       href='<?php echo site_url("cerrar_sesion"); ?>'>Cerrar sesión</a>
                                </nav>
                            </header>

                        </div>
                    </div>
                </div>
            </div>
            <!-- CUERPO -->
            <div style='height:20px;'></div>  
            <div>
                <?php echo $output->output; ?>
            </div>
            <!-- PIE -->
            <div id="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="12u">
                            <div id="copyright">
                                &copy; IES Maria Enriquez. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>assets/Webapp/js/skel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Webapp/js/skel-viewport.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Webapp/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="<?php echo base_url(); ?>assets/Webapp/js/main.js"></script>

    </body>
</html>
