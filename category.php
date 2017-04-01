<?php get_header(); ?>
<div class="row">
    <div class="8u 12u$(medium)">
        <header class="align-center">
            <h2><?php single_cat_title(); ?></h2>
            <p><?php _e( 'Category Archives', 'friendica' );  ?></p>
        </header>
        <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<p class="align-center">' . category_description() . '</p>' ); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
