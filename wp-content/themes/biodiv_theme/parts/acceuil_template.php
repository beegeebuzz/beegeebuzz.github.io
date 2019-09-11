<?php
/*
Template Name: Acceuil
*/
?>

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2><?php echo get_post_field('post_title', 31); ?></h2>
            <p><?php echo get_post_field('post_content', 31); ?></p>
        </div>
        <div class="col-6">
			<?php echo do_shortcode('[metaslider id="34"]'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
			<?php get_sidebar(); ?>
        </div>
        <div class="col-10">
            <div class="row">
				<?php get_template_part('searchformbootstrap'); ?>
            </div>
            <div class="row">
				<?php get_template_part('observations-7j'); ?>
            </div>
            <div class="row">
                <div class="col-8">
					<?php get_template_part('a-voir'); ?>
                </div>
                <div class="col-4">
					<?php get_template_part('actualités'); ?>
                </div>
            </div>
        </div>

		<?php get_footer(); ?>
