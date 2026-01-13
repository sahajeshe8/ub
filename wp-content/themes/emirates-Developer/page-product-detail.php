<?php
/**
 * Template Name: Product detail
 * 
 * The template for displaying individual product category pages
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	// Set a specific banner image for Product Category page (can be changed as needed)
	set_query_var('inner_banner_image', get_template_directory_uri() . '/assets/images/banner-3.jpg');

	// Optionally set a custom banner title (leave empty to use page title)
	set_query_var('inner_banner_title', 'Fan - Industrial & Commercial');

	get_template_part('template-parts/inner-banner');
	?>

	<?php
	// Breadcrumb for Product Category page
	$custom_breadcrumb = array(
		array(
			'title' => 'Home',
			'url' => home_url('/'),
		),
		array(
			'title' => 'Products',
			'url' => home_url('/products'),
		),
		array(
			'title' => 'Fans',
			'url' => home_url('/product-fan'),
		),

		array(
			'title' => 'Fan - Industrial & Commercial', // or use custom category name
			'url' => get_permalink(),
		),
	);
	set_query_var('breadcrumb_items', $custom_breadcrumb);

	get_template_part('template-parts/breadcrumb');
	?>

	<?php
	// Product Overview data
	$product_overview_data = array(
		'title' => 'Overview',
		'description' => array(
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.'
		),
	);
	set_query_var('product_overview_data', $product_overview_data);

	get_template_part('template-parts/product-overview');
	?>

	<?php
	// Product Category data
	$product_category_data = array(
		'category_title' => 'Product Categories',
		'categories' => array(
			array(
				'name' => 'Ceiling Fan',
				'url' => '#',
				'is_active' => true,
				'icon_type' => 'arrow',
			),
			array(
				'name' => 'Ventilating Fan',
				'url' => '#',
				'is_active' => false,
				'icon_type' => 'arrow',
			),
			array(
				'name' => 'Pedestal Fan / Mist Fan',
				'url' => '#',
				'is_active' => false,
				'icon_type' => 'plus',
			),
		),
		'products' => array(
			// Ceiling Fan products (category_id: 0)
			array(
				'image' => get_template_directory_uri() . '/assets/images/fan-01.jpg',
				'title' => 'Ceiling Fan - 56"',
				'category_id' => 0,
				'description' => array(
					'One of the most favoured selections of clients owing to its hassle free performance',
					'Powerful and durable motor with double ball bearing which produce strong airflow',
					'Approved by ESMA & GMARK',
					'Cost effective with 2Years of Warranty',
					'3-Speed wall mounted regulator',
				),
			),
			array(
				'image' => get_template_directory_uri() . '/assets/images/fan-02.jpg',
				'title' => 'Ceiling Fan Kbqs - 56"',
				'category_id' => 0,
				'description' => array(
					'Stylish design with superior performance',
					'Wider blade for higher air delivery',
					'G-MARK approved',
					'5-speed wall mounted regulator',
					'Powerful and durable motor with double ball bearing',
					'Low Noise, Enhanced safety features',
					'Long Life with 5years of warranty',
				),
			),
			// Ventilating Fan products (category_id: 1)
			array(
				'image' => get_template_directory_uri() . '/assets/images/fan_0000_Layer 24.jpg',
				'title' => 'Ventilating Fan',
				'category_id' => 1,
				'description' => array(
					'Provide better efficiency and comfort with low noise level',
					'Feature high performance motors and improved blade design, providing better performance and longer life',
					'ESMA Approved',
					'Easy for installation',
					'Made of ABS material',
				),
			),
			array(
				'image' => get_template_directory_uri() . '/assets/images/fan_0007_Layer 17.jpg',
				'title' => 'Ventilating Fan (Industrial)',
				'category_id' => 1,
				'description' => array(
					'Industrial Ventilating fan available in many sizes from 10" to 24"',
					'Epoxy powder coating to make it corrosion resistant against chemically charged atmosphere and saturated humid conditions',
					'Ventilating fan ensures operation at high temperature upto +50°C',
					'Distinctive wave shape blade for more air and less noise',
					'High-quality, low weight, novel outlook, easy for install',
				),
			),
			// Pedestal Fan / Mist Fan products (category_id: 2)
			array(
				'image' => get_template_directory_uri() . '/assets/images/fan_0002_Layer 22.jpg',
				'title' => 'Industrial Wall Mounted & Pedestal Fan',
				'category_id' => 2,
				'description' => array(
					'Heavy Duty Stand Fan is designed for indoor industrial, commercial, and agricultural usage. KedBrooke Pedestal Fans models are perfect for factories, gardens, animal shed, warehouses and garages.',
					'The coated finish and all metal construction make this fan rust-resistant, durable, and easy to maintain.',
					'Pedestal Fan can easily be assembled by using common household tools and provides 3 powerful speeds and an on/off oscillation function for versatile airflow levels.',
				),
			),
		),
	);
	set_query_var( 'product_category_data', $product_category_data );

	get_template_part( 'template-parts/product-category' );
	?>

	<?php
	get_template_part('template-parts/brand-certificate');
	?>

	<?php
	get_template_part('template-parts/enquire-now');
	?>


</main><!-- #main -->

<?php
get_footer();

