<?php get_header(); ?>

<div id="content">
    <aside id="search">
        <?php get_search_form(); ?>
    </aside><!-- #search -->
    <?php get_sidebar(); ?>
    <div id="right">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <div class="wp-block-post">
                    <div id="post-<?php echo $post->ID; ?>">
                        <h2><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
                        <p class="wp-block-para">
                            <?php the_excerpt(); ?>
                        <p>Published on
                            <?php the_time('M j,Y'); ?> <br> by
                            <?php the_author_posts_link() ?>
                            <?php edit_post_link(); ?>
                        <p> Categorized as
                            <?php the_category(', '); ?>
                        </p>
                        </p>

                        <?php the_tags('<ul class="taglink"><li>Tagged :</li><li>', ',</li><li>', '</li></ul>'); ?>

                    </div>
                    <hr>
                </div>
                <div class="clearfix"></div>
            <?php endwhile; ?>

            <div class="nav-previous alignleft">
                <?php next_posts_link('<< Older posts'); ?>
            </div>
            <div class="nav-next alignright">
                <?php previous_posts_link('Newer posts >>'); ?>
            </div>

            <div class="clearfix"></div>
        <?php else: ?>
            <p>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
        <?php endif; ?>

    </div>
</div>
<?php get_footer(); ?>