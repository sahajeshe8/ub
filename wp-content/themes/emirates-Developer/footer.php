<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tasheel
 */

// Get Footer settings from theme mods or defaults
$footer_logo_default = get_template_directory_uri() . '/assets/images/logo-white.svg';
$footer_logo_path = get_template_directory() . '/assets/images/logo-white.svg';
$footer_logo = get_theme_mod( 'footer_logo', $footer_logo_default );
// Check if logo file exists, if not use regular logo as fallback
if ( ! file_exists( $footer_logo_path ) ) {
	$footer_logo_fallback = get_template_directory_uri() . '/assets/images/logo.png';
	$footer_logo_fallback_path = get_template_directory() . '/assets/images/logo.png';
	if ( file_exists( $footer_logo_fallback_path ) ) {
		$footer_logo = $footer_logo_fallback;
	} else {
		$footer_logo = '';
	}
}

$footer_copyright = get_theme_mod( 'footer_copyright', '©2025, tasheel, All Rights Reserved' );
$footer_terms_link = get_theme_mod( 'footer_terms_link', '#' );
$footer_privacy_link = get_theme_mod( 'footer_privacy_link', '#' );
$newsletter_heading = get_theme_mod( 'footer_newsletter_heading', 'Newsletter Signup' );
$newsletter_description = get_theme_mod( 'footer_newsletter_description', 'Stay updated with the latest news, insights, and exclusive updates.' );

// Social links data - only include if icon files exist
$social_links = array();
$social_icons = array(
	array(
		'id' => 1,
		'name' => 'Facebook',
		'icon' => 'facebook-icon.svg',
		'url' => get_theme_mod( 'footer_facebook_url', '#' ),
	),
	array(
		'id' => 2,
		'name' => 'Instagram',
		'icon' => 'instagram-icon.svg',
		'url' => get_theme_mod( 'footer_instagram_url', '#' ),
	),
	array(
		'id' => 3,
		'name' => 'X (Twitter)',
		'icon' => 'twitter-icon.svg',
		'url' => get_theme_mod( 'footer_twitter_url', '#' ),
	),
	array(
		'id' => 4,
		'name' => 'LinkedIn',
		'icon' => 'linkedin-icon.svg',
		'url' => get_theme_mod( 'footer_linkedin_url', '#' ),
	),
);

// Only add social links if icon files exist
foreach ( $social_icons as $social ) {
	$icon_path = get_template_directory() . '/assets/images/' . $social['icon'];
	if ( file_exists( $icon_path ) ) {
		$social_links[] = array(
			'id' => $social['id'],
			'name' => $social['name'],
			'icon' => get_template_directory_uri() . '/assets/images/' . $social['icon'],
			'url' => $social['url'],
		);
	}
}

// Quick links - use WordPress menu if available, otherwise use defaults
$quick_links = array();
$menu_items = wp_get_nav_menu_items( 'menu-1' );
if ( $menu_items ) {
	foreach ( $menu_items as $item ) {
		$quick_links[] = array(
			'id' => $item->ID,
			'name' => $item->title,
			'url' => $item->url,
		);
	}
} else {
	// Fallback quick links
	$quick_links = array(
		array( 'id' => 1, 'name' => 'About Us', 'url' => home_url( '/about' ) ),
		array( 'id' => 2, 'name' => 'Subsidiaries', 'url' => home_url( '/subsidiaries' ) ),
		array( 'id' => 3, 'name' => 'Investments', 'url' => home_url( '/investments' ) ),
		array( 'id' => 4, 'name' => 'Downloads', 'url' => home_url( '/downloads' ) ),
		array( 'id' => 5, 'name' => 'Careers', 'url' => home_url( '/careers' ) ),
		array( 'id' => 6, 'name' => 'News & Media', 'url' => home_url( '/news' ) ),
		array( 'id' => 7, 'name' => 'Contact Us', 'url' => home_url( '/contact-us' ) ),
	);
}
?>

