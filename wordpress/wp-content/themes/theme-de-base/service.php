<?php 
/**
 * 	Template Name: service-details
 *  Template Post type: service-unique
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

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
</div>

<!----------------------contenu formation ------------------->
<?php
  $projects = new WP_Query('post_type=service-unique');
?>	

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary m-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Apercu
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content equipe_modal">
      <div class="modal-header">
        <h1 class="modal-title fs-5 equipe_modal_titre" id="exampleModalLabel">
			<?php
$next_post = get_adjacent_post(false, '', false);
$prev_post = get_adjacent_post(false, '', true);

if ($next_post) {

    // Output the content of the next post
    echo apply_filters('the_title', $next_post->post_title);
} else if ($prev_post){

    // Output the content of the next post
    echo apply_filters('the_title', $prev_post->post_title);
}else {
    // If there is no next post, you can provide a default message or do something else
    echo '<p>No more posts to display.</p>';
}
			?> </h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body equipe_modal_body">
		  <p class="text-center equipe_modal_texte">
		  <?php
$next_post = get_adjacent_post(false, '', false);
$prev_post = get_adjacent_post(false, '', true);

if ($next_post) {

    // Output the content of the next post
    echo apply_filters('the_content', $next_post->post_content);
} else if ($prev_post){

    // Output the content of the next post
    echo apply_filters('the_content', $prev_post->post_content);
}else {
    // If there is no next post, you can provide a default message or do something else
    echo '<p>No more posts to display.</p>';
}
			  ?> </p>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>





<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>