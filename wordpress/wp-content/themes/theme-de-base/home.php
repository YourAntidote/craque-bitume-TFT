<?php 
/**
 * 	Template Name: home
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>


		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
		<section id="hero" class="accueil max-width container-fluid hero row d-flex justify-content-evenly justify-content-xl-center">
      
        <div class="cote gauche pt-5 d-flex flex-column col-11 col-sm-8 col-md-9 col-xl-5 justify-content-center justify-content-md-center justify-content-lg-center  align-items-md-center align-items-center align-items-xl-start">
          <h1 class="text-center text-md-start text-overflow hero-titre-1"><?php $patate = get_field('titre_hero_1'); echo $patate; ?></h1>
          <h1 class="text-center text-md-start text-overflow hero-titre-2"><?php the_field('titre_hero_2'); ?></h1>
          <h1 class="text-center text-md-start text-lg-start text-overflow hero-titre-3"><?php the_field('titre_hero_3'); ?></h1>
          <h4 class="text-center text-md-center text-md-start text-lg-start text-overflow pb-3 hero-titre-4" ><?php the_field('titre_hero_description'); ?></h4>
          <button class="collectif d-flex flex-column col-9 col-md-5 col-lg-5 hero-btn"><?php the_field('titre_hero_button'); ?></button>
        </div>
        <div class="cote droit d-flex flex-column col-11 col-sm-8 col-md-7 col-xl-4 justify-content-start justify-content-lg-center align-items-start align-items-lg-start">
          <div class="container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/carroussel_1.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/carroussel_2.jpg" alt="Image 2"></div>
                <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/carroussel_3.jpg" alt="Image 3"></div>
                <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/carroussel_4.jpg" alt="Image 4"></div>
                <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/images/carroussel_5.jpg" alt="Image 5"></div>
              </div>
              <!-- Pagination -->
              <div class="swiper-pagination d-flex justify-content-between"></div>
              <!-- Navigation (boutons précédent/suivant) -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>

    </section>  

    <!-------------- SERVICES --------------->
    <section class="section__services container-fluid d-flex justify-content-center align-items-center">
      <div class="services__container services p-5 col-xl-11 max-width">
      <h1 class="section__titre pb-1 text-center"><?php the_field('service_title'); ?></h1>
        <div class="row d-flex flex-column flex-md-row justify-content-evenly align-items-center align-items-md-start">

			<?php
  $projects = new WP_Query(array(
    'post_type'      => 'detail-service',
    'posts_per_page' => -1, // Affiche tous les posts
  ));
  while ($projects->have_posts()) : $projects->the_post(); 
?> 
          <div class="col-11 col-md-5 col-lg-4 col-xl-3 mt-2">
            <img class="services__logo logo__jardinage" src="<?php bloginfo('template_url'); ?>/images/icon_donate.png" alt="♥">
            <h5 class="my-4 m-md-4"><?php the_title(); ?></h5>
            <p><?php the_content(); ?></p>
          </div>


<?php
  endwhile; 
  wp_reset_postdata(); 
?>
          
        </div>
      </div>
    </section>

<!-------------- NOUVELLES --------------->

    <section class="section__services container-fluid d-flex justify-content-center align-items-center">
      <div class="services__container row d-flex services p-sm-3 p-md-5 col-xl-11 justify-content-center align-content-center max-width">
        <h1 class="section__titre pb-1 text-center"><?php the_field('formation_title'); ?></h1>

        <div class="row d-flex m-0 p-0 flex-md-row justify-content-center align-items-center align-items-md-start">
			
			<?php
  				$projects = new WP_Query(array(
   					'post_type'      => 'court-new-premiers',
    				'posts_per_page' => 2, // Affiche tous les posts
  					));
  				while ($projects->have_posts()) : $projects->the_post(); 
			?> 

          <div class="nouvelle__carte nouvelle my-4 col-12 col-md-8 col-lg-6 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <!--<div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-rocket-takeoff-fill nouvelle__logo logo__atelier"></i></div> -->
              <div class="col-10 p-0">
                <h6 class="my-1"><?php the_title(); ?></h6><!--<i class="nouvelle__icon bi bi-fire"></i>-->
                <p><?php the_content(); ?></p><!--<i class="bi bi-arrow-up-right"></i>-->
              </div>
            </div>
          </div>
			
			<?php
  				endwhile; 
  				wp_reset_postdata(); 
			?>
			<?php
  				$projects = new WP_Query(array(
   					'post_type'      => 'court-nouvelles',
    				'posts_per_page' => -1, // Affiche tous les posts
  					));
  				while ($projects->have_posts()) : $projects->the_post(); 
			?> 

          <div class="nouvelle__carte none nouvelle my-4 col-12 col-md-8 col-lg-6 col-xl-4 d-flex justify-content-center justify-content-lg-start align-items-center">
            <div class="col p-0 m-0 d-flex justify-content-evenly flex">
              <!--<div class="col-2 col-xl-1 mr-2 d-flex justify-content-center align-content-center text-center"><i class="bi bi-rocket-takeoff-fill nouvelle__logo logo__atelier"></i></div> -->
              <div class="col-10 p-0">
                <h6 class="my-1"><?php the_title(); ?></h6><!--<i class="nouvelle__icon bi bi-fire"></i>-->
                <p><?php the_content(); ?></p><!--<i class="bi bi-arrow-up-right"></i>-->
              </div>
            </div>
          </div>
			
			<?php
  				endwhile; 
  				wp_reset_postdata(); 
			?>

          

        </div>
        <button id="voirPlusButton" class="col-5 col-md-4 col-lg-2 col-xl-2 d-flex text-center justify-content-center align-items-center align-content-center align-self-center"><?php the_field('formation_button'); ?></button>

        </div>
    </section>


<!-------------- TÉMOIGNAGE --------------->

    <section id="simple-list-item-3" class="section-testimonials  container-fluid d-flex justify-content-center align-items-center">
      <div class="col-xl-11 max-width testimonials row mt-8 d-flex flex-column justify-content-center align-items-center align-content-center max-width">
      <div class="row">
        <h2 class="text-center mb-4 mt-5 section__titre mx-0"><?php the_field('temoignage_title'); ?></h2>
        <h5 class="text-center mb-4 px-0 mx-0"><?php the_field('temoignage_description'); ?></h5>
      </div>

      <div class="temoignage__personne d-flex my-4 m-sm-3 m-md-0 my-md-3 my-lg-4 my-xl-5 justify-content-center align-items-center align-items-md-start">
        <div class="temoignage__card people">
          <img class="temoignage__image card-img-top" src="<?php bloginfo('template_url'); ?>/images/portrait-3.jpg" alt="portrait-3">
          <i class="bi bi-chat-right-quote temoignage__quote"></i>
          <div class="card-body container-fluid">
            <h6 class="temoignage__texte card-text text-center text-lg-start"><?php the_field('temoignage_carte'); ?></h6>
            <br>
            <h5 class="temoignage__nom card-title text-center text-lg-end">Gabrielle S.</h5>
            <h5 class="temoignage__description description text-center text-lg-end"><?php the_field('temoignage_region'); ?></h5>
          </div>
        </div>
      </div>
      
    </div>
  </section>


  <!-------------- Donation --------------->
  <section class="section_donation container-fluid d-flex justify-content-center align-items-center">
    <div class="services__container row d-flex donation p-5 col-xl-11 justify-content-center align-content-center max-width-donation">
      <h1 class="section__titre pb-1 text-center">Donation</h1>
      <div class="col d-flex flex-column donation__column justify-content-center align-content-center">
        <div class="col-12 pb-5 d-flex justify-content-center align-items-center">
          <img src="<?php bloginfo('template_url'); ?>/images/icon_donation.png">
        </div>
        <div class="anim_gsap_index text-center">
      <div class="donation__h2 text-center">
        <h2 class="donation__h2__text_front"><?php the_field('donation_quote_1'); ?></h2>
      </div>
        <div class="donation__h2 text-center">
        <h2 class="donation__h2__text_front"><?php the_field('donation_quote_2'); ?></h2>
      </div>
        <div class="donation__h2 text-center">
        <h2 class="donation__h2__text_front"><?php the_field('donation_quote_3'); ?></h2>
      </div>
      
    </div>
        <div class="row donation_row d-flex justify-content-center align-items-center  pt-4 pb-2 ">
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564409008" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center"><?php the_field('prix-1'); ?></a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564507312" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center"><?php the_field('prix-2'); ?></a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564540080" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center"><?php the_field('prix-3'); ?></a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564605616" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center"><?php the_field('prix-4'); ?></a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume?variant=42587564671152" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center"><?php the_field('prix-5'); ?></a>
          </div>
          <div class="donation__button col-4 col-md-3 col-lg-2 col-xl-1 d-flex justify-content-center align-content-center">
            <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume" type="button" class="d-flex col-12 justify-content-end btn btn-outline-warning btn-lg ml-lg-2 mt-2 mt-lg-0 text-center"><?php the_field('prix-autre'); ?></a>
          </div>

        </div>
        <p class="donation_p pt-4"><?php the_field('prix-recu'); ?></p>
      </div>
    </div>

  </section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>