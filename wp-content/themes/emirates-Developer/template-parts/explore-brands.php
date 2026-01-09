<?php
/**
 * Banner Component Template
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80  ">
	<div class="banner_txt_block_01">
		<div class="wrap">
			<div class="global_brands_content_title pb_30" data-aos="fade-up" data-aos-duration="800"
				data-aos-delay="100" data-aos-once="true">


				<h3 class="h3_title_55 text_black">
					Explore Brands
				</h3>

				<div class="brand_filter_list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"
					data-aos-once="true">
					<ul class="brand_filter_list_inner">
						<li class="brand_filter_label">Filter by:</li>
						<li>
							<select name="brand_category" class="filter_select">
								<option value="">Brands Name</option>
								<option value="cables">Cables</option>
								<option value="lighting">Lighting</option>
								<option value="fans">Fans</option>
								<option value="accessories">Accessories</option>
							</select>
						</li>
						<li>
							<select name="brand_region" class="filter_select">
								<option value="">Product Categories</option>
								<option value="uae">UAE</option>
								<option value="gcc">GCC</option>
								<option value="mena">MENA</option>
							</select>
						</li>
						<li>
							<input type="text" class="filter_input" placeholder="Year">
						</li>
					</ul>
				</div>
			</div>

			<?php
			// Static brands data as per provided layout
			$brands = array(
				array(
					'name' => 'DECODUCT',
					'desc' => 'Interplast is the leading manufacturer of electrical systems in the Middle East with an extensive...',
					'image' => get_template_directory_uri() . '/assets/images/brands-01.jpg',
					'url' => home_url('/brand-decoduct'),
				),
				array(
					'name' => 'RAMCRO',
					'desc' => 'Ramcro , founded in 1979, is a family-owned Italian manufacturer of high-quality special cables...',
					'image' => get_template_directory_uri() . '/assets/images/brands-02.jpg',
					'url' => home_url('/brand-ramco'),
				),
				array(
					'name' => '',
					'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
					'image' => get_template_directory_uri() . '/assets/images/brands-3.jpg',
					'url' => home_url('/brand-detail'),
				),
				array(
					'name' => '',
					'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
					'image' => get_template_directory_uri() . '/assets/images/brands-04.jpg',
					'url' => home_url('/brand-detail'),
				),
				array(
					'name' => 'SCAME',
					'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
					'image' => get_template_directory_uri() . '/assets/images/brands-05.jpg',
					'url' => home_url('/brand-detail'),
				),
				array(
					'name' => 'USHA',
					'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
					'image' => get_template_directory_uri() . '/assets/images/brands-06.jpg',
					'url' => home_url('/brand-detail'),
				),
				array(
					'name' => '',
					'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
					'image' => get_template_directory_uri() . '/assets/images/brands-07.jpg',
					'url' => home_url('/brand-detail'),
				),
				array(
					'name' => '',
					'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
					'image' => get_template_directory_uri() . '/assets/images/brands-08.jpg',
					'url' => home_url('/brand-detail'),
				),
				array(
					'name' => 'MAY',
					'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
					'image' => get_template_directory_uri() . '/assets/images/brands-09.jpg',
				),
			);
			?>

			<ul class="explore_brands_grid">
				<?php
				$delay = 300;
				foreach ($brands as $index => $brand):
					$current_delay = $delay + ($index * 50);
					?>
					<li data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo $current_delay; ?>"
						data-aos-once="true">
						<div class="brand_slider_item">
							<div class="brand_slider_item_content_box">
								<div class="global_logo_box_wrp">
									<div class="global_logo_box">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/global_logo_02.png"
											alt="<?php echo esc_attr($brand['name']); ?>">
									</div>
									<h3 class="top_title_main"><?php echo esc_html($brand['name']); ?></h3>
								</div>
							</div>

							<div class="global_logo_box_bottom">
								<h3><?php echo esc_html($brand['desc']); ?></h3>
								<a href="<?php echo esc_url($brand['url']); ?>" class="global_buttion">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg"
										alt="<?php echo esc_attr($brand['name']); ?>">
								</a>
							</div>

							<div class="brand_slider_item_img">
								<img src="<?php echo esc_url($brand['image']); ?>"
									alt="<?php echo esc_attr($brand['name']); ?>">
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>

			<div class="load_more_btn_row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800"
				data-aos-once="true">
				<a href="#" class="btn_style me-1 buttion_blue">Load more</a>
			</div>
		</div>
</section>