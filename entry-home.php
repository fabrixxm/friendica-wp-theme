<article id="post-<?php the_ID(); ?>" <?php post_class("6u 12u$(medium)"); ?>>
<?php if (has_post_thumbnail()) {?>
    <div class="image fit">
        <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="Stack">
    </div>
<?php } ?>
<header>
<h3 class="entry-title">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
        <?php the_title(); ?>
    </a>
</h3>
<?php get_template_part( 'entry', 'meta' ); ?>
</header>
<?php get_template_part( 'entry', 'summary' ); ?>
<footer>
    <a href="<?php the_permalink(); ?>" class="button special">More</a>
</footer>
</article>
