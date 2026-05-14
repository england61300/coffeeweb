<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="wrap">
        <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <nav>
            <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'fallback_cb' => false]); ?>
        </nav>
    </div>
</header>
<main class="site-main wrap">
