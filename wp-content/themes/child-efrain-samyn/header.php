<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta name="description" content="Portofilio personnel, créé dans l'environnement de WordPress, pour montrer les projets sur lesquels j'ai travaillé en tant que développeur.">
<meta name="author" content="Efrain Samyn">
<meta name="description" content="Je suis spécialisé dans WordPress, et je peux répondre à vos besoins de création, de modernisation et d'optimisation de votre site internet.">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<header class="header-area">
    <!-- site-navbar start -->
    <div class="navbar-area">
        <div class="container">
            <nav class="site-navbar" id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                 <div class="site-logo">
                 <a href="<?php echo home_url( '/' ); ?>" aria-label="Page d'accueil Efrain samyn">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo.png" alt="logo-efrain-samyn">
                </a>
                 </div>
                 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                  <!-- nav-toggler for mobile version only -->
                 <button class="nav-toggler">
                    <span></span>
                </button>
            </nav>

        </div>
    </div>
</header>
<?php get_template_part( 'templates_parts/header-video' ); ?>
<?php get_template_part( 'templates_parts/apropo-efrain' ); ?>


<main >
