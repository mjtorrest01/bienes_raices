<?php

    require '../../includes/config/database.php';

    $db = conectarDB();

    var_dump($db);

    require '../../includes/funciones.php';

    incluirTemplate('header');
?>

    <!--!========== FIN HEADER ==========!-->

    <!--!========== MAIN ==========!-->
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a class="boton boton-amarillo" href="/admin">Volver</a>

        <form class="formulario">
            <fieldset>
                <legend>Informacion Generales</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio</label>
                <input type="number" id="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" placeholder="Numeros Habitaciones" min="1" max="9">

                <label for="wc">Baños</label>
                <input type="number" id="wc" placeholder="Numeros Baños" min="1" max="9">

                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" placeholder="Numeros Estacionamiento" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select>
                <option value="" disabled selected>-- Seleccione --</option>
                    <option value="1">Michael</option>
                    <option value="2">Nadia</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-amarillo">
        </form>


    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <?php
        incluirTemplate('footer');
    ?>