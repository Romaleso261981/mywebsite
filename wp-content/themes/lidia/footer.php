    <?php
    $footer_logo = get_field('footer_logo', 'option');
    $footer_socials = get_field('footer_socials', 'option');
    $footer_slogan = get_field('footer_slogan', 'option');
    ?>

    <footer class="footer">
        <div class="footer__body">
            <div class="footer__container">
                <div class="footer__item">
                    <h4 class="footer__title">
                        <?php echo $footer_logo['footer_logo_text']; ?>
                    </h4>
                    <?php if ($footer_logo['footer_logo']): ?>
                    <?php echo wp_get_attachment_image(
                            $footer_logo['footer_logo'],
                            "medium",
                            false,
                            ['class' => 'footer__logo']
                        )
                        ?>
                    <?php endif; ?>
                </div>
                <div class="footer__item">
                    <h4 class="footer__title">
                        <?php if ($footer_logo['footer_logo']): ?>
                        <?php echo $footer_socials['footer_socials_title']; ?>
                        <?php endif; ?>
                    </h4>
                    <div class="footer__social social">
                        <?php
                        if ($footer_socials['social_item']):
                            foreach ($footer_socials['social_item'] as $social_item):
                                if ($social_item['social_item_image']):
                        ?>
                        <a href="#" class="social__item" target="_blank">
                            <?php echo wp_get_attachment_image($social_item['social_item_image'], 'thumbnail', false, ['alt' => 'Social Media Icon']); ?>
                        </a>
                        <?php
                                endif;
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="footer__item">
                    <h4 class="footer__title">
                        <?php if ($footer_logo['footer_logo']): ?>
                        <?php echo $footer_slogan['footer_slogan_title']; ?>
                        <?php endif; ?>
                    </h4>
                    <a href="#" class="footer__link">
                        <?php if ($footer_slogan['footer_slogan_text']): ?>
                        <?php echo $footer_slogan['footer_slogan_text']; ?>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__copy"> &copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?> All rights reserved.
        </div>
    </footer>
    </div>


    <?php wp_footer(); ?>
    </body>

    </html>