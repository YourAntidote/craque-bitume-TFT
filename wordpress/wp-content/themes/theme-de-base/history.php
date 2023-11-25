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
      <div class="histoire__hero">

        <h1 class="nouvelles__hero-title"><?php the_title(); ?></h1>
      </div>

            <!------------------------------ DESCRIPTION GÉNÉRIQUE ----------------------------------------------------->
    <div class="card description_generique d-flex justify-content-center align-content-center align-items-center">
      <div class="card-body max-width ">
      <p class="description_generique_texte text-justify"><?php the_content(); ?></p>
    </div>
</div>
			
			<!------------------------------------ TIMELINE ----------------------------------------------------->
      <h2 class="propos__title max-width text-center">Notre histoire</h2>
      <div class="timeline">
        <div class="line"></div>
        <div class="events">
          <div class="event">
            <h2 class="event_titre"><strong>2014</strong></h2>
            <div class="parent_texte">
              <p class="event_texte text-center">En 2014, Craque-Bitume a signé un protocole d'entente avec le Centre
                Louis-Jolliet afin d'être reconnu comme organisme qui donne de l'éducation
                populaire! <br> Bravo et merci au Centre Jacques-Cartier de nous avoir appuyéEs
                dans cette démarche.</p>
            </div>
          </div>
          <div class="event">
            <h2 class="event_titre"><strong>2015</strong></h2>
            <div class="parent_texte">
              <p class="event_texte text-center">Le volet «Faites-le vous-mêmes» a été très actif. Les initiations aux
                pousses et aux germinations ont fait salle comble ainsi que les formations données
                sur plusieurs semaines comme Autonomie vestimentaire, Alimentation holistique,
                Herboristerie urbaine et Jardinage écologique.</p>
            </div>
          </div>
          <div class="event">
            <h2 class="event_titre"><strong>2016</strong></h2>
            <div class="parent_texte">
              <p class="event_texte text-center">
                Grâce à la mobilisation de citoyenNes qui ont trouvé un financement auprès de la Caisse populaire
                Desjardins
                de Charlesbourg et au soutien de la Ville de Québec, un site de compostage a ouvert au Parc
                Henri-Casault en
                juillet 2016.</p>
            </div>
          </div>
          <div class="event">
            <h2 class="event_titre"><strong>2017</strong></h2>
            <div class="parent_texte">
              <p class="event_texte text-center">
                En 2017, Craque-Bitume a mis sur pied, accompagné et/ou participé à l'élaboration de près d'une dizaine
                de
                projets en agriculture urbaine! Les différents projets sont séparés selon les catégories suivantes :
                Jardins
                collectifs pour tous, Jardins pédagogiques, Accompagnement horticole sur mesure, Formations thématiques
                en
                jardinage, et bien d'autres !</p>
            </div>
          </div>
          <div class="event">
            <h2 class="event_titre"><strong>2018</strong></h2>
            <div class="parent_texte">
              <p class="event_texte text-center">
                À la suite d'un don reçu de la part des Capucins, le Collectif a choisi d'investir 400 $ dans son fond
                Philippe Pelletier. Ce fond a comme mission de proposer un montant à des organismes qui nous
                contactent pour bénéficier de nos services, mais qui n'ont pas les moyens de payer la facture.
                Deux garderies du quartier ont pu bénéficier d'ateliers de jardinage avec Madame Jardine. Nous avons pu
                offrir une formation sur le micro-jardinage (les pousses et les germinations)
                dans le cadre du colloque d'Enjeu (Environnement Jeunesse) organisé en septembre au Cégep Ste-Foy.</p>
            </div>
          </div>
          <div class="event">
            <h2 class="event_titre"><strong>2019</strong></h2>
            <div class="parent_texte">
              <p class="event_texte text-center">Au niveau du compostage, l'année 2019 a été marquée par l’installation
                de 9 nouveaux sites de compostage
                communautaire et par une augmentation importante de l’étendue géographique du réseau. La Ville de Québec
                a financé ces belles installations en considérant la forte volonté de composter chez les citoyens et
                citoyennes
                de Québec dans des quartiers plus éloignés, en banlieue. Le réseau est donc passé de 21 à 30 sites et de
                1134 à
                1925 participantEs.</p>
            </div>
          </div>
          <div class="event">
            <h2 class="event_titre"><strong>2020</strong></h2>
            <div class="parent_texte">
              <p class="event_texte text-center">Des organismes communautaires frappés de plein fouet par la crise
                engendrée par la COVID-19, de
                l’aide qui tarde parfois à venir, des défis à relever et de l’incertitude à revendre. Voici ce qui a
                caractérisé le quotidien de l’ensemble des organismes communautaires een 2020 et
                Craque-Bitume n’y a pas échappé. Avec des obstacles se multipliant de jour en jour, ce sont des
                habiletés en gestion de crise que les employé·e·s et les bénévoles de l’organisme ont cultivées.</p>
            </div>
          </div>
          <div class="event">
            <h2 class="event_titre"><strong>2021</strong></h2>
            <div class="parent_texte">
              <p class="event_texte text-center">C’est en juin 2011 que Craque-Bitume a signé ses lettres patentes et
                que l’organisme a été
                officiellement fondé. Toutefois, nos activités ont réellement débuté le 1er janvier 2012. Ainsi, 2021
                marquait, du moins en partie, le 10ième anniversaire de l’organisme.</p>
            </div>
          </div>
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