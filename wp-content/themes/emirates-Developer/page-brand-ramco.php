<?php
/**
 * Template Name: Brand Ramco
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
    set_query_var('inner_banner_image', get_template_directory_uri() . '/assets/images/beand-detail-banner.jpg');

    // Optionally set a custom banner title (leave empty to use page title)
    set_query_var('inner_banner_title', 'RAMCO');

    get_template_part('template-parts/inner-banner');
    ?>

    <?php
    // Breadcrumb will automatically detect brand detail page and show: Home > Brands > [Brand Name]
// To customize breadcrumb, uncomment and modify the code below:
    
    $custom_breadcrumb = array(
        array(
            'title' => 'Home',
            'url' => home_url('/'),
        ),
        array(
            'title' => 'Brands',
            'url' => home_url('/brands'),
        ),
        array(
            'title' => 'RAMCO', // or use get_the_title() for dynamic
            'url' => get_permalink(),
        ),
    );
    set_query_var('breadcrumb_items', $custom_breadcrumb);

    get_template_part('template-parts/breadcrumb');
    ?>

    <?php
    // Get the current page content
    global $post;
    $page_content = '';
    if ($post) {
        $page_content = apply_filters('the_content', $post->post_content);
    }

    // Product Overview data for Brand Detail
    $product_overview_data = array(
        'title' => 'Overview',
        'description' => 'Ramcro , founded in 1979, is a family-owned Italian manufacturer of high-quality special cables. 
Known globally for its Italian design and top-tier production standards, Ramcro operates across Europe, 
the Middle East, India and Latin America. The company serves major sectors including Oil & Gas, Fire, 
Signal & Control, BMS, and Optical Cables.
From its 18,000 sqm facility with an annual production capacity of 50,000 km, Ramcro offers 
exceptional flexibility, fast delivery, and cost-effective supply chain solutions. Its ISO/IEC 17025:2017 
accredited laboratory ensures top-quality testing and certification.
With more than 35 years of expertise, Ramcro provides an extensive range of innovative, reliable, and 
customizable cable products—positioning itself as a leading and affordable global solution for diverse 
market needs.',
    );
    set_query_var('product_overview_data', $product_overview_data);

    get_template_part('template-parts/product-overview');
    ?>

    <?php
    // Associated Products data for Brand Detail
    $associated_products_data = array(
        'title' => 'Associated product',
        'button_text' => 'Download Catalogue',
        'button_url' => home_url('/products'),
        'button_icon' => get_template_directory_uri() . '/assets/images/but-icn.svg',
        'products' => array(
            array(
                'image' => get_template_directory_uri() . '/assets/images/pro-01.png',
                'alt' => 'RAMCRO',
                'title' => 'FIRE RESISTANT CABLE',
                'description' => 'DECODUCT PVC Conduits and Accessories are a complete cable management solution designed to protect and organize electrical wiring for residential, commercial, and industrial installations. Certified to meet rigorous British and international quality and safety standards, DECODUCT products are available in multiple gauges, sizes, and accessory types to suit diverse wiring requirements.',
                'features' => array(
                    '<strong>Material:</strong> High-impact uPVC (Unplasticized Polyvinyl Chloride) suitable to withstand harsh environments.',
                    '<strong>Conduit Types & Sizes:</strong> Rigid PVC conduits: Available in light, medium, heavy, and super heavy gauge. Diameter sizes commonly include: 20 mm, 25 mm, 32 mm, 38 mm, 50 mm.',
                    '<strong>Features:</strong> Smooth internal surface for easy cable installation. Resistant to chemical, moisture and corrosive environments.',
                    '<strong>Accessories:</strong> Couplers, junction boxes, bends, adaptors, clips, saddle clamps – available in matching sizes'
                ),
            ),
            array(
                'image' => get_template_directory_uri() . '/assets/images/pro-02.png',
                'alt' => 'RAMCRO',
                'title' => 'Cables',
                'description' => 'Decoduct PVC Flexible Conduit offers a versatile and durable solution for protecting and routing electrical cables in a wide variety of installations. Made from high-quality PVC, this flexible conduit easily bends and adapts to changing routes around corners and obstacles, simplifying installation.',
                'features' => array(
                    'High flexibility for easy routing around corners',
                    'Durable PVC construction resistant to dust, moisture, and abrasion',
                    'Suitable for indoor and outdoor applications',
                    'Easy to cut, shape, and install',
                    'Ideal for electrical, mechanical, and industrial wiring setups'
                ),
            ),
        ),
    );
    set_query_var('associated_products_data', $associated_products_data);

    get_template_part('template-parts/associated-product-details');
    ?>
    <?php
    get_template_part('template-parts/enquire-now');
    ?>





</main><!-- #main -->

<?php
get_footer();
