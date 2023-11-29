<?php

// Importar la connexion
require '../includes/config/database.php';
    $db = conectarDB();

// Escribir el query
$query = "SELECT * FROM propiedades;";

// Consultar la base de datos
$resultadoConsulta = mysqli_query($db, $query);

    // Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    // Incluye un template
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
                <tbody> <!-- Mostrar los resultado de la base de datos -->
                <?php  while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                    <tr>
                        <td> <?php echo $propiedad['id'];?> </td>
                        <td> <?php echo $propiedad['titulo'];?> </td>
                        <td> <img src="/imagenes/<?php echo $propiedad['imagen'];?>" class="imagen-tabla"></td>
                        <td> <?php echo $propiedad['precio'];?> </td>
                        <td>
                            <a href="#" class="boton-rojo-block">Eliminar</a>
                            <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>" class="boton-verde-block">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile;?>
                </tbody> 
            </table>

    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <?php

        // Cerrar la conexion de la base de datos
        mysqli_close($db);

        incluirTemplate('footer');
    ?>