<div id="main">
    <div class="container">
        <div class="row main-row">
            <div class="12u">

                <section>
                    <table class="container">
                        <thead>
                        <tr>
                            <th><h1>Documento</h1></th>
                            <th><h1>Categoría</h1></th>
                            <th><h1>Fecha</h1></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($documents as $document) {
                                echo "<tr>";
                                ?>
                                    <td><a href="<?php echo base_url(); ?>assets/uploads/files/documents/<?php echo $document->document_title; ?>"><?php echo $document->document_title ?></a></td>
                                    <td><?php
                                        $rol_id = $document->document_category_id;
                                        echo $this->Category_model->get_category_name($rol_id); 
                                    ?></td>
                                    <td><?php echo $document->document_date ?></td>
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

