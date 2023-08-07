<?php get_header(); ?>
<div class="left">
    <?php if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <h2 class="post-title"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
            <div class="blogimg">
                <?php the_post_thumbnail('single-blog-img'); ?>
                <div class="clearfix"></div>
            </div>
            <div class="blog-main">
                <div class="blogfullTxt">
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
                <p>Published on
                    <?php the_time('M j,Y'); ?> <br> by
                    <?php the_author_posts_link() ?>
                </p>
                <p> Categorized as
                    <?php the_category(', '); ?>
                </p>
                <?php the_tags('<ul class="taglink"><li>Tags :</li><li>', ',</li><li>', '</li></ul>'); ?>

                <?php if (comments_open() || get_comments_number()) {
                    comments_template();
                } ?>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
        </p>
    <?php endif; ?>
    <h2 class="post-title">
        <span class="post-prev-link">
            <?php previous_post_link(); ?>
        </span>

        <span class="post-next-link">
            <?php next_post_link(); ?>
        </span>

        </span>
    </h2>
</div>