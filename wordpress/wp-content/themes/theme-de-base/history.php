<?php 
/**
 * 	Template Name: histoire
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
      <div class="histoire__hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

        <h1 class="nouvelles__hero-title"><?php the_title(); ?></h1>
      </div>

            <!------------------------------ DESCRIPTION GÉNÉRIQUE ----------------------------------------------------->
    <div class="card description_generique d-flex justify-content-center align-content-center align-items-center">
      <div class="card-body max-width ">
      <p class="description_generique_texte text-justify"><?php the_content(); ?></p>
    </div>
</div>
			
			<!------------------------------------ TIMELINE ----------------------------------------------------->
      <div class="timeline">
        <div class="line"></div>
        <div class="events">
			<?php
  $projects = new WP_Query(array(
    'post_type'      => 'histoire',
    'posts_per_page' => -1, // Affiche tous les posts
  ));
  while ($projects->have_posts()) : $projects->the_post(); 
?> 	
          <div class="event">
            <h2 class="event_titre"><strong><?php the_title(); ?></strong></h2>
            <div class="parent_texte">
              <div class="event_texte text-center"><?php the_content(); ?></div>
            </div>
          </div>
			<?php
  endwhile; 
  wp_reset_postdata(); 
?>
          
        </div>
      </div>

      <div class="espace_event">
      </div>
	</div>



  </main>

  <div class="ignorez"></div>

			
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>