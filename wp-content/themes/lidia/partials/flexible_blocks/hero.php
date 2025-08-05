<?php
if (function_exists('get_field')) :
    $hero_content = get_field('hero');
endif;
?>

<section class="page__hero hero">
  <div class="hero__container">
    <div class="hero__content content-hero">
      <h1 class="content__title">
        <?php echo esc_html($hero_content[0]['main_title1']); ?>
        <a href="<?php echo esc_url($hero_content['main_tile_link']); ?>">
          <?php echo esc_html($hero_content['main_tile_link_text']); ?>
        </a>
        <?php echo esc_html($hero_content['main_title2']); ?>
      </h1>

      <div class="content-hero__text">
        <p><?php echo esc_html($hero_content[0]['description']); ?></p>
      </div>

      <a href="#" class="content-hero__button">
        <?php echo esc_html($hero_content[0]['button_text']); ?>
      </a>
    </div>

    <div class="hero__images images-hero">
      <?php
            // Виводимо галерею зображень з першого елемента масиву
            if ($hero_content[0]['galary'] && is_array($hero_content[0]['galary'])) {
                foreach ($hero_content[0]['galary'] as $index => $image_item) {
                    $image_id = $image_item['image'];
                    $alt_text = $image_item['alt'];
                    $item_class = 'images-hero__item images-hero__item--' . str_pad($index + 1, 2, '0', STR_PAD_LEFT);
            ?>
      <a href="#" class="<?php echo esc_attr($item_class); ?>">
        <?php
                        echo wp_get_attachment_image($image_id, 'full', false, [
                            'class' => 'images-hero__image',
                            'alt' => esc_attr($alt_text)
                        ]);
                        ?>
      </a>
      <?php
                }
            }
            ?>
    </div>
  </div>
</section>