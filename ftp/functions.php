<?php
add_filter('show_admin_bar', '__return_false'); //скроем на время админ бар сверху

//подключаем стили
function _s_styles()
{
	// Header
	wp_register_style('header', get_template_directory_uri(). '/css/header.css');
	wp_enqueue_style('header', get_template_directory_uri(). '/css/header.css');

	// Общие стили
	wp_register_style('total', get_template_directory_uri(). '/css/style.css');
	wp_enqueue_style('total', get_template_directory_uri(). '/css/style.css');

	// Footer
	wp_register_style('footer', get_template_directory_uri(). '/css/footer.css');
	wp_enqueue_style('footer', get_template_directory_uri(). '/css/footer.css');

	// Главная
	if ( is_page("main") )
	{
		wp_register_style('main', get_template_directory_uri(). '/css/main.css');
		wp_enqueue_style('main', get_template_directory_uri(). '/css/main.css');
	}
}
add_action('wp_enqueue_scripts', '_s_styles');

//подключаю скрипты

function _s_scripts()
{
	//своя библиотека jquery, не вордпрессовска
	wp_deregister_script('jquery');
	wp_register_script('jquery',  get_template_directory_uri(). '/js/jquery.js');
	wp_enqueue_script('jquery');

	// Form Validation
	wp_register_script('form_validation',  get_template_directory_uri(). '/js/request_qoute_form_validation.js');
	wp_enqueue_script('form_validation');
}

add_action('wp_enqueue_scripts', '_s_scripts');



//регистрация меню
if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'left-menu'=>__('Left Menu')
		)
	);
}

function custom_menu(){
	echo '<ul>';
	wp_list_pages('title_li=&');
	echo '</ul>';
}

// Добавляем кнопку добавления миниатюры поста
add_theme_support( 'post-thumbnails' );

// Function for stripping tags, etc from input value
function check_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// Send Email
add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
 
function SendEmail($to, $subject, $body){
	$headers = array('Content-Type: text/html; charset=UTF-8');
	 
	wp_mail( $to, $subject, $body, $headers );
}
 
// Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
 
function wpdocs_set_html_mail_content_type() {
    return 'text/html';
}

// Мой тип поста
add_action( 'init', 'prowp_register_my_post_types' );
function prowp_register_my_post_types() {
	$supports = array('title', 'editor');
	register_post_type( 'clients',
		array(
			'labels' => array( 'name' => 'Clients',
							   'add_new' => "Add new Client",
							   'add_new_item' => "Add new Client"
			 					),
			'supports' => $supports,
			'public' => true
		)
	);
}
?>