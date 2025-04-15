<?php
/**
 * The front page template file
 *
 * @package DMR
 */

get_header();
?>

<main id="main" class="site-main">
	<?php get_template_part( 'template-parts/hero' ); ?>
	<?php get_template_part( 'template-parts/offerings' ); ?>
</main>

<?php
get_footer();
