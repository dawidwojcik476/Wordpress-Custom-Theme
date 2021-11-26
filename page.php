<?php


get_header();

?>
<div class="main-background page">
<h1><?php echo get_the_title();?></h1>
    <img src="<?php echo get_template_directory_uri(); ?>/public/images/ofirmieback.png" alt="">
</div>

<section class="content" style="margin-top:300px"></section>
<?php 

the_content();

get_footer();
