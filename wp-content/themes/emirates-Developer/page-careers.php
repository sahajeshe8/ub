<?php
/**
 * Template Name: Careers
 * 
 * The template for displaying the Careers page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Careers page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/careers-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
set_query_var( 'inner_banner_title', 'Careers' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb for Careers page
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Careers',
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>











<?php
// Product Overview data for Industry Detail
$product_overview_data = array(
	'title' => 'People ',
	'description' => array(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod.',
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.',
	),
 
);
set_query_var( 'product_overview_data', $product_overview_data );

get_template_part( 'template-parts/product-overview' );
?>
 






<section class=" pb_80 careers_section" >
	<div class="wrap">
		 
	 <div class="careers_content_img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people-img.jpg" alt="People">
     </div>
	</div>
</section>






<section class="pb_80 pt_80 careers_section" style="background: #F6F6F6;">

    <div class="wrap">
    <h2 class="h3_title_55 text_black">Current Vacancies </h2>

    <ul class="careers_list">
		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Sales & Distribution Executive</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="#" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>

		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Warehouse & Logistics Coordinator</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="#" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>

		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Electrical Engineer – Projects Division</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="#" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>

		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Warehouse & Logistics Coordinator</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="#" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>

		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Procurement Officer</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="#" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>
    </ul>
    </div>
</section>

</main><!-- #main -->

<?php
get_footer();

