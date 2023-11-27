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

            <table class="propiedades">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Casa en la Playa</td>
                        <td> <img src="/build/img/anuncio1.jpg" class="imagen-tabla"></td>
                        <td>$120000</td>
                        <td>
                            <a href="#" class="boton-rojo-block">Eliminar</a>
                            <a href="#" class="boton-verde-block">Actualizar</a>
                        </td>
                    </tr>
                </tbody> 
            </table>

    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <?php
        incluirTemplate('footer');
    ?>