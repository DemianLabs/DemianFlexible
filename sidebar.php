<div class="sidebar">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
            <li id="search">
                <?php include(TEMPLATEPATH . '/searchform.php'); ?>
            </li>


            <li id="calendar"><h2><?php _e('Calendar'); ?></h2>
                <?php get_calendar(); ?>
            </li>


            <h2>Read about</h2>
            <?php wp_list_pages('depth=3&style=none&title_li='); ?>
            <br><br>

            <h2>Topics</h2>
                <?php
                    $args = array(
                    	'orderby'	=> 'name',
                    	'style'		=> 'none',
                    );
                    wp_list_categories( $args );
                ?>

            <li><h2><?php _e('Archives'); ?></h2>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
            </li>

            <br>



            	<h2>You should visit</h2>
                <?php wp_list_bookmarks('title_li=&categorize=0&before=&after='); ?>

            <li><h2><?php _e('Meta'); ?></h2>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </li>

        <?php endif; ?>

</div>
<br class="clear_float" />