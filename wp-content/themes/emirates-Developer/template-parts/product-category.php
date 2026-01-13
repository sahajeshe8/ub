<?php
/**
 * Product Category Component Template
 *
 * @package tasheel
 */

// Get product category data from query var (set by page templates)
$product_category_data = get_query_var( 'product_category_data', array() );

// Get data from array or use defaults
$category_title = isset( $product_category_data['category_title'] ) ? $product_category_data['category_title'] : 'Product Categories';
$categories = isset( $product_category_data['categories'] ) ? $product_category_data['categories'] : array();
$products = isset( $product_category_data['products'] ) ? $product_category_data['products'] : array();

?>

<section class="product_category_section">
	<div class="wrap">
		<div class="product_category_wrapper pt_80 pb_80">
			<!-- Left Sidebar: Product Categories -->
			<?php if ( ! empty( $categories ) || ! empty( $category_title ) ) : ?>
			<aside class="product_category_sidebar"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
				<div class="product_category_title">
					<h3><?php echo esc_html( $category_title ); ?></h3>
				</div>
				<?php if ( ! empty( $categories ) && is_array( $categories ) ) : ?>
				<ul class="product_category_list">
					<?php foreach ( $categories as $index => $category ) : 
						$category_name = isset( $category['name'] ) ? $category['name'] : '';
						$category_id = isset( $category['id'] ) ? $category['id'] : $index;
						$is_active = isset( $category['is_active'] ) ? $category['is_active'] : false;
						
						if ( ! empty( $category_name ) ) :
					?>
					<li class="product_category_item <?php echo $is_active ? 'active' : ''; ?>" data-category-index="<?php echo esc_attr( $index ); ?>" data-category-id="<?php echo esc_attr( $category_id ); ?>">
						<button type="button" class="category_link">
							<span class="category_name"><?php echo esc_html( $category_name ); ?></span>
							<span class="category_icon">
								<svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.5 3.18201C0.223858 3.18201 2.41411e-08 3.40586 0 3.68201C-2.41411e-08 3.95815 0.223858 4.18201 0.5 4.18201L0.5 3.68201L0.5 3.18201ZM6.85355 4.03556C7.04882 3.8403 7.04882 3.52372 6.85355 3.32845L3.67157 0.146473C3.47631 -0.048789 3.15973 -0.048789 2.96447 0.146473C2.7692 0.341735 2.7692 0.658318 2.96447 0.85358L5.79289 3.68201L2.96447 6.51043C2.7692 6.7057 2.7692 7.02228 2.96447 7.21754C3.15973 7.4128 3.47631 7.4128 3.67157 7.21754L6.85355 4.03556ZM0.5 3.68201L0.5 4.18201L6.5 4.18201L6.5 3.68201L6.5 3.18201L0.5 3.18201L0.5 3.68201Z" fill="currentColor"/>
								</svg>
							</span>
						</button>
					</li>
					<?php 
						endif;
					endforeach; 
					?>
				</ul>
				<?php endif; ?>
			</aside>
			<?php endif; ?>

			<!-- Right Content: Product Details -->
			<?php if ( ! empty( $products ) && is_array( $products ) ) : ?>
			<div class="product_category_content" data-aos="fade-up" data-aos-duration="800">
				<?php 
				// Organize products by category if they have category_id
				$products_by_category = array();
				foreach ( $products as $product ) {
					$product_category_id = isset( $product['category_id'] ) ? $product['category_id'] : ( isset( $product['category_index'] ) ? $product['category_index'] : 0 );
					if ( ! isset( $products_by_category[ $product_category_id ] ) ) {
						$products_by_category[ $product_category_id ] = array();
					}
					$products_by_category[ $product_category_id ][] = $product;
				}
				
				// Get the first active category index (default to 0)
				$first_category_index = 0;
				foreach ( $categories as $cat_index => $category ) {
					if ( isset( $category['is_active'] ) && $category['is_active'] ) {
						$first_category_index = $cat_index;
						break;
					}
				}
				
				// Output all products with data attributes for filtering
				$product_index = 0;
				foreach ( $products as $product ) : 
					$product_image = isset( $product['image'] ) ? $product['image'] : '';
					$product_title = isset( $product['title'] ) ? $product['title'] : '';
					$product_description = isset( $product['description'] ) ? $product['description'] : array();
					$product_category_id = isset( $product['category_id'] ) ? $product['category_id'] : ( isset( $product['category_index'] ) ? $product['category_index'] : 0 );
					// Show product only if it belongs to the first/active category
					$should_show = ( $product_category_id == $first_category_index );
					$product_index++;
					
					if ( ! empty( $product_title ) || ! empty( $product_image ) ) :
				?>
				<div class="product_detail_block" data-category-id="<?php echo esc_attr( $product_category_id ); ?>" data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo esc_attr( 100 + ( $product_index * 100 ) ); ?>" data-aos-once="false" style="<?php echo $should_show ? '' : 'display: none;'; ?>">
					<?php if ( ! empty( $product_image ) ) : ?>
					<div class="product_detail_image">
						<img src="<?php echo esc_url( $product_image ); ?>" alt="<?php echo esc_attr( $product_title ); ?>">
					</div>
					<?php endif; ?>
					
					<?php if ( ! empty( $product_title ) || ! empty( $product_description ) ) : ?>
					<div class="product_detail_info">
						<?php if ( ! empty( $product_title ) ) : ?>
						<div class="product_detail_title">
							<h3><?php echo esc_html( $product_title ); ?></h3>
						</div>
						<?php endif; ?>
						
						<?php if ( ! empty( $product_description ) && is_array( $product_description ) ) : ?>
						<div class="product_detail_description">
							<p class="description_label"><strong>Product Description:</strong></p>
							<ul class="description_list">
								<?php foreach ( $product_description as $description_point ) : 
									if ( ! empty( $description_point ) ) :
								?>
								<li><?php echo esc_html( $description_point ); ?></li>
								<?php 
									endif;
								endforeach; 
								?>
							</ul>
						</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
				</div>
				<?php 
					endif;
				endforeach; 
				?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<script>
