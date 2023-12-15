<?php 
/**
 * 	Template Name: news-hub
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

        <!--section contennant les cartes de nouvelles-->
        <div class="nouvelles__filter-bar">
          <select class="custom-select filter-dropdown">
            <option selected>Filtrer par</option>
            <option value="date">Date récente</option>
            <option value="alphabetical">Alphabetique</option>
          </select>
        </div>

<div class="nouvelle__card-list">
	<?php
  $projects = new WP_Query(array(
    'post_type'      => 'detail-formation',
    'posts_per_page' => -1, 
  ));
  while ($projects->have_posts() && $current_post_count < $posts_per_page) : $projects->the_post(); 
    $current_post_count++;
?> 	
	
          <a href="<?php the_permalink(); ?>" class="nouvelle_link">
              <div class="nouvelle_card un">
              <div class="top-row">
                  <p class="nouvelle-top-title">Nouvelles</p>
                <p class="date"><?php the_date() ?></p>
              </div>
              <div class="middle-up-row">
                <h2> <?php the_title(); ?> </h2>
              </div>
              <div class="middle-down-row">
                    <p class="nouvelle__card-description"><?php the_field("description_courte"); ?></p>
              </div>
              <div class="bottom-row">
                <p class="formation">Formation</p>
                <div class="icone">
                  <svg viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.9707 19.42V13.89" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M2.28234 12.67C2.25751 12.2167 2.32536 11.7631 2.48175 11.3369C2.63813 10.9106 2.87975 10.5208 3.19187 10.1911C3.504 9.86141 3.88006 9.59877 4.29708 9.41931C4.71411 9.23985 5.16335 9.14734 5.61735 9.14734C6.07135 9.14734 6.52058 9.23985 6.9376 9.41931C7.35463 9.59877 7.73069 9.86141 8.04281 10.1911C8.35493 10.5208 8.59657 10.9106 8.75296 11.3369C8.90934 11.7631 8.97717 12.2167 8.95234 12.67V18.3C8.97717 18.7533 8.90934 19.207 8.75296 19.6332C8.59657 20.0594 8.35493 20.4492 8.04281 20.7789C7.73069 21.1086 7.35463 21.3712 6.9376 21.5507C6.52058 21.7301 6.07135 21.8227 5.61735 21.8227C5.16335 21.8227 4.71411 21.7301 4.29708 21.5507C3.88006 21.3712 3.504 21.1086 3.19187 20.7789C2.87975 20.4492 2.63813 20.0594 2.48175 19.6332C2.32536 19.207 2.25751 18.7533 2.28234 18.3V12.67Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M8.97076 18.3C8.96813 18.7399 9.05217 19.176 9.21809 19.5835C9.38402 19.9909 9.62857 20.3617 9.93779 20.6747C10.247 20.9876 10.6148 21.2366 11.0203 21.4073C11.4257 21.5781 11.8608 21.6674 12.3008 21.67H16.4208C17.3814 21.6693 18.316 21.357 19.0841 20.78C19.8522 20.203 20.4125 19.3924 20.6808 18.47L22.1808 13.39C22.3002 13.0523 22.3372 12.691 22.2889 12.3361C22.2405 11.9812 22.1081 11.643 21.9028 11.3496C21.6974 11.0562 21.4249 10.816 21.108 10.6491C20.7911 10.4822 20.4389 10.3934 20.0808 10.39H14.5608V5.10999C14.5621 4.91825 14.5256 4.72818 14.4535 4.55054C14.3813 4.3729 14.2749 4.21121 14.1402 4.07471C14.0056 3.9382 13.8454 3.82953 13.6687 3.75494C13.4921 3.68036 13.3025 3.64132 13.1108 3.64001V3.64001C12.7953 3.64144 12.4889 3.74572 12.2381 3.93701C11.9872 4.1283 11.8056 4.39617 11.7208 4.70001L8.97076 13.86" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
              </div>
            </div>
          </a>
	<?php
  endwhile; 
  wp_reset_postdata(); 
?>

	<?php if ($projects->post_count > $current_post_count) : ?>
    <button class="load-more-posts" id="load-more-posts">Voir plus</button>
<?php endif; ?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var postsContainer = document.querySelector('.nouvelle__card-list');
    var posts = document.querySelectorAll('.nouvelle_link');
    var postsPerPage = 3;
    var currentPage = 2; // Commencez à partir de la deuxième page pour afficher les 10 premiers posts

    function showNextPosts() {
      var startIndex = (currentPage - 1) * postsPerPage;
      var endIndex = startIndex + postsPerPage;

      for (var i = startIndex; i < endIndex; i++) {
        if (posts[i]) {
          posts[i].style.display = 'block';
        }
      }

      currentPage++;

      if (endIndex >= posts.length) {
        document.getElementById('load-more-posts').style.display = 'none';
      }
    }

    document.getElementById('load-more-posts').addEventListener('click', showNextPosts);

    // Initialisez la visibilité des premiers posts
    for (var i = 0; i < 6; i++) {
      if (posts[i]) {
        posts[i].style.display = 'block';
      }
    }

    // Masquez les autres posts au début
    for (var i = 6; i < posts.length; i++) {
      if (posts[i]) {
        posts[i].style.display = 'none';
      }
    }
  });
</script>





<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>