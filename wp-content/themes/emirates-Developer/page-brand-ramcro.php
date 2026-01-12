<?php
/**
 * Template Name: Brand Ramcro
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
    set_query_var('inner_banner_title', 'RAMCRO');

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
            'title' => 'RAMCRO', // or use get_the_title() for dynamic
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
                'image' => get_template_directory_uri() . '/assets/images/fire-resistent.jpg',
                'alt' => 'RAMCRO',
                'title' => 'Fire Resistant Cable',
                'description' => 'Fire Resistant Cables for Fire Alarm Systems, Emergency Lighting & Voice Evacuation SystemRAMCRO cables are used for Fire Resistant & Circuit Integrity and essential to prevent life from smoke and noxious fumes, and where sensitive equipment may be damaged by acid forming gases. Ramcro Fire resistant cables are with sub –branded Ramfirecro, are manufactured to meet the requirements in accordance with the major international standards. ie, BS 7629/BS 6387, CWZ/IEC 60331-21/ EN50200 PH120/BS 8434-2/ etc.</br><strong>Ramcro Fire Resistant Cable Range</strong></br> Fire Planet - BS 6387 CWZ, Multi-core, Solid CU, Silicon Rubber - Insulation, Collective screen, LSZH - Sheath
Fire Sun - BS 7629, Multi-core, Solid/Stranded CU, Silicon Rubber - Insulation, Collective screen, LSZH - Sheath
Fire Star - Enhanced BS 8434-2 Multi-core Solid / Stranded CU, Mica+ XLPE + Silicon Rubber - Insulation, Collective screen, 
LSZH - Sheath',
                'features' => array(
                    '<strong>Certified by LPCB</strong>',
                    '<strong>ESMA Approved</strong>',
                    '<strong>Approved by Civil Defense of Dubai, Sharjah & Abu Dhabi</strong>',
                    '<strong>Approved by Bahrain Civil Defense</strong>',
                    '<strong>Approved by Royal Oman Police (ROP)</strong>'
                ),
            ),
            array(
                'image' => get_template_directory_uri() . '/assets/images/bms-cable.jpg',
                'alt' => 'RAMCRO',
                'title' => 'Control & Building Management System (BMS) Cables',
                'description' => 'Control and BMS cables are special extra low voltage cables for data transmission and communication. These cables are specially constructed cables for ELV systems which carries low voltage signals with accuracy and protection from any external disturbances or influences coming in the form electromagnetic vibrations from neighbouring cables or devices.</br><strong>Ramcro Control & BMS Cables Range</strong>',
                'features' => array(
                    '<strong>Multi Conductor Cable</strong>- - Multi conductor cable cable comes with minimum 2 cores and goes up to 8 core or more cables which is used for field devices and for transmitting signals. These cables are constructed uniquely for both signal and power transmission also for controllers, meters and data gathering devices.',
                    '<strong>Paired Cable</strong>- Paired cables are primarily used for communication which is skillfully constructed in twisted pairs with tinned copper which will enhance the life of copper from any seasonal damages.',
                    '<strong>Data cable</strong>-- Data cables and the cables used for data collection from slave to master and master to slave which is data transmitting cables from one device to another.',
                    '<strong>KNX Cable</strong>-KNX cables is also a paired cables with solid conductors with is used for lighting control and communication',
                    '<strong>Speaker Cable</strong>-Speaker cables and special cables which mainly comes in 2 cores and ranges normally from 16 AWG to 12 AWG for transmitting high frequency transmission without out any external disturbances.'
                ),
            ),
            array(
                'image' => get_template_directory_uri() . '/assets/images/instrumentation-cable.jpg',
                'alt' => 'RAMCRO',
                'title' => 'Instrumentation Cable',
                'description' => 'These cables are designed to connect electrical instrument circuits and provide communication services in and around process plant (e.g. petrochemical industry etc.). Inside a complete gamma suitable for few applications and critic installations.</br>BS 5308 cables are designed to carry communication and control signals in a variety of installation types including those found in the petrochemical industry. The signals can be of analogue, data or voice type and from a variety of transducers such as pressure, proximity or microphone.',
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
