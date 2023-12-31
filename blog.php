<?php

    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <!--!========== FIN HEADER ==========!-->

    <!--!========== MAIN ==========!-->
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source
                    srcset="build/img/blog1.webp" 
                    type="imagen/webp">
                    <source
                    srcset="build/img/blog1.JPG" 
                    type="imagen/JPG">
                    <img loading="lazy"
                    src="build/img/blog1.jpg"
                    alt="imagen blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source
                    srcset="build/img/blog2.webp" 
                    type="imagen/webp">
                    <source
                    srcset="build/img/blog2.JPG" 
                    type="imagen/JPG">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="imagen blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>
                        Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source
                    srcset="build/img/blog3.webp" 
                    type="imagen/webp">
                    <source
                    srcset="build/img/blog3.JPG" 
                    type="imagen/JPG">
                    <img loading="lazy"
                    src="build/img/blog3.jpg"
                    alt="imagen blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source
                    srcset="build/img/blog4.webp" 
                    type="imagen/webp">
                    <source
                    srcset="build/img/blog4.JPG" 
                    type="imagen/JPG">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="imagen blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    <p>
                        Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>

    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <?php
        incluirTemplate('footer');
    ?>