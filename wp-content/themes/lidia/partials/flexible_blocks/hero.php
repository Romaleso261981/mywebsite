<?php
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$images = get_sub_field('images');
?>

<section class="page__hero hero">
  <div class="hero__container">
    <div class="hero__content content-hero">
      <?php echo $title; ?>

      <div class="content-hero__text">
        <p><?php echo esc_html($sub_title); ?></p>
      </div>

      <a href="#" class="content-hero__button">
        Start now →
      </a>
    </div>

    <div class="hero__images images-hero">
      <?php foreach ($images as $index => $image) : ?>
      <a href="<?php echo $image['link']; ?>"
        class="images-hero__item images-hero__item--<?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>">
        <?php echo wp_get_attachment_image($image['image'], 'full'); ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>