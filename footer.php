<footer class="footer">
    <div class="footer__container">
        <div class="footer__places">
            <div class="footer__places-header">
                <h5><?php the_field('footer_title', 'option') ?></h5>
            </div>
            <div class="footer__places-container">
                     <?php if( have_rows('footer_addresses', 'option') ): ?>
                            <?php while( have_rows('footer_addresses', 'option') ): the_row(); ?>
                <div class="footer__places-warsaw">
                    <div class="footer__places-title">
                        <p><?php echo get_sub_field('footer_address_place', 'option') ?></p>
                    </div>
                    <div class="footer__places-adresses">
                        <p><?php echo get_sub_field('footer_address_first_lane', 'option') ?> <br>
                        <?php echo get_sub_field('footer_address_nd_lane', 'option') ?><br>
                        <?php echo get_sub_field('footer_address_rd_lane', 'option') ?>
                    </p>
                    </div>
                    <div class="footer__places-phone">
                    <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                <p>Phone:</p>
                <?php else:  ?>
                    <span>Tel:</span>
                    <?php endif; ?>
                       
                        <p><?php echo get_sub_field('footer_phone_first_lane', 'option') ?></p>
                        <p><?php echo get_sub_field('footer_phone_nd_lane', 'option') ?></p>
                    </div>

                    <div class="footer__places-email">
                        <p><?php echo get_sub_field('footer_email_first_lane', 'option') ?></p>
                        <p><?php echo get_sub_field('footer_email_nd_lane', 'option') ?></p>
                    </div>


                </div>
                <?php endwhile; ?>
        <?php endif; ?>
            </div>

        </div>
        <div class="footer__menu">
            <div class="footer__menu-item industrial">
                <div class="footer__menu-title">
             
                    <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                        <h5>Business</h5>
                <?php else:  ?>
                    <h5>Firma</h5>
                    <?php endif; ?>
                </div>

                <?php    wp_nav_menu([
                              'theme_location'    => 'footer-menu-indus',
                              'menu_id'            => 'footer-menu-indus',
                              'container_class'   => 'footer__menu-list industrial',
                              'container_id'      => '',
                              'menu_class'        => 'footer__menu-ul',
        ]); ?>
                <div class="footer__menu-bottomcont">
                    <span>Copyright © 2021 </span>
                    <p>Mermaid Capital</p>
                </div>
            </div>

            <div class="footer__menu-item projects">
                <div class="footer__menu-title">
          
                    <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                        <h5>Projects</h5>
                <?php else:  ?>
                    <h5>Projekty</h5>
                    <?php endif; ?>
                </div>

                <?php    wp_nav_menu([
                              'theme_location'    => 'footer-menu-projects',
                              'menu_id'            => 'footer-menu-projects',
                              'container_class'   => 'footer__menu-list projects',
                              'container_id'      => '',
                              'menu_class'        => 'footer__menu-ul',
        ]); ?>
                <div class="footer__menu-bottomcont">
                <?php if (ICL_LANGUAGE_CODE=='en' ) : ?>
                    <span> Design and execution:</span>
                <?php else:  ?>
                    <span>Projekt i wykonanie:</span>
                    <?php endif; ?>
                 
                   <a href="https://whitetiger.pl/"><p>White Tiger</p></a> 
                </div>
            </div>
        </div>
</footer>
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>