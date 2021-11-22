<footer class="footer">
    <div class="footer__container">
     <div class="footer__places">
         <div class="footer__places-header">
<h5>MERMAID Capital Sp. z o.o</h5>
         </div>
         <div class="footer__places-container">
         <div class="footer__places-warsaw">
             <div class="footer__places-title">
                 <p>Centrala w Warszawie</p>
             </div>
             <div class="footer__places-adresses">
                 <p>ul. Płomyka 41 <br>
                    02-490 Warszawa</p>
             </div>
             <div class="footer__places-phone">
                 <span>Tel:</span> <p>+48 22 375 15 55</p>
             </div>

             <div class="footer__places-email">
                 <p>biuro@mermaid.pl</p>
             </div>
             

</div>
<div class="footer__places-lodz">
             <div class="footer__places-title">
                 <p>Oddział w Łodzi</p>
             </div>
             <div class="footer__places-adresses">
                 <p>Biurowiec Cross Point A <br>
al. Śmigłego Rydza 20<br>
93-281 Łódź <br></p>
             </div>
             <div class="footer__places-phone">
                 <span>Tel:</span> <p>+48 42 251 60 02</p>
             </div>

             <div class="footer__places-email">
                 <p>lodz@mermaid.pl <br>
cpl@mermaid.pl</p>
             </div>
             

            </div>
         </div>
        
     </div>
     <div class="footer__menu">
         <div class="footer__menu-item industrial">
             <div class="footer__menu-title">
             <h5>Firma</h5>
         </div>
         
         <?php    wp_nav_menu([
                              'theme_location'    => 'footer-menu-indus',
                              'menu_id'            => 'footer-menu-indus',
                              'container_class'   => 'footer__menu-list industrial',
                              'container_id'      => '',
                              'menu_class'        => 'footer__menu-ul',
        ]); ?>
<div class="footer__menu-bottomcont">
    <span>Copyright © 2021 </span><p>Mermaid Capital</p>
</div>
         </div>

         <div class="footer__menu-item projects">
             <div class="footer__menu-title">
             <h5>Projekty</h5>
         </div>
         
         <?php    wp_nav_menu([
                              'theme_location'    => 'footer-menu-projects',
                              'menu_id'            => 'footer-menu-projects',
                              'container_class'   => 'footer__menu-list projects',
                              'container_id'      => '',
                              'menu_class'        => 'footer__menu-ul',
        ]); ?>
<div class="footer__menu-bottomcont">
    <span>Projekt i wykonanie:</span><p>White Tiger</p>
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