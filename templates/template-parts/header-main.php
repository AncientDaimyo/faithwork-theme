<?php

/**
 * The header for our theme
 *
 * @package faithwork-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<?php the_custom_logo(); ?>
			<nav id="site-navigation" class="main-navigation">
				<button type="button" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'container_id'   => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<nav class="navigation-icons">
				<a href="/search" class="nav-icon">
					<svg class="header-svg" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
						<mask id="mask0_7_7" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="35" height="35">
							<rect width="35" height="35" fill="white" />
						</mask>
						<g mask="url(#mask0_7_7)">
							<path d="M13.8056 23.1146C11.1698 23.1146 8.93916 22.2011 7.1135 20.3741C5.28783 18.5472 4.375 16.3334 4.375 13.7327C4.375 11.132 5.28849 8.91815 7.11546 7.09117C8.94242 5.2642 11.1603 4.35071 13.7691 4.35071C16.3779 4.35071 18.5917 5.2642 20.4106 7.09117C22.2295 8.91815 23.1389 11.1332 23.1389 13.7363C23.1389 14.7871 22.9688 15.7946 22.6285 16.7587C22.2882 17.7228 21.794 18.61 21.1458 19.4202L29.75 27.9757C29.985 28.2035 30.1024 28.4933 30.1024 28.8453C30.1024 29.1973 29.985 29.4908 29.75 29.7257C29.515 29.9607 29.2216 30.0781 28.8696 30.0781C28.5176 30.0781 28.2278 29.9607 28 29.7257L19.4202 21.1459C18.691 21.7616 17.8447 22.2436 16.8812 22.592C15.9177 22.9404 14.8925 23.1146 13.8056 23.1146ZM13.7812 20.6841C15.7054 20.6841 17.341 20.0055 18.6879 18.6485C20.0349 17.2914 20.7083 15.6528 20.7083 13.7327C20.7083 11.8125 20.0349 10.1739 18.6879 8.81685C17.341 7.4598 15.7054 6.78128 13.7812 6.78128C11.8436 6.78128 10.1965 7.4598 8.84013 8.81685C7.48373 10.1739 6.80553 11.8125 6.80553 13.7327C6.80553 15.6528 7.48373 17.2914 8.84013 18.6485C10.1965 20.0055 11.8436 20.6841 13.7812 20.6841Z" fill="white" />
						</g>
					</svg>
				</a>
				<a href=<?echo(wp_login_url())?> class="nav-icon">
					<svg class="header-svg" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
						<mask id="mask0_7_26" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="32">
							<rect width="32" height="32" fill="white" />
						</mask>
						<g mask="url(#mask0_7_26)">
							<path d="M7.53341 23.2667C8.84453 22.326 10.1927 21.5982 11.5778 21.0834C12.963 20.5686 14.4371 20.3112 16.0001 20.3112C17.563 20.3112 19.0408 20.5686 20.4334 21.0834C21.826 21.5982 23.1779 22.326 24.489 23.2667C25.4001 22.163 26.0649 21.0111 26.4834 19.8111C26.902 18.6111 27.1112 17.3408 27.1112 16C27.1112 12.8667 26.0427 10.2315 23.9056 8.09445C21.7686 5.95741 19.1334 4.88889 16.0001 4.88889C12.8667 4.88889 10.2316 5.95741 8.09451 8.09445C5.95747 10.2315 4.88895 12.8667 4.88895 16C4.88895 17.3408 5.10191 18.6111 5.52785 19.8111C5.95378 21.0111 6.6223 22.163 7.53341 23.2667ZM15.9959 17.1111C14.7024 17.1111 13.613 16.6672 12.7278 15.7792C11.8427 14.8913 11.4001 13.8005 11.4001 12.507C11.4001 11.2135 11.844 10.1241 12.732 9.23892C13.6199 8.35372 14.7107 7.91112 16.0042 7.91112C17.2977 7.91112 18.3871 8.3551 19.2723 9.24305C20.1575 10.131 20.6001 11.2217 20.6001 12.5153C20.6001 13.8088 20.1561 14.8982 19.2682 15.7834C18.3802 16.6685 17.2895 17.1111 15.9959 17.1111ZM16.0105 29.3334C14.1739 29.3334 12.4445 28.9834 10.8223 28.2834C9.20009 27.5834 7.78527 26.6297 6.57785 25.4223C5.37045 24.2148 4.41675 22.8017 3.71675 21.183C3.01675 19.5642 2.66675 17.8346 2.66675 15.9941C2.66675 14.1536 3.01675 12.4259 3.71675 10.8111C4.41675 9.19632 5.37045 7.78521 6.57785 6.57779C7.78527 5.37039 9.19836 4.41669 10.8171 3.71669C12.4359 3.01669 14.1655 2.66669 16.006 2.66669C17.8465 2.66669 19.5742 3.01669 21.189 3.71669C22.8038 4.41669 24.2149 5.37039 25.4223 6.57779C26.6297 7.78521 27.5834 9.19656 28.2834 10.8119C28.9834 12.4271 29.3334 14.1531 29.3334 15.9896C29.3334 17.8262 28.9834 19.5556 28.2834 21.1778C27.5834 22.8 26.6297 24.2148 25.4223 25.4223C24.2149 26.6297 22.8035 27.5834 21.1882 28.2834C19.573 28.9834 17.847 29.3334 16.0105 29.3334ZM16.0001 27.1112C17.2075 27.1112 18.3741 26.9352 19.5001 26.5834C20.626 26.2315 21.7112 25.6519 22.7556 24.8445C21.7112 24.0963 20.6223 23.5241 19.489 23.1278C18.3556 22.7315 17.1927 22.5334 16.0001 22.5334C14.8075 22.5334 13.6445 22.7315 12.5112 23.1278C11.3778 23.5241 10.289 24.0963 9.24452 24.8445C10.289 25.6519 11.3741 26.2315 12.5001 26.5834C13.626 26.9352 14.7927 27.1112 16.0001 27.1112ZM16.0001 14.8889C16.6964 14.8889 17.2667 14.6667 17.7112 14.2223C18.1557 13.7778 18.3779 13.2074 18.3779 12.5111C18.3779 11.8148 18.1557 11.2445 17.7112 10.8C17.2667 10.3556 16.6964 10.1334 16.0001 10.1334C15.3038 10.1334 14.7334 10.3556 14.2889 10.8C13.8445 11.2445 13.6223 11.8148 13.6223 12.5111C13.6223 13.2074 13.8445 13.7778 14.2889 14.2223C14.7334 14.6667 15.3038 14.8889 16.0001 14.8889Z" fill="white" />
						</g>
					</svg>
				</a>
				<a href="#" class="nav-icon">
					<svg class="header-svg" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
						<mask id="mask0_7_32" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="34" height="34">
							<rect width="34" height="34" fill="white" />
						</mask>
						<g mask="url(#mask0_7_32)">
							<path d="M17.0002 28.959C16.7216 28.959 16.438 28.9089 16.1495 28.8086C15.8609 28.7084 15.6072 28.548 15.3883 28.3274L13.3287 26.4326C10.5425 23.859 8.09683 21.3739 5.99149 18.9774C3.88616 16.5809 2.8335 14.0328 2.8335 11.3333C2.8335 9.17441 3.55757 7.37149 5.00571 5.92455C6.45387 4.47762 8.24832 3.75415 10.389 3.75415C11.609 3.75415 12.7974 4.03551 13.9543 4.59824C15.1113 5.16098 16.1266 6.03657 17.0002 7.22498C17.9525 6.03657 18.9835 5.16098 20.0932 4.59824C21.203 4.03551 22.3756 3.75415 23.6113 3.75415C25.752 3.75415 27.5465 4.47762 28.9946 5.92455C30.4428 7.37149 31.1668 9.17441 31.1668 11.3333C31.1668 14.0328 30.1161 16.5828 28.0147 18.9833C25.9134 21.3838 23.4617 23.8708 20.6599 26.4444L18.6057 28.3333C18.3893 28.5518 18.1384 28.7107 17.8531 28.81C17.5678 28.9094 17.2835 28.959 17.0002 28.959ZM15.9377 9.72777C15.2844 8.63378 14.4817 7.75819 13.5293 7.10103C12.577 6.44383 11.5303 6.11524 10.389 6.11524C8.87793 6.11524 7.63441 6.60714 6.6585 7.59094C5.68255 8.57475 5.19458 9.82558 5.19458 11.3434C5.19458 12.6589 5.64621 14.0478 6.54945 15.5102C7.45267 16.9726 8.53288 18.3912 9.79007 19.7661C11.0472 21.141 12.3468 22.4227 13.6887 23.6111C15.0306 24.7995 16.1344 25.7912 17.0002 26.5861C17.8659 25.8069 18.9697 24.8192 20.3116 23.6229C21.6535 22.4266 22.9521 21.1359 24.2075 19.7507C25.4628 18.3655 26.543 16.9414 27.4481 15.4784C28.3532 14.0154 28.8057 12.6337 28.8057 11.3333C28.8057 9.82221 28.3138 8.57475 27.33 7.59094C26.3462 6.60714 25.1066 6.11524 23.6113 6.11524C22.4543 6.11524 21.4036 6.43989 20.4592 7.0892C19.5147 7.73853 18.7001 8.61805 18.0154 9.72777C17.8816 9.93239 17.7282 10.0819 17.555 10.1764C17.3819 10.2708 17.189 10.318 16.9765 10.318C16.764 10.318 16.5673 10.2708 16.3863 10.1764C16.2053 10.0819 16.0557 9.93239 15.9377 9.72777Z" fill="white" />
						</g>
					</svg>
				</a>
				<a href="/cart" class="nav-icon">
					<svg class="header-svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
						<mask id="mask0_7_20" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
							<rect width="30" height="30" fill="white" />
						</mask>
						<g mask="url(#mask0_7_20)">
							<path d="M5.83331 27.5C5.2604 27.5 4.76995 27.296 4.36197 26.888C3.95399 26.4801 3.75 25.9896 3.75 25.4167V9.37497C3.75 8.80207 3.95399 8.31163 4.36197 7.90363C4.76995 7.49565 5.2604 7.29166 5.83331 7.29166H8.95834C8.95834 5.63195 9.53299 4.21007 10.6823 3.02603C11.8316 1.84201 13.2361 1.25 14.8958 1.25C16.5962 1.25 18.0456 1.83507 19.244 3.00522C20.4424 4.17534 21.0417 5.60416 21.0417 7.29166H24.1667C24.7396 7.29166 25.2301 7.49565 25.638 7.90363C26.046 8.31163 26.25 8.80207 26.25 9.37497V25.4167C26.25 25.9896 26.046 26.4801 25.638 26.888C25.2301 27.296 24.7396 27.5 24.1667 27.5H5.83331ZM5.83331 25.4167H24.1667V9.37497H5.83331V25.4167ZM15 16.875C16.6736 16.875 18.1163 16.2691 19.3281 15.0573C20.5399 13.8455 21.1458 12.4028 21.1458 10.7292H19.0625C19.0625 11.8403 18.6632 12.7951 17.8646 13.5938C17.066 14.3924 16.1111 14.7917 15 14.7917C13.8889 14.7917 12.934 14.3924 12.1354 13.5938C11.3368 12.7951 10.9375 11.8403 10.9375 10.7292H8.85416C8.85416 12.4028 9.46006 13.8455 10.6719 15.0573C11.8837 16.2691 13.3264 16.875 15 16.875ZM11.0417 7.29166H18.9583C18.9583 6.18055 18.5764 5.24305 17.8125 4.47916C17.0486 3.71526 16.1111 3.33331 15 3.33331C13.8889 3.33331 12.9514 3.71526 12.1875 4.47916C11.4236 5.24305 11.0417 6.18055 11.0417 7.29166Z" fill="white" />
						</g>
					</svg>
				</a>

			</nav>
		</header><!-- #masthead -->	