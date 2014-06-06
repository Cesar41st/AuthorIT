<?php
/**
Template Name: Librairie
 */
?>
<?php get_header(); ?>

<div id="librairie">

    <h2>LIBRAIRIE</h2>

    <img class="img-responsive" id="header_image" src="<?php bloginfo('template_directory'); ?>/image/header.jpg" alt="" title="" width="1170" height="65">

    <form role="search" method="get" class="search-form-2" action="http://127.0.0.1/github/AuthorIT/wordpress/">
        <label>
            <span class="screen-reader-text">Recherche pour&nbsp;:</span>
            <input type="search" class="search-field" placeholder="Recherche…" value="" name="s" title="Recherche pour&nbsp;:">
        </label>
        <input type="submit" class="search-submit" value="Rechercher">
    </form>
    <div id="i_id"><i class="fa fa-search"></i></div>

    <?php
    $taxonomy     = 'product_cat';
    $orderby      = 'name';
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 1;      // 1 for yes, 0 for no
    $title        = '';
    $empty        = 0;
    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li'     => $title,
        'hide_empty'   => $empty
    );
    ?>
    <?php $all_categories = get_categories( $args );
    //print_r($all_categories); ?>
    <div id="categories">

    <?php foreach ($all_categories as $cat) {
        //print_r($cat);
        if($cat->category_parent == 0) {
            $category_id = $cat->term_id;

            ?>

            <?php

            echo '<a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>'; ?>

        <?php }
    }
    ?>
    </div>
    <div id="ligne_couleur"></div>

    <?php
    $args = array( 'post_type' => 'product', 'stock' => 1,'product_cat' => 'Aventure', 'posts_per_page' => 3, 'orderby'
    =>'date','order' => 'DESC');
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
         ></span>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

</div>

<?php get_footer(); ?>
