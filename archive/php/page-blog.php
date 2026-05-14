<?php
/*
Template Name: Blog Page
*/
get_header();
?>

<h2>Latest from the Blog</h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 35)); ?></p>
    </article>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
