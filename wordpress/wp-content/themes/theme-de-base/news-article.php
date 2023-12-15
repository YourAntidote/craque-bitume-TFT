<?php 
/**
 * 	Template Name: news-article
 *  Template Post type: detail-formation
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<?php
  $projects = new WP_Query('post_type=detail-formation');
?>	
			
<!-------------------contenu html------------------>
      <div class="contenu-news">
		  
		  <div class="card description_generique d-flex justify-content-center align-content-center align-items-center">
      <div class="card-body max-width ">
      <p class="description_generique_texte text-justify"><?php the_title(); ?></p>
    </div>
</div>


        <!--section contennant le contenu de la page dynamique-->
        <div itemscope itemtype="https://schema.org/Course" class="nouvelle-individuel__container">
          <div class="nouvelle-individuel__hero">
            <div class="nouvelle-individuel__hero-top">
              <p class="nouvelle__type">Nouvelle</p>
              <p itemprop="about" class="nouvelle__date"> <?php the_date() ?></p>
            </div>
             <div class="nouvelle-individuel__hero-middle">
               <p class="nouvelle-individuel__title">Nouvelle</br> Formation</p>
            </div>
            <div class="nouvelle-individuel__hero-bottom">
              <p class="nouvelle__formation">Formation</p>
              <svg class="nouvelle__icone" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.3165 11.9062C27.3165 14.1653 26.6517 16.2375 25.5075 17.9669C23.8377 20.4597 21.1938 22.2203 18.1169 22.6721C17.5912 22.7656 17.0501 22.8124 16.4935 22.8124C15.9368 22.8124 15.3957 22.7656 14.87 22.6721C11.7932 22.2203 9.14925 20.4597 7.47941 17.9669C6.33525 16.2375 5.67041 14.1653 5.67041 11.9062C5.67041 5.87662 10.5099 1 16.4935 1C22.4771 1 27.3165 5.87662 27.3165 11.9062Z" stroke="#354E38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M30.7953 26.6606L28.2441 27.2683C27.6721 27.4085 27.2237 27.8447 27.1 28.4212L26.5588 30.7115C26.2651 31.9579 24.688 32.3318 23.8685 31.3503L16.4934 22.8123L9.11819 31.3659C8.29874 32.3474 6.72166 31.9735 6.42789 30.7271L5.88674 28.4368C5.74759 27.8603 5.2992 27.4085 4.74259 27.2838L2.19144 26.6762C1.01637 26.3958 0.598908 24.9156 1.44929 24.0587L7.47928 17.9824C9.14912 20.4753 11.793 22.2358 14.8699 22.6877C15.3956 22.7811 15.9368 22.8279 16.4934 22.8279C17.05 22.8279 17.5912 22.7811 18.1169 22.6877C21.1937 22.2358 23.8376 20.4753 25.5074 17.9824L31.5374 24.0587C32.3878 24.9001 31.9704 26.3802 30.7953 26.6606Z" stroke="#354E38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M17.3901 7.20098L18.3023 9.03943C18.426 9.28872 18.7507 9.53802 19.0444 9.58476L20.6988 9.86519C21.7502 10.0366 21.9976 10.8156 21.24 11.579L19.9567 12.8722C19.7402 13.0903 19.6165 13.511 19.6938 13.8226L20.0649 15.4274C20.3587 16.6894 19.6938 17.1879 18.5806 16.518L17.0345 15.5987C16.7561 15.4274 16.2923 15.4274 16.014 15.5987L14.4678 16.518C13.3546 17.1723 12.6897 16.6894 12.9835 15.4274L13.3546 13.8226C13.4165 13.5266 13.3082 13.0903 13.0917 12.8722L11.8084 11.579C11.0508 10.8156 11.2982 10.0521 12.3496 9.86519L14.004 9.58476C14.2823 9.53802 14.607 9.28872 14.7307 9.03943L15.6429 7.20098C16.0913 6.20384 16.8953 6.20384 17.3901 7.20098Z" stroke="#354E38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
            </div>
          </div>
          <div itemscope itemtype="https://schema.org/Course" class="nouvelles-individuel__info">
            <div class="nouvelle-individuel__info-title">
              <h2 itemprop="about"><?php the_title()?></h2>
              <p class="nouvelle-individuel__info-description"> <?php the_content() ?> </p>
            </div>
            <div class="nouvelle-individuel__side-info">
              <div class="nouvelles-individuel__top-card">
                <div class="nouvelle-individuel__info-card-left">
                   <h3 class="nouvelles-individuel__info-card-title">
                    Heure
                  </h3>
                  <p itemprop="hasCourseInstance" class="nouvelles-individuel__info-card-detail">
                    <?php the_field("heure_formation")?>
                  </p>
                </div>
                <div class="nouvelle-individuel__info-card-right">
                    <svg  class="svg__clock" width="81" height="81" viewBox="0 0 81 81"  xmlns="http://www.w3.org/2000/svg">
        <path d="M40.3318 0C18.1493 0 0 18.1493 0 40.3318C0 62.5143 18.1493 80.6637 40.3318 80.6637C62.5143 80.6637 80.6637 62.5143 80.6637 40.3318C80.6637 18.1493 62.5143 0 40.3318 0ZM40.3318 10.083C57.0695 10.083 70.5807 23.5941 70.5807 40.3318C70.5807 57.0695 57.0695 70.5807 40.3318 70.5807C23.5941 70.5807 10.083 57.0695 10.083 40.3318C10.083 23.5941 23.5941 10.083 40.3318 10.083ZM35.2904 20.1659V42.5501L36.9036 43.8609L41.9451 48.9023L45.3733 52.7339L52.633 45.4741L48.8015 42.0459L45.3733 38.6177V20.3676H35.2904V20.1659Z" fill="#354E38"/>
        </svg>
        
                </div>
              </div>
              <div class="nouvelles-individuel__middle-card">
                <div class="nouvelle-individuel__info-card-left">
                   <h3 class="nouvelles-individuel__info-card-title">
                    Lieu
                  </h3>
                  <p itemprop="contentLocation" class="nouvelles-individuel__info-card-detail">
                    <?php the_field("lieu_formation")?>
                  </p>
                </div>
                <div class="nouvelle-individuel__info-card-right">
                    <svg class="svg__position" width="73" height="98" viewBox="0 0 73 98" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M36.4145 0C16.2651 0 0 16.2651 0 36.4145C0 60.6908 36.4145 97.1053 36.4145 97.1053C36.4145 97.1053 72.8289 60.6908 72.8289 36.4145C72.8289 16.2651 56.5638 0 36.4145 0ZM36.4145 12.1382C49.8878 12.1382 60.6908 23.0625 60.6908 36.4145C60.6908 49.8878 49.8878 60.6908 36.4145 60.6908C23.0625 60.6908 12.1382 49.8878 12.1382 36.4145C12.1382 23.0625 23.0625 12.1382 36.4145 12.1382Z" fill="#354E38"/>
        </svg>
        
                </div>
              </div>
              <div class="nouvelles-individuel__bottom-card">
                        <div class="nouvelle-individuel__info-card-left">
                   <h3 class="nouvelles-individuel__info-card-title">
                    Formateur
                  </h3>
                  <p itemprop="author" class="nouvelles-individuel__info-card-detail">
                    <?php the_field("formateur")?>
                  </p>
                </div>
                <div class="nouvelle-individuel__info-card-right">
                    <svg class="svg__formateur" width="83" height="83" viewBox="0 0 83 83" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M41.5 0C30.0875 0 20.75 11.62 20.75 25.9375C20.75 40.255 30.0875 51.875 41.5 51.875C52.9125 51.875 62.25 40.255 62.25 25.9375C62.25 11.62 52.9125 0 41.5 0ZM19.8162 51.875C8.81875 52.3937 0 61.42 0 72.625V83H83V72.625C83 61.42 74.285 52.3937 63.1838 51.875C57.5813 58.2038 49.9038 62.25 41.5 62.25C33.0962 62.25 25.4188 58.2038 19.8162 51.875Z" fill="#354E38"/>
        </svg>
        
                </div>
              </div>
              </div>
            </div>
          <div itemscope itemtype="https://schema.org/Course" class="nouvelle-individuel__prix">
            <div class="nouvelles-individuel__prix-left">   
				<div class="prix-left__row-one">
              <h3 class="prix-left__row-one"> <?php the_title()?> </h3></div>
                <p itemprop="about" class="prix-left__row-two"><?php the_field("prix_formation") ?>$</p>
                <div class="prix-left__row-three">
                  <div class="nouvelle-individuel__qte">
                    <p class="qte">Nombre de participants:</p>
                    <select name="qte-select" id="qte-select" class="qte-select">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  <div class="nouvelle-individuel__stock">
                    <p class="stock">place restante</p>
                    <p itemprop="audience" class="nbr-stock-restant"><?php the_field("place_restant")?></p>
                  </div>  
                </div>
                <div class="prix-left__row-four">
                  <p class="ajouter-panier">Ajouter Au Panier</p>
                  <svg class="panier-achat" width="56" height="42" viewBox="0 0 56 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.98508 0.014199C2.05665 0.16267 1.22526 0.673684 0.673802 1.43482C0.122344 2.19596 -0.104009 3.14488 0.0445401 4.07283C0.193089 5.00077 0.70437 5.83173 1.46591 6.3829C2.22745 6.93407 3.17686 7.1603 4.10529 7.01183H14.6072L15.2373 8.76124L18.1079 17.5083L20.9784 26.2553C21.2584 27.165 22.4487 28.0047 23.3588 28.0047H47.8633C48.8435 28.0047 49.9637 27.165 50.2438 26.2553L55.9148 8.76124C56.1949 7.85155 55.7748 7.01183 54.7946 7.01183H23.7089L21.0484 1.97354C20.765 1.39525 20.3275 0.906331 19.784 0.560627C19.2404 0.214923 18.612 0.0258397 17.9678 0.014199L3.96526 0.014199C3.75565 -0.004733 3.54476 -0.00473301 3.33515 0.014199C3.19525 0.00579429 3.05497 0.00579429 2.91507 0.014199L2.98508 0.014199ZM25.1092 35.0024C23.1488 35.0024 21.6085 36.5418 21.6085 38.5012C21.6085 40.4605 23.1488 42 25.1092 42C27.0695 42 28.6098 40.4605 28.6098 38.5012C28.6098 36.5418 27.0695 35.0024 25.1092 35.0024ZM46.113 35.0024C44.1527 35.0024 42.6124 36.5418 42.6124 38.5012C42.6124 40.4605 44.1527 42 46.113 42C48.0734 42 49.6137 40.4605 49.6137 38.5012C49.6137 36.5418 48.0734 35.0024 46.113 35.0024Z" fill="#354E38"/>
                    </svg>
                    
                </div>
            </div>
            <div class="nouvelle-individuel__prix-right">
              <span> </span>
              </div>
          </div>

<button type="button" class="btn btn-primary m-5 nouvelle_card text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
		  <div class="text-center equipe_modal_texte">
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
			  ?> </div>
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