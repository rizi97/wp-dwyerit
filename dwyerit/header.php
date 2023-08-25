<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dwyerit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div data-collapse="medium" data-animation="over-left" data-duration="400" data-easing="ease" data-easing2="ease"
		role="banner" class="header w-nav">
		<div class="container-default menu w-container">
			<div class="header-wrapper">
				<div class="menu-left">
					<a href="<?php echo home_url(); ?>" aria-current="page" class="brand w-nav-brand w--current"
						style="display: flex; align-items: center">
						<?php
						$header_logo = get_field('header_logo', 'option');

						if ($header_logo) {
							echo wp_get_attachment_image($header_logo, '', '', ["class" => "header-logo"]);
						} else {
							echo bloginfo('name');
						}
						?>
					</a>
					<div class="navbar-functions navbar-functions-left margin-left-24px">

						<?php
						$support_link = get_field('support_link', 'option');

						if (!empty($support_link['url'])):
							?>
							<a href="<?php echo esc_url($support_link['url']); ?>" rel="noopener" aria-label="support"
								class="navbar-icon-link main-navbar w-inline-block">
								<div class="svg-embeded-icon nav-bar support w-embed"><svg fill="currentColor"
										viewBox="0 0 4 5">
										<path
											d="M1.025 2.415v-.203c0-.354.145-.675.377-.908l.002-.002a1.283 1.283 0 011.814.002h.001c.233.232.378.555.378.908v.203c.037 0 .074.009.107.023h.001a.32.32 0 01.1.065.28.28 0 01.065.1l.004.009a.315.315 0 01.021.109v.541c0 .039-.009.08-.024.116v.001a.313.313 0 01-.065.1.311.311 0 01-.1.066l-.01.003a.305.305 0 01-.108.021h-.049c-.019.176-.129.334-.301.459-.17.125-.4.219-.666.262a.274.274 0 01-.262.199.273.273 0 01-.271-.271c0-.149.123-.271.271-.271.114 0 .215.072.254.176.23-.04.432-.121.577-.228.128-.095.211-.207.23-.327h-.042c-.04 0-.08-.01-.116-.023h-.001a.355.355 0 01-.1-.066.312.312 0 01-.09-.217v-.541c0-.041.008-.08.023-.117h.001l-.001-.001a.308.308 0 01.275-.189v-.139a1.088 1.088 0 00-.259-.416 1.06 1.06 0 00-1.505 0 1.09 1.09 0 00-.26.416v.139a.324.324 0 01.21.088c.026.028.05.062.065.1l.004.009c.013.035.02.072.02.109v.541c0 .039-.008.08-.023.116v.001a.375.375 0 01-.065.1.315.315 0 01-.101.066l-.009.003a.305.305 0 01-.108.021h-.258a.342.342 0 01-.116-.023H.914a.308.308 0 01-.19-.283v-.541c0-.041.008-.08.023-.117v-.001a.341.341 0 01.066-.1.328.328 0 01.212-.088zm1.286 1.697a.105.105 0 00-.105.106c0 .059.047.106.105.106a.106.106 0 00.105-.106.105.105 0 00-.105-.106zM1.162 2.689h-.129a.031.031 0 00-.021.009l-.008.011c-.002.003-.002.007-.002.013v.541c0 .008.004.016.01.021.002.004.006.006.01.008a.025.025 0 00.012.002h.258c.004 0 .007 0 .01-.002h.002c.004-.002.008-.004.012-.008l.007-.01.002-.012v-.541l-.001-.01-.001-.003-.007-.011c-.004-.002-.008-.006-.012-.007h.001a.044.044 0 00-.013-.002h-.13v.001zm2.297 0H3.33a.036.036 0 00-.022.009l-.007.011a.04.04 0 00-.002.013v.541c0 .008.004.016.009.021l.011.008a.025.025 0 00.012.002h.258c.004 0 .008 0 .01-.002h.002c.004-.002.008-.004.012-.008l.007-.01.003-.012v-.541a.025.025 0 00-.002-.01l-.001-.003-.007-.011c-.004-.002-.008-.006-.012-.007h.001a.04.04 0 00-.013-.002h-.13v.001zm-.226-.888a.996.996 0 00-.209-.302v-.001a1.004 1.004 0 00-1.428 0 1 1 0 00-.209.303 1.224 1.224 0 011.792-.057h.001c.019.019.037.036.053.057z"
											class="Vector" />
									</svg></div>
								<div class="hide-at-smaller-size">Support</div>
							</a>

							<?php
						endif;

						$phone_number = get_field('phone_number', 'option');

						if ($phone_number):
							?>
							<a aria-label="call us" href="tel:<?php echo esc_html($phone_number); ?>"
								class="navbar-icon-link main-navbar w-inline-block">
								<div class="svg-embeded-icon nav-bar w-embed"><svg width="100%" height="100%"
										viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M14.175 13.65C13.8 14.025 13.5 14.475 13.2 15C11.7 13.725 10.275 12.375 9.00005 10.8C9.52505 10.575 9.97505 10.2 10.35 9.82501C12.075 8.10001 11.475 5.85001 9.75005 4.12501C8.02505 2.40001 5.77505 1.72501 4.05005 3.45001C2.32505 5.17501 2.02505 8.40001 3.45005 10.425C5.92505 14.25 9.75005 18.075 13.575 20.625C15.6 21.975 18.825 21.75 20.55 20.025C22.275 18.3 21.675 16.05 19.95 14.325C18.225 12.6 15.975 11.85 14.175 13.65Z"
											stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
											stroke-linejoin="round"></path>
									</svg></div>
								<div class="hide-at-smaller-size show-desktop">
									<?php echo esc_html($phone_number); ?><br />
								</div>
							</a>

						<?php endif; ?>

						<a aria-label="send us email" href="#" class="navbar-icon-link main-navbar hide w-inline-block">
							<div class="svg-embeded-icon nav-bar w-embed"><svg width="100%" height="100%"
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
							<div class="hide-at-smaller-size">info@msplaunchpad.com</div>
						</a>
					</div>
				</div>
				<div class="split-content header-center">
					<nav role="navigation" class="nav-menu flex-horizontal w-nav-menu">
						<div class="navbar-functions navbar-functions-left margin-left-24px show-in-menu">

							<?php if (!empty($support_link['url'])): ?>
								<a href="<?php echo esc_url($support_link['url']); ?>"
									class="navbar-icon-link main-navbar mobile-hidden hide-button w-inline-block">
									<div class="svg-embeded-icon nav-bar support mobile w-embed"><svg width="100%"
											height="100%" viewBox="0 0 36 36" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M29.25 20.25V7.875H6.75V20.25" stroke="currentColor" stroke-width="3"
												stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
											</path>
											<path d="M32.625 28.125H3.375L5.625 23.625H30.375L32.625 28.125Z"
												stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M18 12.375V19.125" stroke="currentColor" stroke-width="2"
												stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
											</path>
											<path d="M14.625 15.75H21.375" stroke="currentColor" stroke-width="2"
												stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
											</path>
										</svg></div>
									<div class="hide-at-smaller-size">Support</div>
								</a>
							<?php
							endif;

							if ($phone_number):
								?>
								<a href="tel:<?php echo esc_html($phone_number); ?>"
									class="navbar-icon-link main-navbar mobile-hidden hide-button w-inline-block">
									<div class="svg-embeded-icon nav-bar mobile w-embed"><svg width="100%" height="100%"
											viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M14.175 13.65C13.8 14.025 13.5 14.475 13.2 15C11.7 13.725 10.275 12.375 9.00005 10.8C9.52505 10.575 9.97505 10.2 10.35 9.82501C12.075 8.10001 11.475 5.85001 9.75005 4.12501C8.02505 2.40001 5.77505 1.72501 4.05005 3.45001C2.32505 5.17501 2.02505 8.40001 3.45005 10.425C5.92505 14.25 9.75005 18.075 13.575 20.625C15.6 21.975 18.825 21.75 20.55 20.025C22.275 18.3 21.675 16.05 19.95 14.325C18.225 12.6 15.975 11.85 14.175 13.65Z"
												stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
												stroke-linejoin="round"></path>
										</svg></div>
									<div class="hide-at-smaller-size">+1 1234 5678</div>
								</a>
								<?php
							endif;

							$email = get_field('email', 'option');

							if ($email):
								?>
								<a href="mailto:<?php echo esc_html($email); ?>"
									class="navbar-icon-link main-navbar mobile-hidden hide-button w-inline-block">
									<div class="svg-embeded-icon nav-bar w-embed"><svg width="100%" height="100%"
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
									<div class="hide-at-smaller-size">
										<?php echo esc_html($email); ?>
									</div>
								</a>

								<?php
							endif;
							?>
						</div>


						<?php if (have_rows('menu', 'option')): ?>

							<ul role="list" class="header-navigation">

								<?php
								while (have_rows('menu', 'option')):
									the_row();
									$parent_obj = get_sub_field('parent_name');
									$is_subchild = get_sub_field('is_subchild');

									if ($is_subchild):

										$menu_style = get_sub_field('menu_style');

										if ($menu_style === 'mega_menu'):

											$mega_menu_count = count(get_sub_field('subchild_mega_menu'));

											if (have_rows('subchild_mega_menu')):
												$local_count = 1;
												?>
												<li class="nav-item-wrapper">
													<div data-hover="true" data-delay="50" class="nav-link-dropdown w-dropdown">
														<div class="nav-link dropdown w-dropdown-toggle">
															<div>
																<?php echo esc_html($parent_obj['title']); ?>
															</div>
															<div class="svg-embeded-icon caret-down w-embed"><svg width="100%" height="100%"
																	viewBox="0 0 320 512">
																	<path fill="currentColor"
																		d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
																	</path>
																</svg></div>
														</div>
														<nav class="dropdown-list it-services w-dropdown-list">
															<div class="dropdown-nav-main-wrapper">
																<?php
																while (have_rows('subchild_mega_menu')):
																	the_row();

																	$column_obj = get_sub_field('column_heading_link');
																	?>
																	<div
																		class="dropdown-nav-pages-wrapper <?php echo $local_count == $mega_menu_count ? 'last' : ''; ?>">
																		<div class="title dropdown">
																			<a href="<?php echo esc_url($column_obj['url']); ?>"
																				class="no-underlining">
																				<?php echo esc_html($column_obj['title']); ?>
																			</a>
																		</div>
																		<div class="dropdown-nav-content">
																			<ul role="list" class="dropdown-nav last">
																				<?php
																				if (have_rows('mega_menu_links')):
																					while (have_rows('mega_menu_links')):
																						the_row();

																						$child_obj = get_sub_field('sub_item_link');
																						// print_r($child_obj);
																						?>
																						<li class="dropdown-nav-item">
																							<a href="<?php echo esc_url($child_obj['url']); ?>"
																								class="dropdown-nav-link">
																								<?php echo esc_html($child_obj['title']); ?>
																							</a>
																						</li>
																						<?php
																					endwhile;
																				endif;
																				?>
																			</ul>
																		</div>
																	</div>
																	<?php
																	$local_count++;

																endwhile;
																?>
															</div>
														</nav>
													</div>
												</li>
												<?php
											endif;

										else:

											$simple_menu_count = count(get_sub_field('simple_menu'));

											if (have_rows('simple_menu')):
												$local_count = 1;
												?>
												<li class="nav-item-wrapper">
													<div data-hover="true" data-delay="50" class="nav-link-dropdown w-dropdown">
														<div class="nav-link dropdown w-dropdown-toggle">
															<div>
																<?php echo esc_html($parent_obj['title']); ?>
															</div>
															<div class="svg-embeded-icon caret-down w-embed"><svg width="100%" height="100%"
																	viewBox="0 0 320 512">
																	<path fill="currentColor"
																		d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
																	</path>
																</svg></div>
														</div>
														<nav class="dropdown-list our-story w-dropdown-list">
															<div class="dropdown-nav-main-wrapper">
																<div class="dropdown-nav-pages-wrapper last">
																	<div class="dropdown-nav-content">
																		<ul role="list" class="dropdown-nav last">
																			<?php
																			while (have_rows('simple_menu')):
																				the_row();

																				$child_obj = get_sub_field('sub_item_link');

																				?>

																				<li
																					class="dropdown-nav-item <?php echo $local_count == $simple_menu_count ? 'no-bottom-margin' : ''; ?>">
																					<a href="<?php echo esc_url($child_obj['url']); ?>"
																						class="dropdown-nav-link">
																						<?php echo esc_html($child_obj['title']); ?>
																					</a>
																				</li>

																				<?php
																				$local_count++;

																			endwhile;
																			?>
																		</ul>
																	</div>
																</div>
															</div>
														</nav>
													</div>
												</li>

												<?php
											endif;

										endif;

									else:
										?>
										<li class="nav-item-wrapper">
											<a href="<?php echo esc_url($parent_obj['url']); ?>" class="nav-link">
												<?php echo esc_html($parent_obj['title']); ?>
											</a>
										</li>

										<?php
									endif;

								endwhile;
								?>

							</ul>

							<?php
						endif;
						?>




						<?php
						if (get_field('add_button_in_primary_menu', 'option')):
							$contact_obj = get_field('header_button_link', 'option');
							?>
							<a rel="noopener" href="<?php echo esc_url($contact_obj['url']); ?>"
								class="button-primary header-button show-on-mobile w-inline-block">
								<div class="button-primary-text-wrapper">
									<div>
										<?php echo esc_html($contact_obj['title']); ?>
									</div>
									<div class="button-primary-arrow w-embed"><svg width="100%" height="100%"
											viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16 6.97949C16 6.70703 15.877 6.43457 15.6748 6.23242L10.2256 0.791992C9.99707 0.563477 9.75098 0.466797 9.50488 0.466797C8.9248 0.466797 8.51172 0.879883 8.51172 1.4248C8.51172 1.71484 8.62598 1.96094 8.81055 2.14551L10.6914 4.03516L12.9238 6.08301L11.0342 5.97754H1.14648C0.540039 5.97754 0.118164 6.38184 0.118164 6.97949C0.118164 7.57715 0.540039 7.99023 1.14648 7.99023H11.0342L12.9238 7.87598L10.6914 9.92383L8.81055 11.8223C8.62598 11.998 8.51172 12.2441 8.51172 12.5342C8.51172 13.0879 8.9248 13.501 9.50488 13.501C9.75098 13.501 9.99707 13.3955 10.208 13.1846L15.6748 7.72656C15.877 7.5332 16 7.26074 16 6.97949Z"
												fill="currentcolor"></path>
										</svg></div>
								</div>
							</a>
						<?php endif; ?>

					</nav>
				</div>
				<div class="split-content header-left">
					<div class="menu-button w-nav-button">
						<div class="header-menu-button-icon-wrapper">
							<div class="icon-wrapper">
								<div class="header-menu-button-icon-top"></div>
								<div class="header-menu-button-icon-medium"></div>
								<div class="header-menu-button-icon-bottom"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>