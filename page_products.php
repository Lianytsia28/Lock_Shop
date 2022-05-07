<?php get_header() ?>
    <?php
        /* Template Name: products */ 
    ?>
<section class="products">
    <div class="container">
        <div class="products_content">
            <div class="products-slider">
                <div class="products-slider_img">
                    <?php 
                    $image = get_field('products_slider-img1');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="products-slider_img_description">
                        <h1><?php the_field('products_title'); ?></h1>
                        <h2><?php the_field('products_price'); ?></h2>
                        <h3><?php the_field('products_description'); ?></h3>
                        <button>ADD TO CART +</button>
                    </div>
                </div>
                <div class="products-slider_img">
                    <?php 
                    $image = get_field('products_slider-img2');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="products-slider_img_description">
                        <h1><?php the_field('products_title'); ?></h1>
                        <h2><?php the_field('products_price2'); ?></h2>
                        <h3><?php the_field('products_description'); ?></h3>
                        <button>ADD TO CART +</button>
                    </div>
                </div>
                <div class="products-slider_img">
                    <?php 
                    $image = get_field('products_slider-img3');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="products-slider_img_description">
                        <h1><?php the_field('products_title'); ?></h1>
                        <h2><?php the_field('products_price3'); ?></h2>
                        <h3><?php the_field('products_description'); ?></h3>
                        <button>ADD TO CART +</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> 
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script type="text/javascript">jssor_1_slider_init();</script>
<script type="text/javascript"> 
<?php get_footer() ?>