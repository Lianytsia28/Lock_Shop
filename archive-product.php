<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );


?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

	<?php 
			$page_id = wc_get_page_id( 'shop' );
     ?>
<section class="products-s">
    <div class="container">
        <div class="products-s_content">
            <div class="products-slider">
                <div class="products-slider_img">
                    <?php  
                    $image = get_field('products_slider-img1', $page_id);
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="products-slider_img_description">
                        <h1><?php the_field('products_title', $page_id); ?></h1>
                        <h2><?php the_field('products_price', $page_id); ?></h2>
                        <h3><?php the_field('products_description', $page_id); ?></h3>
                        <button>ADD TO CART +</button>
                    </div>
                </div>
                <div class="products-slider_img">
                    <?php 
                    $image = get_field('products_slider-img2', $page_id);
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="products-slider_img_description">
                        <h1><?php the_field('products_title', $page_id); ?></h1>
                        <h2><?php the_field('products_price2', $page_id); ?></h2>
                        <h3><?php the_field('products_description', $page_id); ?></h3>
                        <button>ADD TO CART +</button>
                    </div>
                </div>
                <div class="products-slider_img">
                    <?php 
                    $image = get_field('products_slider-img3', $page_id);
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="products-slider_img_description">
                        <h1><?php the_field('products_title', $page_id); ?></h1>
                        <h2><?php the_field('products_price3', $page_id); ?></h2>
                        <h3><?php the_field('products_description', $page_id); ?></h3>
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



<!-- <div class="sid">
    <?php if ( is_active_sidebar( 'sidebar-post-single' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-post-single' ); ?>
    <?php endif; ?>
</div> -->

<div class="container">
    <div class="sid">
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );
    do_action( 'woocommerce_after_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' ); 
		}
        
	}

	woocommerce_product_loop_end();
    
    do_action( 'woocommerce_after_shop_loop' );
    

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	// do_action( 'woocommerce_after_shop_loop' );
    
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}
if ( is_active_sidebar( 'sidebar-post-single' ) ) : ?>
   <div class="a12"> <?php dynamic_sidebar( 'sidebar-post-single' ); ?>
<?php endif; 



/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */

do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );

 get_footer() ?>
