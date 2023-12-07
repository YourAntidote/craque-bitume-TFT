<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php bloginfo('name'); // Affiche le nom du blog ?><?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?></title>
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon.png">
  		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png">
  		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png">
  		<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicon/site.webmanifest">
  		<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  		<meta name="msapplication-TileColor" content="#da532c">
  		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  		<link rel="stylesheet" href="https://use.typekit.net/fch5wdf.css">
  		<link href='https://unpkg.com/css.gg@2.0.0/icons/css/trees.css' rel='stylesheet'>
		<script src="https://unpkg.com/scrolltrigger-classes"></script>
  		<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	
		<?php 
			// Tous les .css et .js sont chargés dans le fichier functions.php
		?>

		<?php wp_head(); 
		/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
			 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
			 Vous pouvez la déplacer si désiré, mais garder là. */
		?>

	</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
	</header>
	    <div class="ignorez"></div>


    <!--BARRE TOP BANNER-->
    <div class="banner">
      <div class="banner__content">
        <div class="banner__text">
          <strong><?php the_field('banniere'); ?> <a href="https://craquebitume.org/">https://craquebitume.org/</a></strong>
        </div>
        <button class="banner__close" type="button">
          <span class="material-icons">
            close
          </span>
        </button>
      </div>
    </div>
	
	<?php bloginfo( 'description' ); ?>
	<nav class="navbar navbar-dark navbar-expand-lg justify-content-end align-items-center fixed-top py-0">
    <div class="container-fluid justify-content-space-between align-items-center max-width">
        <a class="navbar-brand" href="<?php echo esc_url( get_permalink( get_page_by_path( 'home' ) ) ); ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="logo">
        </a>
        <button class="navbar-toggler menu hamburger_menu" type="button" width="20%" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Affichage/masquage de la navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Ajoutez le début du menu -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul id="menu-main-menu" class="navbar-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'menu_class'     => 'navbar-nav',
                    'list_item_class' => 'nav-item', // Utilisation de la classe personnalisée pour les éléments <li>
                    'link_item_class' => 'nav-link', // Utilisation de la classe personnalisée pour les éléments <a>
                ]);
                ?>
            </ul>

            <!-- Ajoutez votre bouton de donation ici -->
            <div class="donnation d-flex justify-content-center">
                <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume" type="button" id="btn-don" class="d-flex justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0">Donation</a>
            </div>
        </div>
        <!-- Fin du menu -->
    </div>
</nav>



<main><!-- Débute le contenu principal de notre site -->
