<?php get_header(); ?>

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

            <div class="post" id="post-<?php the_ID(); ?>">

                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            		<p class="postmetadata">
                    <?php /*
						<?php _e('Filed under&#58;'); ?> <?php the_category(', '); ?> <?php _e('by'); ?> <?php the_author(); ?> <?php _e('on'); ?> <?php the_time('l, F j, Y'); ?> <?php the_tags(' | Social tagging: ',' > '); ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                    */ ?>
						<?php the_time('l, F j, Y'); ?> <?php the_tags(' | Social tagging: ',' > '); ?>
				    </p>
				    <hr class="funkyhr">
                    <div class="entry">

                    <?php the_content(); ?>
                    <?php wp_link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>
                    <?php edit_post_link('Edit','<p>','</p>'); ?>

                </div>

            </div>



        <?php endwhile; ?>

        <?php else: ?>

            <div class="post">
                <h2><?php _e('Not Found'); ?></h2>
            </div>

        <?php endif; ?>

    <?php get_footer(); ?>