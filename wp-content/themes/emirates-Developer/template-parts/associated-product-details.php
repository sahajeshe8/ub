<?php
/**
 * Associated Product Component Template
 *
 * @package tasheel
 */

// Get associated products data from query var (set by page templates)
$associated_products_data = get_query_var( 'associated_products_data', array() );

// Get data from array or use defaults
$section_title = isset( $associated_products_data['title'] ) ? $associated_products_data['title'] : 'Associated product';
$button_text = isset( $associated_products_data['button_text'] ) ? $associated_products_data['button_text'] : 'Download Catalogue';
$button_url = isset( $associated_products_data['button_url'] ) ? $associated_products_data['button_url'] : home_url( '/products' );
$button_icon = isset( $associated_products_data['button_icon'] ) ? $associated_products_data['button_icon'] : get_template_directory_uri() . '/assets/images/but-icn.svg';
$products = isset( $associated_products_data['products'] ) && is_array( $associated_products_data['products'] ) ? $associated_products_data['products'] : array();

// If no products provided, don't display the section
if ( empty( $products ) ) {
	return;
}

?>

<section class="pt_80 pb_80 associated_product_section  bg_black bg_shadow">
    <div class="wrap z-index_99">
        <div class="global_brands_content_title pb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100"
            data-aos-once="true">
            <h3 class="h3_title_55">
                <?php echo esc_html( $section_title ); ?>
            </h3>
            <?php if ( ! empty( $button_text ) ) : ?>
            <a href="<?php echo esc_url( $button_url ); ?>" class="btn_style me-1 buttion_blue"> 
                <span class="buttion_blue_icn">
                    <img src="<?php echo esc_url( $button_icon ); ?>" alt="<?php echo esc_attr( $button_text ); ?>">
                </span> 
                <?php echo esc_html( $button_text ); ?>
            </a>
            <?php endif; ?>
        </div>

        <ul class="associated_product_list">
            <?php 
            $delay = 200;
            foreach ( $products as $index => $product ) : 
                $product_image = isset( $product['image'] ) ? $product['image'] : '';
                $product_title = isset( $product['title'] ) ? $product['title'] : '';
                $product_description = isset( $product['description'] ) ? $product['description'] : '';
                $product_features = isset( $product['features'] ) && is_array( $product['features'] ) ? $product['features'] : array();
                $product_alt = isset( $product['alt'] ) ? $product['alt'] : $product_title;
            ?>
            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo esc_attr( $delay ); ?>" data-aos-once="true">
                <div class="associated_product_item">
                    <?php if ( ! empty( $product_image ) ) : ?>
                    <div class="pro_img_block">
                        <img src="<?php echo esc_url( $product_image ); ?>" alt="<?php echo esc_attr( $product_alt ); ?>">
                    </div>
                    <?php endif; ?>
                    <div class="pro_detail_block">
                        <?php if ( ! empty( $product_title ) ) : ?>
                        <h3><?php echo esc_html( $product_title ); ?></h3>
                        <?php endif; ?>
                        <?php if ( ! empty( $product_description ) ) : ?>
                        <p><?php echo wp_kses_post( $product_description ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
            <?php 
                $delay += 100;
            endforeach; 
            ?>
        </ul>

    </div>

</section>