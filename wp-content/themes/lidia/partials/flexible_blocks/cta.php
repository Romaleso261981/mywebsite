<?php

/**
 * CTA (Call-to-Action) елементи для теми Lidia
 * Містить різні типи закликів до дії
 */

/**
 * CTA кнопка з кастомними параметрами
 */
function lidia_cta_button($text, $url, $class = 'cta-button', $icon = '')
{
  $icon_html = $icon ? '<i class="' . esc_attr($icon) . '"></i> ' : '';
  return '<a href="' . esc_url($url) . '" class="' . esc_attr($class) . '">' . $icon_html . esc_html($text) . '</a>';
}

/**
 * CTA баннер з заголовком, текстом та кнопкою
 */
function lidia_cta_banner($title, $description, $button_text, $button_url, $class = 'cta-banner')
{
?>
    <div class="<?php echo esc_attr($class); ?>">
        <div class="cta-banner__content">
            <h2 class="cta-banner__title"><?php echo esc_html($title); ?></h2>
            <p class="cta-banner__description"><?php echo esc_html($description); ?></p>
            <?php echo lidia_cta_button($button_text, $button_url, 'cta-button cta-button--primary'); ?>
        </div>
    </div>
<?php
}

/**
 * CTA форма підписки на новини
 */
function lidia_cta_newsletter($title = 'Підпишіться на новини', $description = 'Отримуйте найкращі статті та пропозиції першими!')
{
?>
    <div class="cta-newsletter">
        <div class="cta-newsletter__content">
            <h3 class="cta-newsletter__title"><?php echo esc_html($title); ?></h3>
            <p class="cta-newsletter__description"><?php echo esc_html($description); ?></p>
            <form class="cta-newsletter__form" method="post" action="">
                <div class="cta-newsletter__input-group">
                    <input type="email" name="newsletter_email" placeholder="Ваш email" required class="cta-newsletter__input">
                    <button type="submit" class="cta-button cta-button--newsletter">Підписатися</button>
                </div>
                <p class="cta-newsletter__privacy">Натискаючи "Підписатися", ви погоджуєтесь з нашою <a href="/privacy">політикою
                        конфіденційності</a></p>
            </form>
        </div>
    </div>
<?php
}

/**
 * CTA для товарів/послуг
 */
function lidia_cta_product($product_title, $price, $button_text = 'Купити зараз', $product_url = '')
{
?>
    <div class="cta-product">
        <div class="cta-product__content">
            <h3 class="cta-product__title"><?php echo esc_html($product_title); ?></h3>
            <div class="cta-product__price"><?php echo esc_html($price); ?> грн</div>
            <div class="cta-product__features">
                <ul>
                    <li>✓ Безкоштовна доставка</li>
                    <li>✓ Гарантія 30 днів</li>
                    <li>✓ Технічна підтримка</li>
                </ul>
            </div>
            <?php echo lidia_cta_button($button_text, $product_url, 'cta-button cta-button--product'); ?>
        </div>
    </div>
<?php
}

/**
 * CTA для контактів
 */
function lidia_cta_contact($title = 'Потрібна консультація?', $description = 'Зв\'яжіться з нами прямо зараз!')
{
?>
    <div class="cta-contact">
        <div class="cta-contact__content">
            <h3 class="cta-contact__title"><?php echo esc_html($title); ?></h3>
            <p class="cta-contact__description"><?php echo esc_html($description); ?></p>
            <div class="cta-contact__buttons">
                <?php echo lidia_cta_button('Зателефонувати', 'tel:+380501234567', 'cta-button cta-button--phone', 'fas fa-phone'); ?>
                <?php echo lidia_cta_button('Написати', '/contact', 'cta-button cta-button--email', 'fas fa-envelope'); ?>
            </div>
        </div>
    </div>
<?php
}

/**
 * CTA для блогу
 */
function lidia_cta_blog($title = 'Сподобалася стаття?', $description = 'Підпишіться на наш блог і отримуйте нові статті першими!')
{
?>
    <div class="cta-blog">
        <div class="cta-blog__content">
            <h3 class="cta-blog__title"><?php echo esc_html($title); ?></h3>
            <p class="cta-blog__description"><?php echo esc_html($description); ?></p>
            <div class="cta-blog__buttons">
                <?php echo lidia_cta_button('Підписатися на блог', '/subscribe', 'cta-button cta-button--blog'); ?>
                <?php echo lidia_cta_button('Читати ще', '/blog', 'cta-button cta-button--secondary'); ?>
            </div>
        </div>
    </div>
<?php
}

/**
 * CTA для спеціальних пропозицій
 */
function lidia_cta_special_offer($title, $description, $discount, $expiry_date, $button_text = 'Отримати знижку')
{
?>
    <div class="cta-special-offer">
        <div class="cta-special-offer__badge">
            <span class="cta-special-offer__discount"><?php echo esc_html($discount); ?></span>
        </div>
        <div class="cta-special-offer__content">
            <h3 class="cta-special-offer__title"><?php echo esc_html($title); ?></h3>
            <p class="cta-special-offer__description"><?php echo esc_html($description); ?></p>
            <div class="cta-special-offer__timer">
                <p>Пропозиція діє до: <strong><?php echo esc_html($expiry_date); ?></strong></p>
            </div>
            <?php echo lidia_cta_button($button_text, '/special-offer', 'cta-button cta-button--special'); ?>
        </div>
    </div>
<?php
}

/**
 * CTA для завантаження файлів
 */
function lidia_cta_download($title, $description, $file_url, $file_size = '')
{
?>
    <div class="cta-download">
        <div class="cta-download__content">
            <h3 class="cta-download__title"><?php echo esc_html($title); ?></h3>
            <p class="cta-download__description"><?php echo esc_html($description); ?></p>
            <?php if ($file_size): ?>
                <p class="cta-download__size">Розмір файлу: <?php echo esc_html($file_size); ?></p>
            <?php endif; ?>
            <?php echo lidia_cta_button('Завантажити', $file_url, 'cta-button cta-button--download', 'fas fa-download'); ?>
        </div>
    </div>
<?php
}

/**
 * CTA для реєстрації/реєстрації
 */
function lidia_cta_auth($title = 'Приєднуйтесь до нас!', $description = 'Створіть акаунт і отримайте доступ до ексклюзивного контенту')
{
?>
    <div class="cta-auth">
        <div class="cta-auth__content">
            <h3 class="cta-auth__title"><?php echo esc_html($title); ?></h3>
            <p class="cta-auth__description"><?php echo esc_html($description); ?></p>
            <div class="cta-auth__buttons">
                <?php echo lidia_cta_button('Зареєструватися', '/register', 'cta-button cta-button--register'); ?>
                <?php echo lidia_cta_button('Увійти', '/login', 'cta-button cta-button--login cta-button--secondary'); ?>
            </div>
        </div>
    </div>
<?php
}
?>
