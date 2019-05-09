# gutenberg-slick-slider-block
A simple slider for Wordpress Gutenberg Block Integration

# requirements
Wordpress version : Up to 5.0
ACF version: 5.8.0

# Steps for install :

- Copy the contents of functions.php and paste in your function.php
- Copy the folders strucuture of "custom" folders, and paste in your theme root ( if you just have a custom folder, merge them )
- Add to your theme custom js, the necessary js for made work the slider ( you find in custom.js )
- Go on backend navigate to ACF create a new Field group, and add the a "gallery" field. ( in my case i've call it "blocco_img_slider" , if you change the name rimemebr to update in "custom/blocks/block-image_slider.php" )
- GO on post or page and add a new block and under the category "Layout Elements" you find your new blok
