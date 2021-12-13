<?php


get_header();

?>
<div class="main-background page">
<h1><?php echo get_the_title();?></h1>
<?php if( get_sub_field('header_options_background')): ?>
    <img src="<?php echo get_sub_field('header_options_background')?>" alt="">
    <?php endif; ?>
</div>

<section class="content" style="margin-top:300px"></section>
<?php 

the_content();

get_footer();
