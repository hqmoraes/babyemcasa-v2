<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo get_bloginfo('name') ?></title>
    <?php wp_head(); ?>
<!--    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6299333406589809" crossorigin="anonymous"></script> -->
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container-fluid">
        <div class="row topo align-items-center">
            <div class="col-12 col-md-8 mx-auto">
                <div class="row align-items-center">
                    <div class="col-4 d-flex align-items-center ps-4 logoMontado">
                        <a href="/"><p class="logoTexto"><img src="https://babyemcasa.com/wp-content/uploads/2022/05/baby-svgrepo-com.svg" alt="Baby em casa"></p><p class="textoLogo"><?php echo get_bloginfo('name') ?></p></a>
                    </div>
                    <div class="col-4">
                    </div>
                    <nav class="col-4 ctMenu">
                        <div class="row h-100 align-items-center position-relative">
                                <button onclick="menuOutrosSites()" class="d-flex align-items-center justify-content-end pe-3 menu"><img src="https://babyemcasa.com/wp-content/uploads/2022/06/menu-svgrepo-com-1.svg" alt="Menu"></button>
                        </div>
                        <div class="col-12 outrosSites px-4 pt-3 esconderMenu">
                            <h4><div>Temas com</div><div>baby em casa</div></h4>
                            <?php wp_nav_menu(); ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 mx-auto blogTitulo d-flex align-items-center justify-content-center">
                <div class="col-6 tituloParts">
                    <h4 class="p-0">Blog</h3>
                    <p class="p-0"><?php echo get_bloginfo('description') ?></p>
                </div>
            </div>
        </div>
    </div>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">	
</header>
<main class="container">




