<?php
/*
Template Name: Szablon Strefa Inwestorska
Template Post Type: post, page, event
*/


get_header();

?>
<div class="main-background page">
    <h1><?php echo get_the_title();?></h1>
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/ofirmieback.png" alt="">
</div>

<section class="zone" style="margin-top:290px">

    <section class="zone__coop">
        <div class="zone__coop-header">
            <h1>Współpraca</h1>
            <p>Mermaid Capital działa w charakterze Inwestora Zastępczego i zapewnia kompleksową obsługę procesu
                inwestycyjnego, konsekwentnie realizując uzgodniony z Inwestorami plan realizacji projektu. Zadowolenie
                naszych Inwestorów oraz dobre wzajemne relacje są jednym z naszych priorytetów, dlatego zawsze dbamy o
                przepływ informacji i regularne raportowanie o stanie realizacji przedsięwzięć.</p>
        </div>
        <div class="zone__coop-investors">
            <p>Do naszych największych inwestorów zaliczają się:</p>
            <div class="zone__coop-investorslist">
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Anwim.jpg"
                            alt="Logo Klienta">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Anwim.jpg"
                            alt="Logo Klienta">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Anwim.jpg"
                            alt="Logo Klienta">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Anwim.jpg"
                            alt="Logo Klienta">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Anwim.jpg"
                            alt="Logo Klienta">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Anwim.jpg"
                            alt="Logo Klienta">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/Anwim.jpg"
                            alt="Logo Klienta">
                    </li>
                </ul>
            </div>
            <p>Poza dużymi funduszami inwestycyjnymi kapitał w naszych inwestycjach lokują mniejsze prywatne fundusze
                oraz prywatni inwestorzy.</p>
        </div>
    </section>
    <section class="zone__realization">
    <div class="zone__realization-header">
            <h1>Realizacja</h1>
            <p>Do każdego realizowanego projektu podchodzimy indywidualnie i merytorycznie, staramy się rozpoznać wszystkie możliwe scenariusze rozwoju projektu i podążamy za najbardziej optymalnym rozwiązaniem. Istnieje szereg zasad, którymi kierujemy się planując i realizując przedsięwzięcie inwestycyjne. Na poniższym schemacie prezentujemy ogólny przyjęty przez naszą firmę plan działania, zapewniający optymalizację wszystkich procesów związanych z inwestycją deweloperską.</p>
        </div>

        <div class="zone__realization-track">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/AnalizaMozliwosciFinansowych.png" alt="">
                    <div class="zone__realization-track-content">
                        <h4>
                        Pozyskiwanie finansowania zewnętrznego
                        </h4>
                        <p>
                        Posiadając odpowiedni poziom kapitału własnego, ubiegamy się o kredyt inwestycyjny celem pokrycia pozostałej części kosztów. Zielone światło ze strony banku oznacza dla nas moment rozpoczęcia robót budowlanych.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/AnalizaMozliwosciFinansowych.png" alt="">
                    <div class="zone__realization-track-content">
                        <h4>
                        Analiza możliwości inwestycyjnych
                        </h4>
                        <p>
                        Przed podjęciem decyzji o realizacji inwestycji wykonujemy pełne due dilligence danej nieruchomości, obejmujące weryfikację stanu prawnego, analizę planów miejscowych, lokalizacji oraz innych specyficznych cech danego obiektu. Jednocześnie na bieżąco analizujemy obecną i prognozowaną sytuację na rynku nieruchomości. Na podstawie zebranych informacji przyjmujemy odpowiednie założenia, dokonujemy obliczeń, oceniamy ryzyko, w rezultacie otrzymując projekt inwestycji, który następnie prezentujemy naszym inwestorom.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/AnalizaMozliwosciFinansowych.png" alt="">
                    <div class="zone__realization-track-content">
                        <h4>
                        Pozyskiwanie equity
                        </h4>
                        <p>
                        Po zbadaniu projektu, modelu finansowego oraz prognozowanych stóp zwrotu Inwestorzy decydują o zostaniu Partnerami w przedsięwzięciu. Uzyskany w ten sposób kapitał własny stanowi ustaloną część sumy wszystkich kosztów związanych z inwestycją.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/AnalizaMozliwosciFinansowych.png" alt="">
                    <div class="zone__realization-track-content">
                        <h4>
                        Pozyskiwanie equity
                        </h4>
                        <p>
                       
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</section>
<?php 

the_content();

get_footer();