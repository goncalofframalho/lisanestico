
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="row post-<?php the_ID(); ?>" <?php post_class('cf post-project'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                    <div class="title">
                        <?php echo get_post_meta($post->ID, 'project_name', true); ?>
                    </div>

                    <div class="text">
                        <?php the_content(); ?>
                    </div>

                    <div class="areas">
                        <?php echo get_post_meta($post->ID, 'project_areas', true); ?>
                    </div>

                    <div class="link">
                        <a href="<?php echo get_post_meta($post->ID, 'project_link', true); ?>">
                            <?php echo get_post_meta($post->ID, 'project_link_name', true); ?>
                        </a>
                    </div>

                    <div class="media">
                        <?php
                        $pictures = get_post_meta($post->ID, 'image_gallery', false);
                        foreach ($pictures as $picture): ?>
                            <div class="image">
                                <img src="<?php echo $picture['guid'] ?>" />
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>

                    <?php //the_meta(); ?>

                </section> <?php // end article section ?>

              </article> <?php // end article ?>

        <div class="row header pagination-desktop">

            <div class="hello col-xs-4">
            <?php
                $prev_post = get_adjacent_post(false, '', true);
                if(!empty($prev_post)) {
                    echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">- previous project</a>';
                }
            ?>
            </div>
            <div class="topscroll col-xs-4 text-center">
                <img onclick="gototop();" src="<?php echo get_template_directory_uri(); ?>/library/images/scroll-top.svg" />
            </div>
            <div class="contact col-xs-4 text-right">
            <?php
                $next_post = get_adjacent_post(false, '', false);
                if(!empty($next_post)) {
            echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">next project -</a>';
                }
            ?>
            </div>
        </div>

        <div class="row header pagination-mobile">

            <div class="hello col-xs-6">
            <?php
                $prev_post = get_adjacent_post(false, '', true);
                if(!empty($prev_post)) {
                    echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">- previous</a>';
                }
            ?>
            </div>
            <div class="contact col-xs-6 text-right">
            <?php
                $next_post = get_adjacent_post(false, '', false);
                if(!empty($next_post)) {
            echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">next -</a>';
                }
            ?>
            </div>
            <div class="topscroll col-xs-12 text-center">
                <img onclick="gototop();" src="<?php echo get_template_directory_uri(); ?>/library/images/scroll-top.svg" />
            </div>
        </div>
