<?php
/**
 * Brand Detail Component Template
 *
 * @package tasheel
 */

// Get the current page/post
while ( have_posts() ) :
	the_post();
	
	// Get brand logo (can be from ACF field, featured image, or default)
	$brand_logo = '';
	if ( function_exists( 'get_field' ) ) {
		$logo_field = get_field( 'brand_logo' );
		if ( $logo_field && is_array( $logo_field ) && ! empty( $logo_field['url'] ) ) {
			$brand_logo = esc_url( $logo_field['url'] );
		} elseif ( is_string( $logo_field ) && ! empty( $logo_field ) ) {
			$brand_logo = esc_url( $logo_field );
		}
	}
	
	// Get brand image (can be from ACF field or featured image)
	$brand_image = '';
	if ( function_exists( 'get_field' ) ) {
		$image_field = get_field( 'brand_image' );
		if ( $image_field && is_array( $image_field ) && ! empty( $image_field['url'] ) ) {
			$brand_image = esc_url( $image_field['url'] );
		} elseif ( is_string( $image_field ) && ! empty( $image_field ) ) {
			$brand_image = esc_url( $image_field );
		}
	}
	
	// Fallback to featured image if no brand image is set
	if ( empty( $brand_image ) ) {
		$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
		if ( $featured_image ) {
			$brand_image = esc_url( $featured_image );
		}
	}
	
	// Get brand description (from ACF or post content)
	$brand_description = '';
	if ( function_exists( 'get_field' ) ) {
		$description_field = get_field( 'brand_description' );
		if ( ! empty( $description_field ) ) {
			$brand_description = $description_field;
		}
	}
	
	// Fallback to post content if no description field
	if ( empty( $brand_description ) ) {
		$brand_description = get_the_content();
	}
	
	// Get additional brand information (optional ACF fields)
	$brand_website = '';
	$brand_products = '';
	if ( function_exists( 'get_field' ) ) {
		$brand_website = get_field( 'brand_website' );
		$brand_products = get_field( 'brand_products' );
	}
	
	// Get brand gallery (optional ACF field)
	$brand_gallery = array();
	if ( function_exists( 'get_field' ) ) {
		$gallery_field = get_field( 'brand_gallery' );
		if ( $gallery_field && is_array( $gallery_field ) ) {
			$brand_gallery = $gallery_field;
		}
	}
	
	?>
	
	<section class="pt_80 pb_80">
		<div class="wrap">
			<!-- Brand Header Section -->
			<div class="brand_detail_header mb_60">
				<div class="row align-items-center">
					<?php if ( ! empty( $brand_logo ) ) : ?>
					<div class="col-md-4 col-lg-3 mb_30 mb-md-0">
						<div class="brand_logo_wrapper">
							<img src="<?php echo esc_url( $brand_logo ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="brand_detail_logo">
						</div>
					</div>
					<?php endif; ?>
					
					<div class="<?php echo ! empty( $brand_logo ) ? 'col-md-8 col-lg-9' : 'col-12'; ?>">
						<h1 class="h3_title_55 text_black mb_20"><?php the_title(); ?></h1>
						<?php if ( ! empty( $brand_website ) ) : ?>
						<div class="brand_website mb_20">
							<a href="<?php echo esc_url( $brand_website ); ?>" target="_blank" rel="noopener noreferrer" class="btn_style buttion_blue">
								Visit Website
							</a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			
			<!-- Brand Content Section -->
			<div class="brand_detail_content mb_60">
				<div class="row">
					<?php if ( ! empty( $brand_image ) ) : ?>
					<div class="col-lg-6 mb_30 mb-lg-0">
						<div class="brand_detail_image">
							<img src="<?php echo esc_url( $brand_image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="img-fluid">
						</div>
					</div>
					<?php endif; ?>
					
					<div class="<?php echo ! empty( $brand_image ) ? 'col-lg-6' : 'col-12'; ?>">
						<div class="brand_detail_description">
							<?php 
							if ( ! empty( $brand_description ) ) {
								echo wp_kses_post( wpautop( $brand_description ) );
							}
							?>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Brand Products Section (if available) -->
			<?php if ( ! empty( $brand_products ) ) : ?>
			<div class="brand_detail_products mb_60">
				<div class="global_brands_content_title pb_30">
					<h3 class="h3_title_55 text_black">Products</h3>
				</div>
				<div class="brand_products_content">
					<?php echo wp_kses_post( wpautop( $brand_products ) ); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<!-- Brand Gallery Section (if available) -->
			<?php if ( ! empty( $brand_gallery ) && is_array( $brand_gallery ) ) : ?>
			<div class="brand_detail_gallery mb_60">
				<div class="global_brands_content_title pb_30">
					<h3 class="h3_title_55 text_black">Gallery</h3>
				</div>
				<div class="row">
					<?php foreach ( $brand_gallery as $image ) : 
						$image_url = '';
						$image_alt = get_the_title();
						
						if ( is_array( $image ) && ! empty( $image['url'] ) ) {
							$image_url = esc_url( $image['url'] );
							$image_alt = ! empty( $image['alt'] ) ? esc_attr( $image['alt'] ) : get_the_title();
						} elseif ( is_numeric( $image ) ) {
							$image_url = esc_url( wp_get_attachment_image_url( $image, 'large' ) );
							$image_alt = esc_attr( get_post_meta( $image, '_wp_attachment_image_alt', true ) );
							if ( empty( $image_alt ) ) {
								$image_alt = get_the_title();
							}
						} elseif ( is_string( $image ) ) {
							$image_url = esc_url( $image );
						}
						
						if ( ! empty( $image_url ) ) :
					?>
					<div class="col-md-4 col-lg-3 mb_20">
						<div class="brand_gallery_item">
							<img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="img-fluid">
						</div>
					</div>
					<?php 
						endif;
					endforeach; 
					?>
				</div>
			</div>
			<?php endif; ?>
			
			<!-- Back to Brands Link -->
			<div class="brand_detail_back_link text-center">
				<a href="<?php echo esc_url( home_url( '/brands' ) ); ?>" class="btn_style buttion_blue">
					Back to Brands
				</a>
			</div>
		</div>
	</section>
	
	<?php
endwhile;
?>






