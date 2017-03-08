<div id="main">
    <div class="container">
        <div class="row main-row">
            <div class="12u">

                <section>
                    <table class="container">
                        <thead>
                        <tr>
                            <th><h1>Título</h1></th>
                            <th><h1>Área de indicaciones</h1></th>
                            <th><h1>Resumen</h1></th>
                            <th><h1>Fecha</h1></th>
                            <th><h1>Imagen</h1></th>
                            <th><h1>Categoría</h1></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($documents as $document) {
                                echo "<tr>";
                                ?>
                                    <td><a href="<?php echo base_url() . "mostrar_cuerpo_noticia/$document->news_id" ?>"><?php echo $document->news_title ?></a></td>
                                    <td><?php echo $document->news_slug ?></td>
                                    <td><?php echo $document->news_abstract ?></td>
                                    <td><?php echo $document->news_date ?></td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>assets/uploads/files/news_images/<?php echo $document->news_image; ?>" />
                                    </td>
                                    <td><?php
                                        $rol_id = $document->news_category_id;
                                        echo $this->Category_model->get_category_name($rol_id); 
                                    ?></td>
                                <?php
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </section>

            </div>
        </div>
    </div>
</div>

