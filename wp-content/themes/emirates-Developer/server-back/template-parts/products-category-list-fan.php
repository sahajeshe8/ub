<?php
/**
 * Products Component Template - Fan Products
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 innovative_products_section">
	<div class="wrap">


 
	<div class="product_overview_content mb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<div class="product_overview_title">
				<h2 class="h3_title">FAN</h2>

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
				array('img' => 'fan_0021_Layer 2.jpg', 'title' => 'Ceiling Fan - ATOM'),
				array('img' => 'fan_0020_Layer 3.jpg', 'title' => 'Ceiling Fan - KBC5-MS-56 '),
				array('img' => 'fan_0019_Layer 4.jpg', 'title' => 'Ceiling Fan - KBQS 56'),
				array('img' => 'fan_0018_Layer 6.jpg', 'title' => 'Wall Fans - MIST AIR '),
				array('img' => 'fan_0017_Layer 7.jpg', 'title' => 'WALLFAN-KBFW-40-828R'),
				array('img' => 'fan_0016_Layer 8.jpg', 'title' => 'TABLE FAN-KBFT-40-208'),
				array('img' => 'fan_0015_Layer 9.jpg', 'title' => 'ORBIT FAN-KBOB-40-S001'),
				array('img' => 'fan_0014_Layer 10.jpg', 'title' => 'STANDS FANS'),
				array('img' => 'fan_0013_Layer 11.jpg', 'title' => 'STAND FAN-KBFS-40-921'),
				array('img' => 'fan_0012_Layer 12.jpg', 'title' => 'WINDOW MOUNTED EXHAUST FAN - ROUND'),
				array('img' => 'fan_0011_Layer 13.jpg', 'title' => 'WINDOW MOUNTED EXHAUST FAN - SQUARE'),
				array('img' => 'fan_0010_Layer 14.jpg', 'title' => 'ELECTRIC SHUTTER FAN'),
				array('img' => 'fan_0009_Layer 15.jpg', 'title' => 'AUTO SHUTTER FAN'),
				array('img' => 'fan_0008_Layer 16.jpg', 'title' => 'METAL EXHAUST FANS - TURBO'),
				array('img' => 'fan_0007_Layer 17.jpg', 'title' => 'EXHAUST FAN - INDUSTRIAL'),
				array('img' => 'fan_0006_Layer 18.jpg', 'title' => 'PEDASTAL FAN - DOMINAIRE'),
				array('img' => 'fan_0005_Layer 19.jpg', 'title' => 'PEDESTAL FAN / STAND FAN - HEAVY DUTY - KBPF'),
				array('img' => 'fan_0004_Layer 20.jpg', 'title' => 'PEDESTAL FAN / STAND FAN - HEAVY DUTY - KBEPM'),
				array('img' => 'fan_0003_Layer 21.jpg', 'title' => 'WALL MOUNT - HEAVY DUTY'),
				array('img' => 'fan_0002_Layer 22.jpg', 'title' => 'CENTRIFUGAL/ MIST FAN'),
				array('img' => 'fan_0001_Layer 23.jpg', 'title' => 'PORTABLE BLOWER - INDUSTRIAL'),
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

