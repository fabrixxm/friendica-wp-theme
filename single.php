<?php get_header(); ?>
<div class="row">
    <div class="8u 12u$(medium)">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below-single' ); ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
