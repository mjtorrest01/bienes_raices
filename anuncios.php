<?php

    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <!--!========== FIN HEADER ==========!-->

    <!--!========== MAIN ==========!-->
    <main class="contenedor seccion">
        <section class="seccion contenedor">
            <h2>Casas y Apartamentos en Ventas</h2>

            <?php
                $limite = 10;
                include 'includes/templates/anuncios.php';
            ?>

        </section>
        <!--!========== FIN CASAS VENTAS ==========!-->
    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <?php
        incluirTemplate('footer');
    ?>