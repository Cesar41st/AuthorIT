<?php
/**
Template Name: Contact
 */
?>
<?php get_header(); ?>

<div id="contact">

    <h2><i class="fa fa-envelope"></i> Contact us :</h2>
    <img class="img-responsive" id="header_image" src="<?php bloginfo('template_directory'); ?>/image/header.jpg" alt="" title="">

    <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros
        et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
    </p>

    <form method="post">
        <input type="text" nom="name" id="nom" autofocus placeholder="Name">
        <input type="email" nom="email" id="email" placeholder="Email">
        <input type="url" nom="website" id="website" placeholder="website">

    </form>


</div>

<?php get_footer(); ?>