(function() {
	document.addEventListener('DOMContentLoaded', function() {
		const categoryItems = document.querySelectorAll('.product_category_item');
		const productBlocks = document.querySelectorAll('.product_detail_block');
		const categoryList = document.querySelector('.product_category_list');
		
		// Function to scroll active tab into view on mobile
		function scrollActiveTabIntoView(activeItem) {
			if (window.innerWidth <= 768 && categoryList && activeItem) {
				const listRect = categoryList.getBoundingClientRect();
				const itemRect = activeItem.getBoundingClientRect();
				
				// Check if item is outside viewport
				if (itemRect.left < listRect.left || itemRect.right > listRect.right) {
					activeItem.scrollIntoView({
						behavior: 'smooth',
						block: 'nearest',
						inline: 'center'
					});
				}
			}
		}
		
		categoryItems.forEach(function(item) {
			item.addEventListener('click', function() {
				const categoryId = this.getAttribute('data-category-id');
				
				// Remove active class from all items
				categoryItems.forEach(function(li) {
					li.classList.remove('active');
				});
				
				// Add active class to clicked item
				this.classList.add('active');
				
				// Scroll active tab into view on mobile
				scrollActiveTabIntoView(this);
				
				// Hide all product blocks
				productBlocks.forEach(function(block) {
					block.style.display = 'none';
					// Remove AOS animation classes to reset animation
					block.classList.remove('aos-animate');
				});
				
				// Show products for selected category
				let visibleIndex = 0;
				productBlocks.forEach(function(block) {
					if (block.getAttribute('data-category-id') === categoryId) {
						block.style.display = '';
						visibleIndex++;
					}
				});
				
				// Refresh AOS to trigger animations on newly visible elements
				if (typeof AOS !== 'undefined') {
					setTimeout(function() {
						AOS.refresh();
					}, 100);
				}
			});
		});
		
		// Scroll initial active tab into view on page load (mobile only)
		if (window.innerWidth <= 768) {
			const activeItem = document.querySelector('.product_category_item.active');
			if (activeItem) {
				setTimeout(function() {
					scrollActiveTabIntoView(activeItem);
				}, 300);
			}
		}
	});
})();
</script>