<footer id="colophon" class="site-footer footer">
	<div class="container pt_70">
		<!-- Main Footer Content -->
		<div class="footer-main-content">
			<!-- Left Section - Logo and Social Media -->
			<div class="footer-left-section pb_55">
				<?php if ( ! empty( $footer_logo ) ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
						<img 
							src="<?php echo esc_url( $footer_logo ); ?>" 
							alt="<?php bloginfo( 'name' ); ?>"
						/>
					</a>
				<?php endif; ?>

				<div class="footer-social-icons">
					<?php foreach ( $social_links as $social ) : ?>
						<a
							href="<?php echo esc_url( $social['url'] ); ?>"
							target="_blank"
							rel="noopener noreferrer"
							class="footer-social-link"
							aria-label="<?php echo esc_attr( $social['name'] ); ?>"
						>
							<img 
								src="<?php echo esc_url( $social['icon'] ); ?>" 
								alt="<?php echo esc_attr( $social['name'] ); ?>"
							/>
						</a>
					<?php endforeach; ?>
				</div>
			</div>

			<!-- Middle Section - Quick Links -->
			<div class="footer-middle-section pb_55">
				<h3 class="footer-section-heading"><?php esc_html_e( 'Quick Link', 'tasheel' ); ?></h3>
				<div class="footer-links-grid">
					<div class="footer-links-column">
						<?php foreach ( array_slice( $quick_links, 0, 4 ) as $link ) : ?>
							<a href="<?php echo esc_url( $link['url'] ); ?>" class="footer-quick-link">
								<?php echo esc_html( $link['name'] ); ?>
							</a>
						<?php endforeach; ?>
					</div>
					<div class="footer-links-column">
						<?php foreach ( array_slice( $quick_links, 4, 3 ) as $link ) : ?>
							<a href="<?php echo esc_url( $link['url'] ); ?>" class="footer-quick-link">
								<?php echo esc_html( $link['name'] ); ?>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<!-- Right Section - Newsletter Signup -->
			<div class="footer-right-section pb_55">
				<div class="footer-newsletter-content">
					<h3 class="footer-section-heading"><?php echo esc_html( $newsletter_heading ); ?></h3>
					<p class="footer-newsletter-description">
						<?php echo esc_html( $newsletter_description ); ?>
					</p>
				</div>
				<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="footer-newsletter-form" id="footerNewsletterForm">
					<input type="hidden" name="action" value="footer_newsletter_subscribe">
					<?php wp_nonce_field( 'footer_newsletter_subscribe', 'footer_newsletter_nonce' ); ?>
					<input
						type="email"
						name="newsletter_email"
						placeholder="<?php esc_attr_e( 'Enter Your Email', 'tasheel' ); ?>"
						class="footer-email-input"
						required
						aria-label="<?php esc_attr_e( 'Email address', 'tasheel' ); ?>"
					/>
					<?php
					get_template_part(
						'template-parts/ButtonPrimary',
						null,
						array(
							'type' => 'submit',
							'text' => __( 'Subscribe', 'tasheel' ),
							'variant' => 'default',
							'className' => 'footer-subscribe-button',
						)
					);
					?>
				</form>
			</div>
		</div>

		<!-- Bottom Section - Copyright and Legal Links -->
		<div class="footer-bottom-section">
			<p class="footer-copyright">
				<?php echo esc_html( $footer_copyright ); ?>
			</p>
			<div class="footer-legal-links">
				<a href="<?php echo esc_url( $footer_terms_link ); ?>" class="footer-legal-link">
					<?php esc_html_e( 'Terms and Conditions', 'tasheel' ); ?>
				</a>
				<a href="<?php echo esc_url( $footer_privacy_link ); ?>" class="footer-legal-link">
					<?php esc_html_e( 'Privacy Policy', 'tasheel' ); ?>
				</a>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
