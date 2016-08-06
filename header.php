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

<style><?php include (get_template_directory().'/options/style.php'); echo get_theme_mod('sitewide_css') ?></style>
<?php if(get_theme_mod('c_javascript')) { ?>
  <script type="text/javascript"><?php echo get_theme_mod('c_javascript') ?></script>
<?php } ?>
<?php if(get_theme_mod('g_analytics')) { ?>
  <script type="text/javascript"><?php echo get_theme_mod('g_analytics') ?></script>
<?php } ?>

<?php
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
    <?php global $header1; if($header1 == TRUE) { ?>
        <div id="h1_wrapper">
        </div>
    <?php } ?>
    
    <?php global $header2; if($header2 == TRUE) { ?>
        <div id="h2_wrapper">
        </div>
    <?php } ?>
    
    <?php global $header3; if($header3 == TRUE) { ?>
        <div id="h3_wrapper">
        </div>
    <?php } ?>
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