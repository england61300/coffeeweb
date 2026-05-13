<?php
get_header();
?>

<h1><?php esc_html_e('Latest Posts', 'brew-better-daily'); ?></h1>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 35)); ?></p>
        </article>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>
<?php else : ?>
    <p><?php esc_html_e('No posts found.', 'brew-better-daily'); ?></p>
<?php endif; ?>

<?php
get_footer();
