<?php
    include './includes/templades/header.php';
?>

    <!--!========== FIN HEADER ==========!-->

    <!--!========== MAIN ==========!-->
    <main class="contenedor seccion">

        <!--!========== NOSOTROS ==========!-->
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <source srcset="build/img/nosotros.jpg" type="imagen/jpg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencias
                </blockquote>

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
        </div>
        <!--!========== FIN NOSOTROS ==========!-->

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
    </main>
    <!--!========== FIN MAIN ==========!-->

    <!--!========== FOOTER ==========!-->
    <footer class="footer seccion">
        <div class="contenedor contenedor_footer">
            <nav class="navegacion">
                <a href="nosotros.html">Sobre Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contactanos</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos Reservados 2023 &copy;</p>
    </footer>
    <!--!========== FIN FOOTER ==========!-->

    <script src="build/js/bundle.min.js"></script>
</body>
</html>