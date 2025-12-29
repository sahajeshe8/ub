<?php
/**
 * Products Component Template
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 innovative_products_section">
	<div class="wrap">


 
	<div class="product_overview_content mb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<div class="product_overview_title">
				<h2 class="h3_title">CABLE</h2>

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
				array('img' => 'pro_0042_cp-1.jpg', 'title' => 'Fire Resistant Cable'),
				array('img' => 'pro_0041_cp-2.jpg', 'title' => 'Paired Cable'),
				array('img' => 'pro_0040_cp-3.jpg', 'title' => 'Multi Conductor Cable'),
				array('img' => 'pro_0039_cp-4.jpg', 'title' => 'Instrumentation Cable'),
				array('img' => 'pro_0038_cp-5.jpg', 'title' => 'Low Voltage Cables'),
				array('img' => 'pro_0037_cp-6.jpg', 'title' => 'Wires'),
				array('img' => 'pro_0036_cp-7.jpg', 'title' => 'Control Cables'),
				array('img' => 'pro_0035_cp-8.jpg', 'title' => 'Low Voltage Power Cables(MESC)'),
				array('img' => 'pro_0034_Layer 1.jpg', 'title' => 'Single Core Cable/ Building Wire'),
				array('img' => 'pro_0033_cp-10.jpg', 'title' => 'Flexible Cable'),
				array('img' => 'pro_0032_cp-11.jpg', 'title' => 'Single Core Cable'),
				array('img' => 'pro_0031_cp-12.jpg', 'title' => 'Low Voltage Power Cables'),
				array('img' => 'pro_0030_cp-13.jpg', 'title' => 'Stranded Wires'),
				array('img' => 'pro_0029_cp-14.jpg', 'title' => 'Multi Core'),
				array('img' => 'pro_0028_cp-15.jpg', 'title' => 'Panel Cables'),
				array('img' => 'pro_0027_cp-16.jpg', 'title' => 'Rubber Cables'),
				array('img' => 'pro_0026_cp-17.jpg', 'title' => 'PVC FLEXIBLE CABLE HO5VV-F'),
                array('img' => 'pro_0025_cp-18.jpg', 'title' => 'CAT-6 Cable'),
                array('img' => 'pro_0024_cp-19.jpg', 'title' => 'Cable Lugs'),
				array('img' => 'pro_0023_cp-20.jpg', 'title' => 'Cable Lugs - BI Metal'),
                array('img' => 'pro_0022_cp-21.jpg', 'title' => 'CW BRASS CABLE GLANDS'),
                array('img' => 'pro_0021_cp-22.jpg', 'title' => 'Cable Glands-BW Brass'),
                array('img' => 'pro_0020_cp-23.jpg', 'title' => 'Cable Glands-A1 A2'),
                array('img' => 'pro_0019_cp-24.jpg', 'title' => 'E1W Gland FOR SWA CABLE'),
                array('img' => 'pro_0018_cp-25.jpg', 'title' => 'CABLE GLANDS'),
                array('img' => 'pro_0017_cp-26.jpg', 'title' => 'CABLELUGS & CONNECTION'),
                array('img' => 'pro_0016_cp-27.jpg', 'title' => 'CABLE CLIPS - ROUND'),
				array('img' => 'pro_0015_cp-28.jpg', 'title' => 'CABLE TIE'),
				array('img' => 'pro_0014_cp-29.jpg', 'title' => 'SELF ADHESIVE MOUNTS'),
				array('img' => 'pro_0013_cp-30.jpg', 'title' => 'GROMMET-OPEN & CLOSE'),
				array('img' => 'pro_0012_cp-31.jpg', 'title' => 'EDGING GROMMET'),
				array('img' => 'pro_0011_cp-32.jpg', 'title' => 'HEAT SHRINK'),
				array('img' => 'pro_0010_cp-33.jpg', 'title' => 'SPIRAL BINDING'),
				array('img' => 'pro_0009_cp-34.jpg', 'title' => 'CORD END TERMINALS'),
				array('img' => 'pro_0008_cp-35.jpg', 'title' => 'SPADE(FORK) TERMINALS'),
				array('img' => 'pro_0007_cp-36.jpg', 'title' => 'RING TERMINALS'),
				array('img' => 'pro_0006_cp-37.jpg', 'title' => 'PG GLANDS'),
				array('img' => 'pro_0005_cp-38.jpg', 'title' => 'SUPREME METRIC GLAND- IP68'),
				array('img' => 'pro_0004_cp-39.jpg', 'title' => 'SUPREME PG GLAND - IP68'),
				array('img' => 'pro_0003_cp-40.jpg', 'title' => 'SPLIT FLEXIBLE COUNDUITS'),
				array('img' => 'pro_0002_cp-41.jpg', 'title' => 'GM CABLE MARKER'),
				array('img' => 'pro_0001_cp-42.jpg', 'title' => 'MARKER STRIPS'),
				array('img' => 'pro_0000_cp-43.jpg', 'title' => 'BM CABLR MARKER'),
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

		<div class="load_more_btn_row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="650" data-aos-once="true">
		<a href="" class="btn_style me-1 buttion_blue">Load more</a>
		</div>
	</div>
</section>
