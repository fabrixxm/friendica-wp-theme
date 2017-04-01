<?php get_header(); ?>
<?php the_post(); ?>
<div class="row">
    <div class="8u 12u$(medium)">
        <header class="align-center">
            <h2><?php the_author_link(); ?></h2>
			<p><?php _e( 'Author Archives', 'friendica' ); ?></p>
		</header>

        <?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<p class="archive-meta">' . get_the_author_meta( 'user_description' ) . '</p>' ); ?>
        <?php rewind_posts(); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
        <?php endwhile; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </div>
    <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
