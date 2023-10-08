<?php

/*
 * Template Name: plaeta page
 */

?>
 
<?php get_header(); ?>

<main id="content-page">
    <!-- LOOP -->
    <?php if ( have_posts() ) : ?>
    	<?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/block', 'title-paleta' ); ?>

        <?php get_template_part( 'template-parts/block', 'list-paleta' ); ?>
        
    	<?php endwhile; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>