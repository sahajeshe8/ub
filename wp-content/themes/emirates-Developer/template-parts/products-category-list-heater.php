<?php
/**
 * Products Component Template - Heater Products
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 innovative_products_section">
	<div class="wrap">


 
	<div class="product_overview_content mb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<div class="product_overview_title">
				<h2 class="h3_title">WATER HEATERS & WATER PUMP</h2>

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
				array('img' => 'WATER HEATERS_0008_01.jpg', 'title' => 'Galvanized Iron Water Heater'),
				array('img' => 'WATER HEATERS_0007_02.jpg', 'title' => 'Glass Lined Water Heater'),
				array('img' => 'WATER HEATERS_0006_03.jpg', 'title' => 'Glass Lined Water Heaters - HOTWAVE'),
				array('img' => 'WATER HEATERS_0005_04.jpg', 'title' => 'Galvanized Iron Water Heaters - SUNSTAR'),
				array('img' => 'WATER HEATERS_0004_05.jpg', 'title' => 'CENTRALIZED WATER HEATER - HOTWAVE'),
				array('img' => 'WATER HEATERS_0003_06.jpg', 'title' => '1 HP & 0.5 – Water Pump'),
				array('img' => 'WATER HEATERS_0002_07.jpg', 'title' => '0.5 HP Water Pump'),
				array('img' => 'WATER HEATERS_0001_08.jpg', 'title' => 'Automatic Pump Controller'),
				array('img' => 'WATER HEATERS_0000_09.jpg', 'title' => 'Float Switch'),
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

