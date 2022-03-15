<?php
get_header()
?>


<main class="main">
    <section class="banner">
        <img src="<?php the_field('banner'); ?>">
    <h1> <?php the_field('banner_title'); ?></h1>
    <p><?php the_field('banner_text'); ?></p>
    </section>


    <section class="for">
        <div class="for_item">
            <img class="for_image" src="<?php the_field('for_1_image',92); ?>">
            <h2 class="for_title"><?php the_field('for_1_title',92); ?></h2>
            <p class="for_description"><?php the_field('for_1_description',92); ?></p>
        </div>

        <div class="for_item">
            <img class="for_image" src="<?php the_field('for_2_image',92); ?>">
            <h2 class="for_title"><?php the_field('for_2_title',92); ?></h2>
            <p class="for_description"><?php the_field('for_2_description',92); ?></p>
        </div>

        <div class="for_item">
            <img class="for_image" src="<?php the_field('for_3_image',92); ?>">
            <h2 class="for_title"><?php the_field('for_3_title',92); ?></h2>
            <p class="for_description"><?php the_field('for_3_description',92); ?></p>
        </div>

    </section>



    <section class="slider_feedbacks">
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
    </section>



    <section class="promo-video">
        <h2>Promo video</h2>
        <?php the_field('video'); ?>
    </section>

    <section class="sponsors">
    <h2>Наши спонсоры</h2>
    <div id="gallery">
        <div class="buttons">
            <button class="button" id="prev">◁</button>
        </div>
        <div class="photos">
            <?php
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'sponsors',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
                    <img class="slider_img" src="<?php the_field('slider_img'); ?>">
                <?php
            }
            wp_reset_postdata(); // сброс
            ?>
        </div>
        <div class="buttons">
            <button id="next" class="button">▷</button>
        </div>
    </div>
    </section>


</main>
<?php
get_footer();
?>


<!--<div class="slider_sponsors">-->
<!--    --><?php
//
//    // параметры по умолчанию
//    $my_posts = get_posts( array(
//        'numberposts' => -1,
//        'category_name'    => 'sponsors',
//        'orderby'     => 'date',
//        'order'       => 'DESC',
//        'post_type'   => 'post',
//        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
//    ) );
//
//    foreach( $my_posts as $post ){
//        setup_postdata( $post );
//        ?>
<!--        <div class="slider_item">-->
<!--            <h3>--><?php //the_title() ?><!--</h3>-->
<!--            <img class="slider_img" src="--><?php //the_field('slider_img'); ?><!--">-->
<!--        </div>-->
<!--        --><?php
//    }
//
//    wp_reset_postdata(); // сброс
//
//    ?>
<!--</div>-->
