<?php

/**
 * Invest Profile Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'invprofile-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'invprofile__block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('inv_block_title');
$image = get_field('inv_block_image');
$content = get_field('inv_block_content');
$side = get_field('inv_block_side');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php if ($side == 'right') : ?> rightside <?php endif; ?>"  >
<div class="invprofile__block-header">
<h4 class="invprofile__block-title">
    <?php echo $title ?>
</h4>
<?php echo $content ?>

</div>
<div class="invprofile__block-image">
<?php echo wp_get_attachment_image( $image, 'full' ); ?>
</div>

</div>