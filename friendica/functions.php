
<?php
add_action('after_setup_theme', 'friendica_setup');

function friendica_setup()
{
	load_theme_textdomain('friendica', get_template_directory() . '/languages');
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	global $content_width;
	if (!isset($content_width)) $content_width = 640;
	register_nav_menus(array(
		'main-menu' => __('Main Menu', 'friendica')
	));
}

add_action('wp_enqueue_scripts', 'friendica_load_scripts');

function friendica_load_scripts()
{
    $basedir = get_template_directory_uri() . '/assets/js/';
    wp_deregister_script('jquery'); //let's use our jsquery.
    wp_enqueue_script('jquery', $basedir.'jquery.min.js', array(), "1.11.3", true);
    wp_enqueue_script('skel', $basedir.'skel.min.js', array(), "3.0.1", true);
    wp_enqueue_script('friendica.util', $basedir.'util.js', array('jquery'), "1.0.0", true);
    wp_enqueue_script('friendica.main', $basedir.'main.js', array('friendica.util'), "1.0.0", true);
}

add_action('comment_form_before', 'friendica_enqueue_comment_reply_script');

function friendica_enqueue_comment_reply_script()
{
	if (get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_filter('the_title', 'friendica_title');

function friendica_title($title)
{
	if ($title == '') {
		return '&rarr;';
	}
	else {
		return $title;
	}
}

add_filter('wp_title', 'friendica_filter_wp_title');

function friendica_filter_wp_title($title)
{
	return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'friendica_widgets_init');

function friendica_widgets_init()
{
	register_sidebar(array(
		'name' => __('Sidebar Widget Area', 'friendica') ,
		'id' => 'primary-widget-area',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}

function friendica_custom_pings($comment)
{
	$GLOBALS['comment'] = $comment;
?>
<li <?php
	comment_class(); ?> id="li-comment-<?php
	comment_ID(); ?>"><?php
	echo comment_author_link(); ?></li>
<?php
}

add_filter('get_comments_number', 'friendica_comments_number');

function friendica_comments_number($count)
{
	if (!is_admin()) {
		global $id;
		$comments_by_type = & separate_comments(get_comments('status=approve&post_id=' . $id));
		return count($comments_by_type['comment']);
	}
	else {
		return $count;
	}
}
