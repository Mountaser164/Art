<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <?php wp_nav_menu( array( 'theme_location' => 'categories-filter-menu', 'menu_class' => 'categories-filter' ) ); ?>
    <h1><?php the_title(); ?></h1>

    <div>
        <?php the_content();?>
    </div>
</div>

<?php get_footer(); ?>

<!-- هذ التصميم لعرض صفحة قائمة بوستات يعني لعرض اللوحات الموجودة مثلا في سنة 2 the first home page او اللوحات الموجودة في سنة 2015 -->