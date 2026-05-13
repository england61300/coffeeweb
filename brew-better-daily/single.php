<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class('single-post'); ?>>
        <h1><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php else : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/brewing-gear-icon.svg'); ?>" alt="Brewing gear illustration">
        <?php endif; ?>
        <div class="entry-content"><?php the_content(); ?></div>
    </article>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
