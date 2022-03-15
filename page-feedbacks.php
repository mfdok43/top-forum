<?php
/*
 Template Name: Наши отзывы
 */
?>

<?php
get_header()
?>
<section class="main">
    <h1>Наши отзывы</h1>
    <p>У нас довольно много клиентов которые довольны нашими отзывами</p>

<div class="slider_feedbacks">
    <?php

    // параметры по умолчанию
    $my_posts = get_posts( array(
        'numberposts' => -1,
        'category_name'    => 'feedbacks',
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    foreach( $my_posts as $post ){
        setup_postdata( $post );
        ?>
        <div class="slider_feedbacks_item">
            <img class="slider_feedbacks_img" src="<?php the_field('foto_avatar'); ?>">
            <div slider_feedbacks_description_item>
                <h3><?php the_title() ?></h3>
                <p class="for_description"><?php the_field('opisanie_otzyva'); ?></p>
            </div>
        </div>
        <?php
    }

    wp_reset_postdata(); // сброс

    ?>
</div>
</section>
<?php
get_footer();
?>


