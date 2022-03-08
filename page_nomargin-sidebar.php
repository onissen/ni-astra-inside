<?php

/**
* Template Name: No Marign mit Sidebar	
*
 * @package Astra
 * @since 1.0.0
 * 
 * Die Datei read_template.php liest aus dem diesem Dateinamen das Template aus. 
 * Daraufhin erhält der DIV mit der Klasse ast-container in der header.php eine weitere Klasse 'nomargin-sidebar', 
 * die wiederum in der style.css individuell gestylet wird.
 * 
 */

 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>
		

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
