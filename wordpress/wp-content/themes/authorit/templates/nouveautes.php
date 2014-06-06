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
        <div class="col-lg-3 col-xs-12  col-sm-6 col-md-3 nouveautes_product">
            <a id="id-<?php the_id(); ?>" class="portfolio-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_shop' );
                echo '<img src="'.$thumb['0'].'" class="img-responsive"/>';
                ?>
                <div class="texte">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>


</div>

<?php get_footer(); ?>