<?php
/*
 * Template name: Services
 */

get_header(); ?>

<div>

</div>
<!-- ajout de la sidebar services -->
<?php if ( is_active_sidebar( 'services-widget-area' ) ) : ?> <!-- cela vérifie si la sidebar "service" est utilisée -->
	<div id="services-widget-area" class="container-services-sidebar" role="complementary">
		<?php dynamic_sidebar( 'services-widget-area' ); ?> <!-- si la sidebar "service" est utilisée, alors elle s'affiche ici -->
	</div>
<?php endif; ?>
<!-- fin ajout de la sidebar services -->
<?php get_footer();