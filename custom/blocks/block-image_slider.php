<?php
/**
 * Block Name: Image Slider
 */
 
?> 
<?php 

$images = get_field('blocco_img_slider');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul class="block_image_slider">
        <?php foreach( $images as $image ): ?>
            <li>
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<style>
.block_image_slider{
    padding-left:0;
    margin-left:0;
    margin-top: 3rem;
    margin-bottom: 3rem;
}
.block_image_slider li img{
    min-width: 100%;
    height: auto;
}
</style>
