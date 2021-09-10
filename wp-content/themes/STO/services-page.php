<?php
/*
Template Name: Страница услуг
*/
get_header();

?>
    <main class="service">
        <section>
            <?=renderFirstSection('', "Sample Maxima title");?>
        </section>
            <?=renderServicesPage('', '');?>
    </main>
<?php get_footer();
