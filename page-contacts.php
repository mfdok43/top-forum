<?php
/*
 Template Name: Как нас найти
 */
?>

<?php
get_header()
?>
<section class="main">
    <h1>Как нас найти?</h1>
    <p>Нас найти очень просто. Нужно приехать на райночик и немножко пропетлять, можно спросить у местных например</p>

<img src="https://meget.kiev.ua/static/fck/images/novostroyki/726/2c44400dfed8defeeef71719b6481093.jpg">

<div>
    <div><?php the_field('contacts_name',); ?></div>
    <div><?php the_field('contacts_adress',); ?></div>
    <div><?php the_field('contacts_phone',); ?></div>
    <div><?php the_field('contacts_mail',); ?></div>
</div>
</section>
<?php
get_footer();
?>


