<?php 
/**
 * 	Template Name: equipe
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

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
			
		
			
			<h2 class="equipe__title my-4 max-width text-center">Notre équipe</h2>
      <div class="container">
        <div class="row justify-content-evenly">
			
			<?php
  $projects = new WP_Query('post_type=membre');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
          <div class="col-12 col-md-6 col-xl-4">
            <a href="#Modalplus" data-bs-toggle="modal" data-bs-target="#Modalplus<?php the_ID(); ?>" class="equipe_href">
              <div class="card equipe_card m-3">
				  <?php the_post_thumbnail('medium', array('class' => 'card-img-top equipe_img')); ?>
                <div class="card-body equipe_card_body">
                  <h5 class="card-title text-center equipe_titre"><?php the_title(); ?></h5>
                  <p class="card-text text-center equipe_texte"><?php the_content(); ?></p>
            </div>
				</div>
					</a>
			</div>
			<?php
  endwhile; 
  wp_reset_postdata(); 
?>
	</div>
</div>
			
			<!------------------------------------ MODALE DE L'ÉQUIPE ----------------------------------------------------->
			<?php
  $projects = new WP_Query('post_type=membre');
  while ($projects->have_posts()) : $projects->the_post(); 
?>
    <div class="modal fade" id="Modalplus<?php the_ID(); ?>" tabindex="-1">
      <div class="modal-dialog ">
        <div class="modal-content equipe_modal">
          <div class="modal-header">
            <h5 class="modal-title equipe_modal_titre"><?php the_title(); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body equipe_modal_body">
            <div class="equipe_modal_img_div">
				<?php the_post_thumbnail('medium',array('class' => 'equipe_modal_img m-3')); ?>
            </div>
            <p class="text-center equipe_modal_texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Lacus suspendisse faucibus interdum posuere lorem ipsum. Nulla aliquet enim tortor at
              auctor urna nunc id. Vitae congue eu consequat ac felis donec. Pretium quam vulputate dignissim
              suspendisse in est. Adipiscing elit ut aliquam purus. Libero id faucibus nisl tincidunt eget nullam.
              Gravida dictum fusce ut placerat orci nulla. Bibendum arcu vitae elementum curabitur vitae. Morbi
              tristique senectus et netus. Duis at tellus at urna condimentum mattis pellentesque. Volutpat diam ut
              venenatis tellus in metus vulputate eu scelerisque. Vivamus arcu felis bibendum ut. Dignissim sodales ut
              eu sem integer vitae justo eget magna. Natoque penatibus et magnis dis parturient montes. At quis risus
              sed vulputate odio ut enim blandit.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary equipe_modal_bouton" data-bs-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
			<?php
  endwhile; 
  wp_reset_postdata(); 
?>
		
			
			
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>