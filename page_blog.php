<?php get_header() ?>
    <?php
        /* Template Name: blog */ 
    ?>

<section class="blog">
    <div class="blog_txt">
        <p class="blog_txt-max"><?php the_title(); ?></p>
        <a class="blog_txt-line">/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\</a>
        <a class="blog_txt-min"><?php the_content(); ?></a>
    </div>
    <div class="blog_image"><img src="http://wp-shop/wp-content/uploads/2022/02/Image.png"></div>
</section>
<section class="blog">
    <div class="container">
        <div class="blog_block">
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img-2');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img-3');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img-4');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img-5');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img-6');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img-7');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img-8');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
            <div class="blog_block_content">
                <?php 
                    $image = get_field('blog_img-9');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="blog_block_content_txt-max"><?php the_field('blog_txt-max-1'); ?></p>
                <p class="blog_block_content_date">By Admin / <?php the_field('blog_date'); ?></p>
                <p class="blog_block_content_txt-min"><?php the_field('blog_txt-min-1'); ?></p>
                <button class="container-caruosel-button">Read More</button>
            </div>
        </div>
    </div>
</section>
<!-- <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true" ]'); ?> -->
<?php get_footer() ?>

