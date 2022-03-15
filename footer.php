<footer>




    <div class="footer">
        <div class="footer_item">
            <h3><?php bloginfo('name '); ?></h3>
            <nav class="">
            <?php
            wp_nav_menu( [
                'menu'            => 'Footer',
                'container'       => false,
                'menu_class'      => 'footer_nav',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '<ul class="footer_nav">%3$s</ul>',
                'depth'           => 1,
            ] );
            ?>
            </nav>
        </div>



        <div class="footer_item">
            <h3>Contacts</h3>
            <div><?php the_field('contacts_name',88); ?></div>
            <div><?php the_field('contacts_adress',88); ?></div>
            <div><a href="tel:<?php the_field('contacts_phone', 88); ?>"><?php the_field('contacts_phone', 88); ?></a></div>
                <div> <a href="<?php the_field('contacts_mail', 88); ?>" class="header__contacts-mail"><?php the_field('contacts_mail', 88); ?></a></div>
        </div>

        <div class="footer_item">
            <h3>Follow us</h3>
        </div>
    </div>
    <div class="copyright">© 2022 Все права защищены</div>
</footer>

<?php
wp_footer();
?>

</body>
</html>
