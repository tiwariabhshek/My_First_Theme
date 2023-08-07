<?php get_header(); ?>

<div id="primary" class="content-area">
    <header class="page-header">
        <h1 class="page-title">
            <?php printf(esc_html__('Search Results for: %s', 'your-theme-textdomain'), '<span>' . get_search_query() . '</span>'); ?>
        </h1>
    </header>

    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
        <?php endwhile; ?>
        <?php the_posts_navigation(); ?>
    <?php else: ?>
        <p>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
    <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>