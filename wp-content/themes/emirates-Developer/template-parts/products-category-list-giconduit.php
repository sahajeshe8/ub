<?php
/**
 * Products Component Template - giconduit Products
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 innovative_products_section">
	<div class="wrap">


 
	<div class="product_overview_content mb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<div class="product_overview_title">
				<h2 class="h3_title">G I CONDUIT & ACCESSORIES</h2>

				<div>
				
				</div>
			</div>
						<div class="product_overview_description">
						<div class="filter_by">
						<span class="filter_by_label">Filters by:</span>  
						
						<select name="" id="" class="filter_select">
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
						<option value="">4</option>
						<option value="">5</option>
					</select>
					</div>
						</div>
						
			
		</div>



		<ul class="products_list style-02 style-03">
			<?php
			$product_items = array(

                array('img' => 'G I CONDUIT_0007_Layer 1.jpg', 'title' => 'G.I. CONDUIT'),
                array('img' => 'G I CONDUIT_0006_Layer 2.jpg', 'title' => 'PIPER GI RIGID CONDUITS'),
                array('img' => 'G I CONDUIT_0005_Layer 3.jpg', 'title' => 'Conduit Fittings'),
                array('img' => 'G I CONDUIT_0004_Layer 4.jpg', 'title' => 'G.I. Flexible Conduit'),
                array('img' => 'G I CONDUIT_0003_Layer 5.jpg', 'title' => 'GI FLEXIBLE CONDUITS & ACCESSORIES'),
                array('img' => 'G I CONDUIT_0002_Layer 6.jpg', 'title' => 'G.I. Junctions Box'),
                array('img' => 'G I CONDUIT_0001_Layer 7.jpg', 'title' => 'Switch Box'),
                array('img' => 'G I CONDUIT_0000_Layer 8.jpg', 'title' => 'Junction Box'),
			);
			$delay = 200;
			foreach ($product_items as $index => $item) :
				$current_delay = $delay + ($index * 50);
			?>
			<li data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo $current_delay; ?>" data-aos-once="true">
				<div class="product_item">
					<div class="product_item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>">
					</div>
					<div class="global_logo_box_bottom">
						<div>
							<h4><?php echo esc_html( $item['title'] ); ?></h4>
							<h3>Lorem ipsum dolor sit amet, consectetur adipiscing.</h3>
						</div>
						<a href="<?php echo esc_url( home_url( '/product-detail' ) ); ?>" class="global_buttion">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
						</a>
					</div>
				</div>
			</li>
			<?php endforeach; ?>

		 
 


	 





 

		</ul>

		<div class="load_more_btn_row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1250" data-aos-once="true">
		<a href="" class="btn_style me-1 buttion_blue">Load more</a>
		</div>
	</div>
</section>

