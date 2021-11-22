<?php get_header(); while ( have_posts() ): the_post();?>
<?php $testimonialCity = get_field('small_top_header');
$position = get_field('slider_content');
?>

<section class="single-testimonial">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <h2 class="page-title"><?php echo the_title(); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col col-12">


					<?php if( $testimonialCity != "" ): ?>
						<span class="city"><?php echo $testimonialCity  ?></span>
					<?php endif; if( $position != '' ): ?>
						<span class="position"><?php echo $position ?></span>
					<?php endif; ?>
			
            </div>
        </div>

        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php endwhile; get_footer(); ?>