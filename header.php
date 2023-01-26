<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Paul_Browde
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- bootstrap stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bootstrap/bootstrap.css">

	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/2d0546a192.js" crossorigin="anonymous"></script>

	<!-- social meta -->
	<?php get_template_part('template-sitewide/social', 'meta') ?>

	<?php wp_head(); ?>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8DNVFCJ9RW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8DNVFCJ9RW');
</script>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php echo get_template_part('template-sitewide/content', 'loading'); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'paul-browde' ); ?></a>


<?php echo get_template_part('template-sitewide/content', 'header') ?>

<?php if(!is_front_page()  &&  !is_404()){echo get_template_part('template-sitewide/content', 'pagetitles');} ?>