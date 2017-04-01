<?php get_header(); ?>
<div class="row">
    <div class="8u 12u$(medium)">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="align-center">
                <h2 class="entry-title"><?php the_title(); ?></h2> <?php edit_post_link(); ?>
            </header>
            <section class="entry-content">
                <?php if ( has_post_thumbnail() ) { ?>
                    <span class="image left"><?php the_post_thumbnail();  ?></span>
                <?php } ?>
                <?php the_content(); ?>
                <div class="entry-links"><?php wp_link_pages(); ?></div>
            </section>
        </article>
            <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
