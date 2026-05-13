<?php
get_header();
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>
<?php else : ?>
    <p><?php esc_html_e('No posts found.', 'brew-better-daily'); ?></p>
<?php endif; ?>

<?php
get_footer();
