<?php
/*
 Template Name: Наши спонсоры
 */
?>

<?php
get_header()
?>
<section class="main">

    <h1>Наши спонсоры</h1>
    <p>По просьбе BBC Music более сотни музыкальных критиков из разных стран выбрали лучшие, по их мнению, песни в жанре хип-хоп. На основе их выбора Би-би-си составила рейтинг из 26 позиций.
        В опросе Би-би-си приняли участие 108 критиков, артистов и других экспертов музыкальной индустрии из 15 стран: США, Канады, Британии, Германии, России, Китая, Индии, Японии, Новой Зеландии, ЮАР, Кении, Нигерии и Колумбии. От России в опросе участвовал Андрей Никитин, главный редактор портала о хип-хопе The Flow.
        Все опрошенные выбрали по пять песен, которые считают лучшими в истории хип-хопа. Рейтинг был составлен на основе получившегося списка (полностью этот список можно посмотреть здесь).</p>


    <div class="slider_sponsors_page">
        <?php

        // параметры по умолчанию
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
            <div class="slider_item">
                <h3><?php the_title() ?></h3>
                <a href="<?php echo get_permalink() ?>">
                    <img class="slider_img" src="<?php the_field('slider_img'); ?>">
                </a>

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


