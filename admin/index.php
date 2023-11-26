<?php

    $resultado = $_GET['resultado'] ?? null;

    require '../includes/funciones.php';

    incluirTemplate('header');
?>

    <!--!========== FIN HEADER ==========!-->

    <!--!========== MAIN ==========!-->
    <main class="contenedor seccion">
        <h1>Administrador de Bieneas Raices</h1>
        <?php if( intval( $resultado ) === 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php endif;?>

        <a class="boton boton-amarillo" href="/admin/propiedades/crear.php">Nueva Propiedad</a>
    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <?php
        incluirTemplate('footer');
    ?>