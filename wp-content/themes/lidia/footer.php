    <footer class="footer">
        <div class="footer__body">
            <div class="footer__container">
                <div class="footer__item">
                    <h4 class="footer__title">Managed By</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Image"
                        class="footer__logo">
                </div>
                <div class="footer__item">
                    <h4 class="footer__title">Social Media</h4>
                    <div class="footer__social social">
                        <a href="#" class="social__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/social/twitter.svg" alt="Image">
                        </a>
                        <a href="#" class="social__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/social/insta.svg" alt="Image">
                        </a>
                        <a href="#" class="social__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook.svg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="footer__item">
                    <h4 class="footer__title">Slogan</h4>
                    <a href="#" class="footer__link">#RentFavBooks</a>
                </div>
            </div>
        </div>
        <div class="footer__copy"> @copyright <?php echo date('Y'); ?> Lidia. All rights reserved.</div>
    </footer>
    </div>


    <?php wp_footer(); ?>
    </body>

    </html>