<?php
/**
 * Contact Form Component Template
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 contact_form_section bg-gray">
	<div class="wrap">
		<div class="global_brands_content_title pb_30">
			<h3 class="h3_title_55 text_black">
				Send us a Message
			</h3>
			<div class="contact_form_description">
				<p>Fill out the form below and we'll get back to you as soon as possible.</p>
			</div>
		</div>

		<form class="contact_form" method="post" action="">
			<ul class="contact_form_fields_list">
				<li class="contact_form_left_column">
					<ul class="contact_form_inputs_list">
						<li>
							<div class="contact_form_field">
								<input type="text" name="full_name" placeholder="Full Name" required>
							</div>
						</li>
						<li>
							<div class="contact_form_field">
								<input type="email" name="email" placeholder="Email Address" required>
							</div>
						</li>
						<li>
							<div class="contact_form_field">
								<input type="tel" name="phone" placeholder="Phone Number" required>
							</div>
						</li>
						<li>
							<div class="contact_form_field">
								<input type="text" name="subject" placeholder="Subject" required>
							</div>
						</li>
					</ul>
				</li>
				<li class="contact_form_right_column">
					<div class="contact_form_field contact_form_textarea">
						<textarea name="message" placeholder="Your Message" rows="8" required></textarea>
					</div>
				</li>
			</ul>
			<div class="contact_form_submit">
				<button type="submit" class="btn_style buttion_blue">Send Message</button>
			</div>
		</form>
	</div>
</section>

