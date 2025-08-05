<?php
$title = get_sub_field('features_title');
$cards = get_sub_field('features_cards');
?>



<section id="features" class="page__features features">
  <div class="features__container">
    <div class="features__header-block header-block header-block--margin">
      <div class="header-block__label">FEATURES</div>
      <h2 class="header-block__title"><?php echo $title; ?></h2>
    </div>
    <div class="features__items">

      <?php foreach ($cards as $index => $card) : ?>
      <div class="features__item">
        <div class="features__icon">
          <?php echo wp_get_attachment_image($card['image'], 'full'); ?>
        </div>
        <h4 class="features__title"><?php echo $card['card_title']; ?></h4>
        <div class="features__text">
          <p><?php echo $card['card_description']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
