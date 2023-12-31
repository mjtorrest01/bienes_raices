<?php

    require 'includes/funciones.php';

    incluirTemplate('header', $inicio = true);
?>

    <!--!========== FIN HEADER ==========!-->

    <!--!========== MAIN ==========!-->
    <main class="contenedor seccion">

        <!--!========== CART ==========!-->
        <section class="cart">
            <div class="cart-contenedor">
                <div class="cart-icono-contenedor">
                    <img class="cart-icono" src="/build/img/house-search.svg" alt="">
                </div>
                <div class="cart-texto">
                    <h3>¿Buscas tu nuevo hogar?</h3>
                    <p>10 nuevas ofertas cada día. 350 ofertas in situ, con la confianza de una comunidad de miles de usuarios.</p>
                </div>
            </div>
            <div class="cart-contenedor">
                <div class="cart-icono-contenedor">
                    <img class="cart-icono" src="/build/img/house-sale.svg" alt="">
                </div>
                <div class="cart-texto">
                    <h3>¿Quiere vender su casa?</h3>
                    <p>10 nuevas ofertas cada día. 350 ofertas in situ, con la confianza de una comunidad de miles de usuarios.</p>
                </div>
            </div>
        </section>
        <!--!========== FIN CART ==========!-->

        <!--!========== ELIGENOS ==========!-->
        <h1>Por qué elegirnos</h1>

        <section class="icono-eligenos">
            <div class="icono">
                <img src="build/img/person-combination.svg">
                <h3>Miles de personas confian en nosotros</h3>
                <p>10 nuevas ofertas cada día. 350 ofertas en el sitio, con la confianza de una comunidad de miles de usuarios.</p>
            </div>
            <div class="icono">
                <img src="build/img/apartments.svg">
                <h3>Amplia gama de propiedades</h3>
                <p>Con una sólida selección de propiedades populares a su disposición, así como propiedades destacadas de expertos inmobiliarios</p>
            </div>
            <div class="icono">
                <img src="build/img/house-money.svg">
                <h3>Financiación sencilla para todos</h3>
                <p>Nuestro departamento de financiación sin estrés que puede encontrar soluciones financieras para ahorrarle dinero.</p>
            </div>
        </section>
        <!--!========== FIN ELIGENOS ==========!-->

        <!--!========== CASAS VENTAS ==========!-->
        <section class="seccion contenedor">
            <h2>Casas y Apartamentos en Ventas</h2>

            <?php
                $limite = 3;
                include 'includes/templates/anuncios.php';
            ?>
            
            <div class="alinear-derecha">
                <a href="anuncios.php" class="boton-amarillo">Ver Todas</a>
            </div>
        </section>
        <!--!========== FIN CASAS VENTAS ==========!-->

        <!--!========== IMAGEN CONTACTO ==========!-->
        <section class="imagen-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
            <a href="contacto.php" class="boton-azul-inline">contacto</a>
        </section>
        <!--!========== FIN IMAGEN CONTACTO ==========!-->

        <!--!========== BLOG TESTIMONIAL ==========!-->
        <div class="contenedor seccion seccion-inferior">
            <section class="blog">
                <h3>Nuestro Blog</h3>

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
                            <p class="info-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
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
                            <p class="info-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                            <p>
                                Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                            </p>
                        </a>
                    </div>
                </article>

            </section>
            <section class="testimoniales">
                <h3>Testimoniales</h3>
                
                <div class="testimonial">
                    <blockquote>
                        El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas.
                    </blockquote>
                    <p>- Michael Torres</p>
                </div>
            </section>
        </div>
        <!--!========== FIN BLOG TESTIMONIAL ==========!-->

    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <?php
        incluirTemplate('footer');
    ?>