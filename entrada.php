<?php

    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <!--!========== FIN HEADER ==========!-->

    <!--!========== MAIN ==========!-->
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="imagen/webp">
            <source srcset="build/img/destacada2.jpg" type="imagen/jpg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen casa">
        </picture>

        <p class="info-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
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