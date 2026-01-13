<?php
/**
 * Template Name: Product accessories
 * 
 * The template for displaying accessories products page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Fan Products page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/product-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
set_query_var( 'inner_banner_title', 'Products Catogery' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb for Fan Products page
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Products',
		'url' => home_url( '/products' ),
	),
	array(
		'title' => 'Fans',
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>

<?php get_template_part( 'template-parts/products-category-list-accessories' ); ?>
</main><!-- #main -->

<?php
get_footer();