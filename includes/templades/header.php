<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <!--!========== HEADER ==========!-->
    <header class="header <?php echo isset ($inicio) ? 'inicio' : '';?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt="modo oscuro">
                    <nav class="navegacion">
                        <a href="nosotros.php">Sobre Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contactanos</a>
                    </nav>
                </div>
            </div>
            <?php if ($inicio) {?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujos</h1>
            <?php }?>
        </div>
    </header>