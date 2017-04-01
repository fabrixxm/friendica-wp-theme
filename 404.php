<?php get_header(); ?>
<div class="row">
    <div class="8u 12u$(medium)">
        <header class="align-center">
            <h2><?php _e( 'Not Found', 'friendica' ); ?></h2>
			<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'friendica' ); ?></p>
		</header>
        <?php get_search_form(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
