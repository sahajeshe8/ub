<?php
/**
 * Template Name: Brand Detail
 * 
 * The template for displaying individual brand detail pages
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Brand Detail page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/beand-detail-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
set_query_var( 'inner_banner_title', 'DECODUCT' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb will automatically detect brand detail page and show: Home > Brands > [Brand Name]
// To customize breadcrumb, uncomment and modify the code below:
 
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Brands',
		'url' => home_url( '/brands' ),
	),
	array(
		'title' => 'DECODUCT', // or use get_the_title() for dynamic
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );
 
get_template_part( 'template-parts/breadcrumb' );
?>

<?php
get_template_part( 'template-parts/product-overview' );
?>

<?php
get_template_part( 'template-parts/associated-product' );
?>
<?php
get_template_part( 'template-parts/enquire-now' );
?>





</main><!-- #main -->

<?php
get_footer();

