<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dwyerit
 */

?>

<footer class="footer">
	<div class="container-default w-container">
		<div class="footer-content-top">
			<div id="w-node-_3819eb97-2ed3-0240-cf77-97991b909115-1b909112" class="footer-main-content">
				<div href="#" class="footer-logo-container">
					<?php
					$footer_logo = get_field('header_logo', 'option');

					if ($footer_logo) {
						echo wp_get_attachment_image($footer_logo, '', '', ["class" => "footer-logo"]);
					} else {
						echo bloginfo('name');
					}
					?>
				</div>
				<p class="paragraph footer-main-content-paragraph">We help companies to grow more effectively by
					managing and
					optimizing their IT. </p>
				<div class="w-layout-grid footer-2-contact-details grid-turned-flex">

					<?php
					$phone_number = get_field('phone_number', 'option');

					if ($phone_number):
						?>
						<a href="tel:<?php echo esc_html($phone_number); ?>"
							class="icon-horizontal center-on-mobile w-inline-block">
							<div class="svg-embeded-icon footer-icon w-embed"><svg width="100%" height="100%"
									viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M14.175 13.65C13.8 14.025 13.5 14.475 13.2 15C11.7 13.725 10.275 12.375 9.00005 10.8C9.52505 10.575 9.97505 10.2 10.35 9.82501C12.075 8.10001 11.475 5.85001 9.75005 4.12501C8.02505 2.40001 5.77505 1.72501 4.05005 3.45001C2.32505 5.17501 2.02505 8.40001 3.45005 10.425C5.92505 14.25 9.75005 18.075 13.575 20.625C15.6 21.975 18.825 21.75 20.55 20.025C22.275 18.3 21.675 16.05 19.95 14.325C18.225 12.6 15.975 11.85 14.175 13.65Z"
										stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
										stroke-linejoin="round"></path>
								</svg></div>
							<p class="contact-information">
								<?php echo esc_html($phone_number); ?>
							</p>
						</a>
						<?php
					endif;

					$email = get_field('email', 'option');

					if ($email):
						?>
						<a id="w-node-_544f5204-c56b-59c0-922c-2f9bb7c4b38a-b7c4b38a" href="<?php echo esc_html($email); ?>"
							class="icon-horizontal center-on-mobile w-inline-block">
							<div class="svg-embeded-icon footer-icon w-embed"><svg width="100%" height="100%"
									viewBox="0 0 22 17" fill="none">
									<path
										d="M19.4015 1H2.4155C1.63374 1 1 1.63374 1 2.4155V13.7395C1 14.5212 1.63374 15.155 2.4155 15.155H19.4015C20.1832 15.155 20.817 14.5212 20.817 13.7395V2.4155C20.817 1.63374 20.1832 1 19.4015 1Z"
										stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
										stroke-linejoin="round"></path>
									<path
										d="M20.4975 1.51904L12.8123 7.43016C12.2666 7.84996 11.5974 8.07757 10.9089 8.07757C10.2204 8.07757 9.55122 7.84996 9.00552 7.43016L1.32031 1.51904"
										stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
										stroke-linejoin="round"></path>
								</svg></div>
							<p class="contact-information">
								<?php echo esc_html($email); ?>
							</p>
						</a>
						<?php
					endif;

					$address = get_field('address', 'option');

					if ($address):
						?>
						<a href="#" class="icon-horizontal center-on-mobile w-inline-block">
							<div class="svg-embeded-icon footer-icon w-embed"><svg width="100%" height="100%"
									viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M4.23926 10.3915C4.25367 6.15089 7.70302 2.7249 11.9436 2.7393C16.1842 2.75371 19.6102 6.20306 19.5958 10.4437V10.5306C19.5436 13.2871 18.0045 15.835 16.1175 17.8263C15.0384 18.9469 13.8333 19.939 12.5262 20.7828C12.1767 21.0851 11.6583 21.0851 11.3088 20.7828C9.36033 19.5145 7.65019 17.9133 6.25665 16.0523C5.01461 14.4296 4.30942 12.4599 4.23926 10.4176L4.23926 10.3915Z"
										stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"></path>
									<circle cx="11.9179" cy="10.5395" r="2.46087" stroke="currentcolor" stroke-width="1.5"
										stroke-linecap="round" stroke-linejoin="round"></circle>
								</svg></div>
							<p class="contact-information">
								<?php echo wp_kses_post($address); ?>
							</p>
						</a>
						<?php
					endif;
					?>

				</div>
			</div>
			<div id="w-node-_3819eb97-2ed3-0240-cf77-97991b909127-1b909112" class="footer-menu-wrapper pages">
				<div class="title footer-menu-title">Pages</div>
				<div class="footer-menu-content">
					<ul role="list" class="footer-nav w-list-unstyled">
						<?php
						if (have_rows('pages_menu', 'option')):
							while (have_rows('pages_menu', 'option')):
								the_row();
								$pages_obj = get_sub_field('add_name_&_link');
								?>
								<li class="footer-nav-item">
									<a href="<?php echo esc_url($pages_obj['url']); ?>" class="footer-nav-link">
										<?php echo esc_html($pages_obj['title']); ?>
									</a>
								</li>
								<?php
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</div>
			<div class="footer-menu-wrapper margin-right">

				<?php
				$footer_information_text = get_field('footer_information_text', 'option');

				if ($footer_information_text):
					?>
					<div class="title footer-menu-title">
						<?php echo esc_html($footer_information_text); ?>
					</div>
					<?php
				endif;

				$footer_button = get_field('footer_button', 'option');

				if ($footer_button && is_array($footer_button)):
					?>
					<div class="footer-menu-content pages">
						<a href="<?php echo esc_url($footer_button['url']); ?>" class="button-primary w-inline-block">
							<div class="button-primary-text-wrapper">
								<div>
									<?php echo esc_html($footer_button['title']); ?>
								</div>
								<div class="button-primary-arrow w-embed"><svg width="100%" height="100%"
										viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
											fill="currentcolor"></path>
									</svg></div>
							</div>
						</a>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
		<div class="footer-content-bottom">
			<div class="footer-left">
				<div class="footer-small-print no-max-width"><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" rel="noopener"
						class="standard-color-link">Privacy Policy</a></div>
				<div class="footer-small-print no-max-width">©<span id="copyRightYear"
						class="copyright-year"><?php echo date('Y'); ?></span>
					<?php echo bloginfo('name'); ?></div>
				<div class="footer-small-print no-max-width">Powered by <a href="#"
						rel="noopener" target="_blank" class="standard-color-link">MSP Launchpad</a></div>
			</div>
			<div class="footer-social-media-wrapper">
				<a aria-label="visit us on facebook" rel="noopener"
					href="<?php echo esc_url(get_field('facebook_link', 'option')); ?>" target="_blank"
					class="social-media-link w-inline-block"><img
						src="<?php echo get_template_directory_uri() . '/assets/images/facebook.svg'; ?>"
						loading="eager" alt="" class="image social-media-icon" /></a><a aria-label="visit us on twitter"
					rel="noopener" href="<?php echo esc_url(get_field('facebook_link', 'option')); ?>" target="_blank"
					class="social-media-link w-inline-block"><img
						src="<?php echo get_template_directory_uri() . '/assets/images/twitter.svg'; ?>"
						loading="eager" alt="" class="image social-media-icon" /></a><a
					aria-label="visit us on LinkedIn" rel="noopener" href="<?php echo esc_url(get_field('facebook_link', 'option')); ?>"
					target="_blank" class="social-media-link w-inline-block"><img
						src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.svg'; ?>"
						loading="eager" alt="" class="image social-media-icon" /></a></div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>