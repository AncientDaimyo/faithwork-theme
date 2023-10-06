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
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on faithwork-theme, use a find and replace
		* to change 'faithwork-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('faithwork-theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu' => esc_html__('Header-menu', 'faithwork-theme'),
			'footer-menu-left' => esc_html__('Footer-left', 'faithwork-theme'),
			'footer-menu-center' => esc_html__('Footer-center', 'faithwork-theme'),
			'footer-menu-right' => esc_html__('Footer-right', 'faithwork-theme')
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
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



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
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

/**
 * Enqueue scripts and styles.
 */
function faithwork_theme_scripts()
{
	wp_enqueue_style('faithwork-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('faithwork-theme-style', 'rtl', 'replace');
	wp_enqueue_style('faithwork-theme-style-slider', get_template_directory_uri() . '/css/slider.css');
	wp_enqueue_style('faithwork-theme-style-woocommerce-custom', get_template_directory_uri() . '/css/woocommerce-custom.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-marquee', 'https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js');
	wp_enqueue_script('faithwork-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('faithwork-theme-swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-burger', get_template_directory_uri() . '/js/burger.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-menu', get_template_directory_uri() . '/js/menu.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-scroll', get_template_directory_uri() . '/js/scroll.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-marquee', get_template_directory_uri() . '/js/begushyaya.js', array(), 1.0, true);
	wp_enqueue_script('faithwork-theme-slider', get_template_directory_uri() . '/js/slider.js', array(), 1.0, true);


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

	/** Поля которые ОСТАЮТСЯ */

	//unset( $array['billing']['billing_first_name'] ); // Имя
	//unset( $array['billing']['billing_last_name'] ); // Фамилия
	//unset( $array['billing']['billing_city'] ); // Населённый пункт
	//unset( $array['billing']['billing_state'] ); // Область / район
	//unset( $array['billing']['billing_postcode'] ); // Почтовый индекс
	//unset( $array['billing']['billing_email'] ); // Email
	//unset( $array['order']['order_comments'] ); // Примечание к заказу
	// unset($array['billing']['billing_phone']); // Телефон
	// unset($array['billing']['billing_address_1']); // Адрес (Номер дома и название улицы)
	/** Поля которые УДАЛЯЮТСЯ */

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

add_filter('woocommerce_cart_item_name', 'quadlayers_product_image_checkout', 9999, 3);
function quadlayers_product_image_checkout($name, $cart_item, $cart_item_key)
{
	if (!is_checkout()) {
		return $name;
	}
	$product = $cart_item['data'];
	$thumbnail = $product->get_image(array('195', '160'), array('class' => 'alignleft'));
	return $thumbnail . $name;
}
