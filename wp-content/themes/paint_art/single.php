<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <h1><?php the_title(); ?></h1>

    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" class=" post-">
                    <?php endif; ?>

    <div class = "mt-3">
        <?php the_content();?>
    </div>
</div>

<?php get_footer(); ?>




<!-- هذ التصميم لعرض صفحة قائمة بوستات يعني لعرض اللوحات الموجودة مثلا في سنة 2014 او اللوحات الموجودة في سنةcontent red 2015 -->
