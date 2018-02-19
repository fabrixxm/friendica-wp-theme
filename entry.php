<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php if ( has_post_thumbnail() ) { ?>
            <span class="image right"><?php the_post_thumbnail('thumbnail');  ?></span>
        <?php } ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2> <?php edit_post_link(); ?>
        <?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
    </header>
    <?php
    if (is_home() && is_sticky() ) {
        // only title for sticky in blog home
    } else {
        get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) );
        if ( !is_search() ) get_template_part( 'entry-footer' );
    }
    ?>
</article>
<hr style="clear:both;">
