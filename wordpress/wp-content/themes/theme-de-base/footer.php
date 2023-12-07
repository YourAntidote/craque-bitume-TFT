<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
<section class="section__footer container-fluid d-flex flex-column">

<div class="row flex-xl-row colonne--haut d-flex justify-content-evenly align-items-start">

  

  <div class="row col-12 col-sm-11 col-md-9 col-lg-9 col-xl-8 d-flex justify-content-center align-content-center align-items-centers text-center flex-wrap">
	  
	<div class="footer-nav col-12 col-md-4 col-lg-3 col-xl-1 mb-2 mt-5 d-flex flex-column align-items-center">
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('home'))); ?>" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none"><img class="footer__logo " src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Logo"></a>
	</div>

	  
	<div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center align-content-start">
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('nouvelles'))); ?>"> <h5 class="section"><?php the_field('footer-nouvelle'); ?></h5></a>
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('nouvelles'))); ?>" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte"><?php the_field('footer-actualite'); ?></p></a>
	</div>
  
	<div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center">
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>"><h5 class="section"><?php the_field('footer-service'); ?></h5></a>
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte"><?php the_field('footer-jardin'); ?></p></a>
	</div>

	<div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center">
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('equipe'))); ?>"><h5 class="section"><?php the_field('footer-equipe'); ?></h5></a>
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('equipe'))); ?>" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte"><?php the_field('footer-nos-equipe'); ?></p></a>
	</div>
  
	<div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center">
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('histoire'))); ?>"><h5 class="section"><?php the_field('footer-histoire'); ?></h5></a>
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('histoire'))); ?>" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte"><?php the_field('footer-nos-histoire'); ?></p></a>
	</div>

	<div class="footer-nav col-12 col-md-4 col-lg-4 col-xl-2 mb-2 mt-5 d-flex flex-column align-items-center">
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('a-propos'))); ?>"><h5 class="section"><?php the_field('footer-propos'); ?></h5></a>
	  <a href="<?php echo esc_url(get_permalink(get_page_by_path('f-a-q'))); ?>" class="nav-link p-0 text-body-secondary sous-section"><p class="footer_sous_texte"><?php the_field('footer-faq'); ?></p></a>
	</div>
  </div>
  <div class="col-12 col-md-9 col-xl-4 mb-2 pt-4  d-flex flex-column align-items-center">
	<h5 class="section px-2 col-11 "><?php the_field('footer-message'); ?></h5>
	<div class="d-flex flex-wrap flex-lg-row justify-content-center sociaux mt-3  mt-xl-0">
	  <a href="https://www.facebook.com/craquebitume"                           class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-facebook"></i></a>
	  <a href="https://www.instagram.com/craque.bitume/"                        class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-instagram"></i></a>
	  <a href="https://www.youtube.com/@craque-bitumeobnl4387"                  class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-youtube"></i></a>
	  <a href="https://craquebitume.org/products/faites-un-don-a-craque-bitume" class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-cash-coin"></i></a>
	  <a href="https://maps.app.goo.gl/16J4zraB6vR6eccZ9"                       class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-geo-alt"></i></a>
	  <a href="https://craquebitume.org/"                                       class="footer__btn d-flex justify-content-end align-items-center text-center mx-4 mt-3"><i class="bi bi-box-arrow-up-right"></i></a>
	</div>
	<p class="sous-section telephone mt-4"><i class="bi bi-telephone-inbound-fill"></i>+1 (418) 523-4580</p>
  </div>  

  <!-- <a href="https://maps.app.goo.gl/16J4zraB6vR6eccZ9" class="adresse"><p class="sous-section adresse">Centre des opérations : 435 Rue du Roi, Québec, QC G1K 2X1</p></a> -->
  <!-- <a href="https://maps.app.goo.gl/16J4zraB6vR6eccZ9" class="adresse"><p class="sous-section adresse">Centre administratif : 870 Av. De Salaberry, Québec, QC G1R 2T9 </p></a> -->

</div>


<div class="row"><div class="ligne-design my-1"></div></div>


<div class="row">
  <div class="d-flex flex-row flex-wrap mb-6 sponsor-colonne">
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.capucin.org/"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/capucin.png" alt="Capucin"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://clj.cssc.gouv.qc.ca/"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/centre_louis-jolliet.png" alt="centre_louis-jolliet"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.quebec.ca/sante/systeme-et-services-de-sante/organisation-des-services/cisss-et-ciusss"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/centre_uni_quebec.png" alt="centre_uni_quebec"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://collectivitezenquebec.org/"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/collectivite_zen_quebec.png" alt="collectivite_zen_quebec"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.desjardins.com/votre-caisse/index.jsp?transit=81520366" ><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/desjardins.png" alt="Desjardins"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://cdcbeauport.ca/"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/dev_comunautaire_beauport.png" alt="dev_comunautaire_beauport"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.canada.ca/fr/emploi-developpement-social.html"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/dev_social_canada.png" alt="dev_social_canada"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.inspq.qc.ca/"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/insp_qc.png" alt="insp_qc"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.littoralcitoyen.org/"><img cclass="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/litoral_citoyen.png" alt="litoral_citoyen"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.omhq.qc.ca/"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/omhg.png" alt="omhg"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="http://repac.org/"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/repac-03-12.png" alt="repac-03-12"></a>
	<a class="d-flex align-items-center justify-content-center col-3 col-lg-1" href="https://www.saintsuave.com/"><img class="logo sponsor" src="<?php bloginfo('template_url'); ?>/images/saint-suave.png" alt="saint-suave"></a>
  </div>
</div>
<div class="copyright d-flex justify-content-center align-content-center text-center mt-2">
  <p class="credit text-body-secondary sous-section mb-0">&copy; Développement web - Collège Montmorency - Craque-Bitume, TFT - 2023</p>
</div>
</section>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
