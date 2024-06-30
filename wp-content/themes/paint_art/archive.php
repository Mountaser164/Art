<!-- هذ التصميم لعرض صفحة قائمة بوستات يعني لعرض اللوحات الموجودة مثلا في سنة 2014 او اللوحات الموجودة في سنة 2015 -->
<?php get_header(); ?>



<div class="container pt-5 pb-5">

<?php wp_nav_menu( array( 'theme_location' => 'categories-filter-menu', 'menu_class' => 'categories-filter' ) ); ?>
    <h1><?php single_cat_title(); ?></h1>



    <div class="row ">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-6 ">
            <div class="card">
                <div class="card-body">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class="w-100 post-image h-100%">
                    <?php endif; ?>
                    <!-- <h3><?php the_title() ?></h3>
                    <?php the_excerpt();?> -->
                    <a href="<?php the_permalink()?>" class="btn btn-success mt-3">Read More</a> 
                </div>
            </div>
        </div>
    
    <?php endwhile; endif;?>
    </div>
</div>

<?php get_footer(); ?>