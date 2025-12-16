<?php
/**
 * The template for displaying the footer
 *
 * @package tasheel
 */
?>

<footer id="colophon" class="site-footer footer">

	<div class="wrap">
		 <ul class="footer_list">
			<li class="footer_list_item_01">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="Footer Logo">
			</li>
			<li class="footer_list_item_02">
				<h3>Stay updated with UB Emirates latest insights and service updates.</h3>
				 <div class="subscribe_form">
					 <div class="subscribe_input">
						 <input type="email" placeholder="Email Address">
					 </div>
					 <div class="subscribe_form_button">
					 <button type="submit">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/subscribe-icn.svg" alt="Send">
					 </button>
				 </div>	
				 </div>	
				  				
			</li>
			<li class="footer_list_item_03">
				<h3 class="footer_title_h3">Explore</h3>

				<ul class="footer_list_ul">
					<li><a href="<?php echo home_url(); ?>/about-us">Home</a></li>
					<li><a href="<?php echo home_url(); ?>/our-story">Projects</a></li>
					<li><a href="<?php echo home_url(); ?>/mission-vission">About Us </a></li>
					<li><a href="<?php echo home_url(); ?>/history-milestones">Careers</a ></li>
					<li><a href="<?php echo home_url(); ?>/leadership-team">Brands</a></li>
					<li><a href="<?php echo home_url(); ?>/leadership-team">Media Center</a></li>
					<li><a href="<?php echo home_url(); ?>/leadership-team">Products</a></li>
					<li><a href="<?php echo home_url(); ?>/leadership-team">Contact</a></li>
					<li><a href="<?php echo home_url(); ?>/leadership-team">Industries We Serve</a></li>
				</ul>
			</li>
			<li class="footer_list_item_04">
			<h3 class="footer_title_h3">Social Media</h3>
			<ul class="footer_social_list_ul">
				<li>
					<a href="<?php echo home_url(); ?>/leadership-team">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-in.svg" alt="Facebook">
					</a>
				</li>
				<li>
				<a href="<?php echo home_url(); ?>/leadership-team">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_insta.svg" alt="Facebook">
					</a>
				</li>
				<li>
				<a href="<?php echo home_url(); ?>/leadership-team">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-x.svg" alt="Facebook">
					</a>
				</li>
			</ul>
			</li>
	 
		 </ul>


		 <div class="footer_bottom">
		 <p>© 2025 UB Emirates LLC. All Rights Reserved</p> 

		 <ul class="footer_bottom_list">
			<li><a href="<?php echo home_url(); ?>/privacy-policy">Terms & Conditions </a></li>
			<li><a href="<?php echo home_url(); ?>/terms-of-service">Privacy Policy</a></li>
 
		 </ul>
	</div>
	</div>



</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
