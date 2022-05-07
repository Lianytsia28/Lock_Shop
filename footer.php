<?php 
			$page_id = wc_get_page_id( 'shop' );
     ?>
<footer>
    <section class="payment">
        <div class="container">
            <div class="payment_block">
                <p><?php the_field('text_footer', $page_id); ?><p>
                <div><?php 
                    $image = get_field('footer_img-11', $page_id);
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div> 
                <div><?php 
                    $image = get_field('footer_img-12');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div> 
                <div><?php 
                    $image = get_field('footer_img-13');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div>
                <div><?php 
                    $image = get_field('footer_img-14');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div>
                <div><?php 
                    $image = get_field('footer_img-15');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div>
                <div><?php 
                    $image = get_field('footer_img-16');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div> 
                <div><?php 
                    $image = get_field('footer_img-17');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div> 
                <div><?php 
                    $image = get_field('footer_img-18');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div> 
                <div><?php 
                    $image = get_field('footer_img-19');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div>
                <div><?php 
                    $image = get_field('footer_img-20');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div> 
                <div><?php 
                    $image = get_field('footer_img-21');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?></div> 
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="footer_block">
                <div class="footer_block-content"> 
                    <a href="#"><?php the_field('customer_service', $page_id); ?></a>
                </div>
                <div class="footer_block-content"> 
                    <a href="#"><?php the_field('information' , $page_id); ?></a>
                </div>
                <div class="footer_block-content"> 
                    <a href="#"><?php the_field('campaigns' , $page_id); ?></a>
                </div>
                <div class="footer_block-content-stores"> 
                    <a href="#"><?php the_field('stores', $page_id); ?></a>
                </div>
                <div class="footer_block-content-social"> 
                    <p><?php the_field('social', $page_id); ?></p>
                    <div><?php 
                        $image = get_field('social_img-1', $page_id);
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?></div>
                    <div><?php 
                        $image = get_field('social_img-2', $page_id);
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?></div>
                    <div><?php 
                        $image = get_field('social_img-3', $page_id);
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?></div>
                    <div><?php 
                        $image = get_field('social_img-4', $page_id);
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?></div>
                    <div><?php 
                        $image = get_field('social_img-5', $page_id);
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?></div>
                    <div><?php 
                        $image = get_field('social_img-6', $page_id);
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?></div>
                </div>
                <div class="footer_block-content"> 
                    <?php 
                        $image = get_field('100%', $page_id);
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>    
        </div>
        <div class="footer_block-bottom">
            <div class="container">
                <div class="footer_block-bottom-content">
                    <div class="footer_block-bottom-content-l">
                        <a href="#"><?php the_field('bottom_left', $page_id); ?></a>
                    </div>
                    <div class="footer_block-bottom-content-r">
                        <a href="#"><?php the_field('bottom_right', $page_id); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</footer>
    <?php wp_footer() ?>
</body>
</html>