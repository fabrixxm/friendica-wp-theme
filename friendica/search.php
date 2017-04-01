<?php get_header(); ?>
    <div class="row">
        <div class="8u 12u$(medium)">
            <?php if ( have_posts() ) : ?>

                <header class="align-center">
                    <h2>"<?php echo get_search_query(); ?>"</h2>
        			<p><?php _e( 'Search Results', 'friendica' ) ?></p>
        		</header>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'entry' ); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <header class="align-center">
                    <h2><?php _e( 'Nothing Found', 'friendica' ); ?></h2>
                    <p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'friendica' );  ?></p>
                </header>

                <?php get_search_form(); ?>
            <?php endif; ?>
            <?php get_template_part( 'nav', 'below' ); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
