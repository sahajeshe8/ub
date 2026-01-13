<?php
/**
 * Products Component Template - Light Products
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 innovative_products_section">
	<div class="wrap">


 
	<div class="product_overview_content mb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<div class="product_overview_title">
				<h2 class="h3_title">Lighting</h2>

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
				array('img' => 'Lightings_0018_01.jpg', 'title' => 'LED Lamp E27 & B22'),
                array('img' => 'Lightings_0017_02.jpg', 'title' => 'LED Tubular Lamp & Candle Lamp'),
                array('img' => 'Lightings_0016_03.jpg', 'title' => 'LED High Power Lamp'),
                array('img' => 'Lightings_0015_04.jpg', 'title' => 'LED Lamp MR16-GU5.3 & GU10'),
                array('img' => 'Lightings_0014_05.jpg', 'title' => 'LED Lamp E27 & B22'),
                array('img' => 'Lightings_0013_06.jpg', 'title' => 'LED Downlight - Cob'),
                array('img' => 'Lightings_0012_07.jpg', 'title' => 'Down Light & Ceiling Light'),
                array('img' => 'Lightings_0011_08.jpg', 'title' => 'LED Panel Light 60X60'),
                array('img' => 'Lightings_0010_09.jpg', 'title' => 'LED Weatherproof'),
                array('img' => 'Lightings_0009_10.jpg', 'title' => 'LED Flood Light'),
                array('img' => 'Lightings_0008_11.jpg', 'title' => 'Pro Accente'),
                array('img' => 'Lightings_0007_12.jpg', 'title' => 'Coloron'),
                array('img' => 'Lightings_0006_13.jpg', 'title' => 'LED Panel Light – Edgelite'),
                array('img' => 'Lightings_0005_14.jpg', 'title' => 'LED Panel Light – Slim Panel'),
                array('img' => 'Lightings_0004_15.jpg', 'title' => 'LED Strip Light'),
                array('img' => 'Lightings_0003_16.jpg', 'title' => 'LED Flood Light & Projector'),
                array('img' => 'Lightings_0002_17.jpg', 'title' => 'LED Weatherproof – Parkade'),
                array('img' => 'Lightings_0001_18.jpg', 'title' => 'LED Highbay – Apolo'),
                array('img' => 'Lightings_0000_19.jpg', 'title' => 'LED Bulkhead – Lmbh'),
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

