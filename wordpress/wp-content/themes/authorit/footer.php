<?php
/**
 * Created by PhpStorm.
 * User: Bill
 * Date: 02/06/14
 * Time: 11:07
 */
?>
</div>
<div class="footer-container">
    <footer id="footer" class="container">
        <div class="row">

            <?php

            $defaults = array(
                'theme_location' => 'footer',
            );

            wp_nav_menu($defaults); ?>

        </div>

        <ul class="submenu">
            <li class="footer-block col-xs-12 col-sm-4">
                <p>Lorem ipsum</p>
            </li>
            <li class="footer-block col-xs-12 col-sm-4">
                <p>Lorem ipsum</p>
            </li>
            <li class="footer-block col-xs-12 col-sm-4">
                <p>Lorem ipsum</p>
            </li>
        </ul>

    </footer>
    <div id="after_footer"></div>
</div>

</body>