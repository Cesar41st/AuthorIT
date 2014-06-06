<?php
/**
Template Name: Nouveautes
 */
?>
<?php get_header(); ?>

<div id="nouveautes">

    <h2>NOUVEAUTES</h2>

    <?php
    $args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'orderby'=>'date','order' => 'DESC');
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div>
            <a id="id-<?php the_id(); ?>" class="portfolio-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_shop' );
                echo '<img src="'.$thumb['0'].'" class="img-responsive"/>';
                ?>
                <h3><?php the_title(); ?></h3>
            </a>
            <span class="price"><?php echo $product->get_price_html(); ?></span>
            <span class="add-to-cart"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
            </span>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>


</div>

<?php get_footer(); ?>