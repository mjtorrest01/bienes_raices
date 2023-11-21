<?php

    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <!--!========== FIN HEADER ==========!-->

    <!--!========== MAIN ==========!-->
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="imagen/webp">
            <source srcset="build/img/destacada.jpg" type="imagen/jpg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen casa">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos_caracteristicas">
                <li>
                    <img class="icono-anuncio" loading="lazy" src="/build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono-anuncio" loading="lazy" src="/build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono-anuncio" loading="lazy" src="/build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus perferendis reprehenderit error eos et
                totam ut alias numquam quasi atque accusantium voluptatem ab quis laborum, adipisci iste voluptatibus 
                molestiae aut. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum neque praesentium fuga, 
                sapiente blanditiis quis recusandae repellat, voluptatem assumenda magni porro, libero harum accusantium? 
                Dolorem deleniti maiores sapiente numquam modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quas, praesentium eum optio vel, ullam mollitia minus, sit velit enim similique perferendis incidunt maxime 
                autem quis doloremque eaque earum beatae dolore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Labore nisi aliquid sunt nihil nobis.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus perferendis reprehenderit error eos et
                totam ut alias numquam quasi atque accusantium voluptatem ab quis laborum, adipisci iste voluptatibus 
                molestiae aut. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum neque praesentium fuga, 
                sapiente blanditiis quis recusandae repellat, voluptatem assumenda </p>
        </div>
    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <?php
        incluirTemplate('footer');
    ?>