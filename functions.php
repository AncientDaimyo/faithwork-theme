<?php

/**
 * faithwork-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package faithwork-theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function faithwork_theme_setup() 
{
	load_theme_textdomain('faithwork-theme', get_template_directory() . '/languages');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	register_nav_menus(
		array(
			'header-menu' => esc_html__('Header-menu', 'faithwork-theme'),
			'footer-menu-left' => esc_html__('Footer-left', 'faithwork-theme'),
			'footer-menu-center' => esc_html__('Footer-center', 'faithwork-theme'),
			'footer-menu-right' => esc_html__('Footer-right', 'faithwork-theme')
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'faithwork_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'faithwork_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function faithwork_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('faithwork_theme_content_width', 640);
}
add_action('after_setup_theme', 'faithwork_theme_content_width', 0);

function faithwork_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'faithwork-theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'faithwork-theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'faithwork_theme_widgets_init');

function faithwork_theme_scripts()
{
	wp_enqueue_style('faithwork-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	// wp_style_add_data('faithwork-theme-style', 'rtl', 'replace');
	wp_enqueue_style('faithwork-theme-style-slider', get_template_directory_uri() . '/assets/styles/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-marquee', 'https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js');
	wp_enqueue_script('jquery-input-masks', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js');
	wp_enqueue_script('faithwork-theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('faithwork-theme-swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-burger', get_template_directory_uri() . '/assets/js/burger.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-menu', get_template_directory_uri() . '/assets/js/menu.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-marquee', get_template_directory_uri() . '/assets/js/begushyaya.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-slider', get_template_directory_uri() . '/assets/js/slider.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-ajax', get_template_directory_uri() . '/assets/js/ajax.js', array(), 1.0, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'faithwork_theme_scripts');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}


add_filter('get_custom_logo', 'change_logo_class');
function change_logo_class($html)
{
	$html = str_replace('custom-logo"', 'faithwork-logo" id="logo1" ', $html);
	return $html;
}

add_filter('get_custom_logo', 'add_second_logo');
function add_second_logo($html)
{
	$html = str_replace('<img', '<img id="logo2" class="faithwork-logo inactive" src="' . get_theme_mod('test_img') . '"><img', $html);
	return $html;
}


/** TESTING !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1 */

add_filter('woocommerce_checkout_fields', 'wpbl_remove_some_fields', 9999);
function wpbl_remove_some_fields($array)
{
	unset($array['billing']['billing_company']); // Компания
	unset($array['billing']['billing_country']); // Страна
	// 1-ая строка адреса 
	unset($array['billing']['billing_address_2']); // 2-ая строка адреса

	// Удаляю поля пункта "Доставка по другому адресу" (Удалил это в админке пунктом "Принудительная доставка по платежному адресу")

	unset($array['shipping']['shipping_first_name']);
	unset($array['shipping']['shipping_last_name']);
	unset($array['shipping']['shipping_company']);
	unset($array['shipping']['shipping_country']);
	unset($array['shipping']['shipping_address_1']);
	unset($array['shipping']['shipping_address_2']);
	unset($array['shipping']['shipping_city']);
	unset($array['shipping']['shipping_state']);
	unset($array['shipping']['shipping_postcode']);

	// Возвращаем обработанный массив
	return $array;
}

add_filter('woocommerce_checkout_fields', 'wplb_reorder', 9999);
function wplb_reorder($array)
{
	$array['billing']['billing_first_name']['class'][0] = 'form-row-first';
	$array['billing']['billing_last_name']['class'][0] = 'form-row-last';
	$array['billing']['billing_address_1']['class'][0] = 'form-row-first';
	$array['billing']['billing_city']['class'][0] = 'form-row-last';
	$array['billing']['billing_state']['class'][0] = 'form-row-first';
	$array['billing']['billing_postcode']['class'][0] = 'form-row-last';
	$array['billing']['billing_phone']['class'][0] = 'form-row-first';
	$array['billing']['billing_email']['class'][0] = 'form-row-last';

	return $array;
}

// добавляем фотку товара на страницу оформления заказа

add_filter('woocommerce_cart_item_name', 'quadlayers_product_image_checkout', 9999, 3);
function quadlayers_product_image_checkout($name, $cart_item, $cart_item_key)
{
	if (!is_checkout()) {
		return $name;
	}
	$product = $cart_item['data'];
	$thumbnail = $product->get_image(array('195', '160'), array('class' => 'alignleft'));
	return $thumbnail . '<p class="futbolka-name">' . $name . '</p>';
}

add_filter('woocommerce_product_variation_title_include_attributes', 'wpsh_display_attributes', 10, 2);
function wpsh_display_attributes($should_include_attributes, $product)
{
	if (is_account_page()) {
		return $should_include_attributes;
	}
	return false;
}

add_filter('woocommerce_checkout_cart_item_quantity', '__return_empty_string');
add_filter('woocommerce_cart_item_subtotal', 'bbloomer_checkout_item_quantity_input', 9999, 3);


function bbloomer_checkout_item_quantity_input($product_quantity, $cart_item, $cart_item_key)
{

	if (is_checkout()) {

		$product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

		$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

		$product_quantity = woocommerce_quantity_input(array(

			'input_name'  => 'shipping_method_qty_' . $product_id,

			'input_value' => $cart_item['quantity'],

			'max_value'   => $product->get_max_purchase_quantity(),

			'min_value'   => '0',

		), $product, false);

		$product_quantity .= '<p>Количество</p><input type="hidden" name="product_key_' . $product_id . '" value="' . $cart_item_key . '">';
	}

	return $product_quantity;
}

add_action('woocommerce_checkout_update_order_review', 'bbloomer_update_item_quantity_checkout');

function bbloomer_update_item_quantity_checkout($post_data)
{

	parse_str($post_data, $post_data_array);

	$updated_qty = false;

	foreach ($post_data_array as $key => $value) {

		if (substr($key, 0, 20) === 'shipping_method_qty_') {

			$id = substr($key, 20);

			WC()->cart->set_quantity($post_data_array['product_key_' . $id], $post_data_array[$key], false);

			$updated_qty = true;
		}
	}

	if ($updated_qty) WC()->cart->calculate_totals();
}


