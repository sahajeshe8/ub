<?php
/**
 * Products Component Template - accessories Products
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 innovative_products_section">
	<div class="wrap">


 
	<div class="product_overview_content mb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<div class="product_overview_title">
				<h2 class="h3_title">Accessories</h2>

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
				array('img' => 'Wiring Accessories_0016_Layer 1.jpg', 'title' => 'Electrical Switches & Socket'),
				array('img' => 'Wiring Accessories_0015_Layer 2.jpg', 'title' => 'White PVC Switches & Sockets – KBV'),
				array('img' => 'Wiring Accessories_0014_Layer 4.jpg', 'title' => 'Metal Clad Switches & Sockets – KBMC'),
                array('img' => 'Wiring Accessories_0013_Layer 5.jpg', 'title' => 'Weatherproof Switches & Sockets – KBCL'),
				array('img' => 'Wiring Accessories_0012_Layer 6.jpg', 'title' => 'Isolator'),
                array('img' => 'Wiring Accessories_0011_Layer 7.jpg', 'title' => 'Industrial Plug & Sockets'),
                array('img' => 'Wiring Accessories_0010_Layer 8.jpg', 'title' => 'Terminal Blocks'),
                array('img' => 'Wiring Accessories_0009_Layer 9.jpg', 'title' => 'Universal Extension Socket'),
                array('img' => 'Wiring Accessories_0008_Layer 10.jpg', 'title' => 'Universal Extension Cord'),
                array('img' => 'Wiring Accessories_0007_Layer 11.jpg', 'title' => 'Cable Reel – Open Drum'),
                array('img' => 'Wiring Accessories_0006_Layer 12.jpg', 'title' => 'Cassette Reel'),
                array('img' => 'Wiring Accessories_0005_Layer 13.jpg', 'title' => 'Handbag Reel'),
                array('img' => 'Wiring Accessories_0004_Layer 14.jpg', 'title' => 'Electrical Insulation Tape'),
                array('img' => 'Wiring Accessories_0003_Layer 15.jpg', 'title' => 'Plug Top'),
                array('img' => 'Wiring Accessories_0002_Layer 16.jpg', 'title' => 'Plug Tops'),
                array('img' => 'Wiring Accessories_0001_Layer 17.jpg', 'title' => 'Multi Adaptor'),
                array('img' => 'Wiring Accessories_0000_Layer 18.jpg', 'title' => 'Universal Multi Pin Adaptor'),
                array('img' => 'fan_0006_Layer 18_0019_Layer 19.jpg', 'title' => 'WIRING DUCTS'),
                array('img' => 'fan_0006_Layer 18_0018_Layer 22.jpg', 'title' => 'PVC Trunking'),
                array('img' => 'fan_0006_Layer 18_0017_Layer 21.jpg', 'title' => 'PVC Conduits and Accessories (DECODUCT)'),
                array('img' => 'fan_0006_Layer 18_0016_Layer 23.jpg', 'title' => 'PVC Flexible Conduit'),
                array('img' => 'fan_0006_Layer 18_0015_Layer 24.jpg', 'title' => 'PVC Conduit Pipes (HOTACE)'),
                array('img' => 'fan_0006_Layer 18_0014_Layer 25.jpg', 'title' => 'PVC Conduit Accessories'),
                array('img' => 'fan_0006_Layer 18_0013_Layer 26.jpg', 'title' => 'Solid Copper Earth Rods'),
                array('img' => 'fan_0006_Layer 18_0012_Layer 27.jpg', 'title' => 'Bonded Copper Earth Rod'),
                array('img' => 'fan_0006_Layer 18_0011_Layer 28.jpg', 'title' => 'Earth Rod Coupler & Clamp'),
                array('img' => 'fan_0006_Layer 18_0010_Layer 29.jpg', 'title' => 'EARTHING AND LIGHTNING'),
                array('img' => 'fan_0006_Layer 18_0009_Layer 30.jpg', 'title' => 'STREET LIGHT CUT OUTS'),
                array('img' => 'fan_0006_Layer 18_0008_Layer 31.jpg', 'title' => 'Metal Enclosure'),
                array('img' => 'fan_0006_Layer 18_0007_Layer 32.jpg', 'title' => 'Plastic Junction Box'),
                array('img' => 'fan_0006_Layer 18_0006_Layer 33.jpg', 'title' => 'Aluminium Junction Box'),
                array('img' => 'fan_0006_Layer 18_0005_Layer 34.jpg', 'title' => 'Single Door Enclosure'),
                array('img' => 'fan_0006_Layer 18_0004_Layer 35.jpg', 'title' => 'Stainless Steel Enclosure'),
                array('img' => 'fan_0006_Layer 18_0003_Layer 36.jpg', 'title' => 'MODULAR ENCLOSURES'),
                array('img' => 'fan_0006_Layer 18_0002_Layer 37.jpg', 'title' => 'Double Door Enclosure'),
                array('img' => 'fan_0006_Layer 18_0001_Layer 38.jpg', 'title' => 'Metering Enclosure'),
                array('img' => 'fan_0006_Layer 18_0000_Layer 39.jpg', 'title' => 'Transparent Door Enclosure'),

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

