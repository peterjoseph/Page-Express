<!DOCTYPE html>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' );

$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
	echo " | $site_description";
if ( $paged >= 2 || $page >= 2 )
	echo ' | ' . sprintf( __( 'Page %s', 'ObjectTheme' ), max( $paged, $page ) );

?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<style><?php include (get_template_directory().'/options/style.php'); include (get_template_directory().'/options/responsive.php'); echo get_theme_mod('sitewide_css') ?></style>
<?php if(get_theme_mod('c_javascript')) { ?>
  <script type="text/javascript"><?php echo get_theme_mod('c_javascript') ?></script>
<?php } ?>
<?php if(get_theme_mod('g_analytics')) { ?>
  <script type="text/javascript"><?php echo get_theme_mod('g_analytics') ?></script>
<?php } ?>

<?php
    function layout_load() {
        wp_enqueue_script( 'layoutjs', get_template_directory_uri() . '/scripts/layout.js', array() );
    }
    add_action( 'wp_enqueue_scripts', 'layout_load' );
    function eqcss_load() {
        wp_enqueue_script( 'eqcss', get_template_directory_uri() . '/scripts/EQCSS.min.js', array() );
    }
    add_action( 'wp_enqueue_scripts', 'eqcss_load' );
?>

<?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<?php include (get_template_directory().'/options/visibility.php'); ?>

<div id="header">
	<?php include (get_template_directory().'/head.php'); ?>
</div>

<?php global $uunibar; if($uunibar == TRUE) { ?>

	<div id="upper_unibar">
		<div id="upper_unibar_content">
			<?php if ( is_active_sidebar( 'uub' ) ) : ?>
				<?php dynamic_sidebar( 'uub' ); ?>
			<?php endif; ?>
		</div>
	</div>

<?php } ?>
