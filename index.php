<?php
/**
 * BRD Pest Solutions — Fallback Index Template
 * WordPress requires this file. Pages use dedicated templates.
 */

get_header();
?>

<div class="container" style="padding-top: var(--space-2xl); padding-bottom: var(--space-2xl);">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div style="margin-top: var(--space-lg);">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
