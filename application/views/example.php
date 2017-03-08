<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
    </head>
    <body>
        <div>
            <a href='<?php echo site_url('usuarios') ?>'>Usuarios</a> |
            <a href='<?php echo site_url('roles') ?>'>Roles</a> |
            <a href='<?php echo site_url('categorias') ?>'>Categorias</a> |
            <a href='<?php echo site_url('noticias') ?>'>Noticias</a> | 
            <a href='<?php echo site_url('documentos') ?>'>Documentos</a> |		 
            <a href='<?php echo site_url('imagenes_slider') ?>'>Slider</a> |
            <a href='<?php echo "cerrar_sesion"; ?>'>Cerrar sesión</a>

        </div>
        <div style='height:20px;'></div>  
        <div>
            <?php echo $output; ?>
        </div>
    </body>
</html>
