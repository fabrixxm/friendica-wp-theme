<?php get_header(); ?>
<div class="row">
    <div class="8u 12u$(medium)">
        <header class="align-center">
            <?php
            if ( is_day() ) { printf( "<h2>%s</h2><p>%s</p>", get_the_time( get_option( 'date_format' ) ), __( 'Daily Archives', 'friendica' ) ); }
            elseif ( is_month() ) { printf( "<h2>%s</h2><p>%s</p>", get_the_time( 'F Y' ), __( 'Monthly Archives', 'friendica' ) ); }
            elseif ( is_year() ) { printf( "<h2>%s</h2><p>%s</p>", get_the_time( 'Y' ), __( 'Yearly Archives', 'friendica' ) ); }
            else {  printf( "<h2>%s</h2>",__( 'Archives', 'friendica' ) ); }
            ?>
		</header>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
