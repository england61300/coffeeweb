<?php
get_header();
?>

<section class="error-404 not-found">
    <h1><?php esc_html_e('Page not found', 'brew-better-daily'); ?></h1>
    <p><?php esc_html_e('Sorry, we could not find the page you were looking for.', 'brew-better-daily'); ?></p>
    <?php get_search_form(); ?>
</section>

<?php
get_footer();
