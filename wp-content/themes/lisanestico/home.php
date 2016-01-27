<?php get_header(); ?>

<?php query_posts('p=23'); ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="row phrase">
        <div class="col-xs-12 top-phrase">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>

<div class="row projects-list">
    <div class="col-xs-12 area-label">
        - projects
    </div>
<?php
    $query = new WP_Query( array('post_type' => 'project', 'posts_per_page' => 99 ) );
    while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="col-xs-12 col-sm-6 col-lg-4 project">
        <div class="title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </div>
    </div>
<?php wp_reset_postdata(); ?>
<?php endwhile; ?>
</div>

<?php query_posts('p=25'); ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="row phrase">
        <div class="col-xs-12 middle-phrase">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile;?>

<div class="row menus">
    <div class="col-sm-4 at">
        <div class="area-label">- I worked at</div>
        <?php $walker = new Menu_With_Description; ?>
        <?php wp_nav_menu( array( 'theme_location' => 'atmenu', 'menu_class' => 'nav-menu', 'walker' => $walker ) ); ?>
    </div>
    <div class="col-sm-4 for">
        <div class="area-label">- I worked with&amp;for</div>
        <?php wp_nav_menu( array( 'theme_location' => 'formenu', 'menu_class' => 'nav-menu' ) ); ?>
    </div>
    <div class="col-sm-4 on">
        <div class="area-label">- stalk me on</div>
        <?php wp_nav_menu( array( 'theme_location' => 'onmenu', 'menu_class' => 'nav-menu' ) ); ?>
    </div>
</div>

<?php get_footer(); ?>
