<?php
/*
 Template Name: Для кого
 */
?>

<?php
get_header()
?>
<section class="main">

    <h1>Для кого этот движ?</h1>
    <p>Это всё предназначено для ровных пацанов и прочих серьезных ребят.</p>

<div class="for">

    <div class="for_item">
        <img class="for_image" src="<?php the_field('for_1_image'); ?>">
        <h2 class="for_title"><?php the_field('for_1_title'); ?></h2>
        <p class="for_description"><?php the_field('for_1_description'); ?></p>
    </div>

    <!--    --><?php //var_dump(get_field('for_1_image')); echo the_ID(); ?>

    <div class="for_item">
        <img class="for_image" src="<?php the_field('for_2_image'); ?>">
        <h2 class="for_title"><?php the_field('for_2_title'); ?></h2>
        <p class="for_description"><?php the_field('for_2_description'); ?></p>
    </div>

    <div class="for_item">
        <img class="for_image" src="<?php the_field('for_3_image'); ?>">
        <h2 class="for_title"><?php the_field('for_3_title'); ?></h2>
        <p class="for_description"><?php the_field('for_3_description'); ?></p>
    </div>

</div>
</section>
<?php
get_footer();
?>


