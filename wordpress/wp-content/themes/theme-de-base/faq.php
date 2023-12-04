<?php 
/**
 * 	Template Name: faq
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<main>
	<!------------------------------------ HERO ----------------------------------------------------->
		<div class="contenu-news">
      <div class="histoire__hero">
        <h1 class="nouvelles__hero-title"><?php the_title(); ?></h1>
      </div>

            <!------------------------------ DESCRIPTION GÉNÉRIQUE ----------------------------------------------------->
    <div class="card description_generique d-flex justify-content-center align-content-center align-items-center">
      <div class="card-body max-width ">
      <p class="description_generique_texte text-justify"><?php the_content(); ?></p>
    </div>
</div>


<!------------------------------------ FAQ ----------------------------------------------------->

    <div class="accordion accordion_faq m-5">
		
		<?php
  $projects = new WP_Query('post_type=question');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php the_ID(); ?>"
            aria-expanded="false" aria-controls="collapseOne<?php the_ID(); ?>">
            <strong><?php the_title(); ?></strong>
          </button>
        </h2>
        <div id="collapseOne<?php the_ID(); ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
           
			   <?php the_content(); ?>
			  
          </div>
        </div>
      </div>
		<?php
  endwhile; 
  wp_reset_postdata(); 
?>
      </div>
    </div>
  </main>



<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>