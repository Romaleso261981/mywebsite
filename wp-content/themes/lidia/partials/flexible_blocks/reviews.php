<?php
$title = get_sub_field('reviews_title');
$cards = get_sub_field('reviews_cards');
?>


<section id="reviews" class="page__reviews reviews">
  <div class="reviews__container">
    <div class="reviews__header-block header-block header-block--margin">
      <div class="header-block__label">REVIEWS</div>
      <h2 class="header-block__title"><?php echo $title; ?></h2>
    </div>
    <div class="reviews__body">
      <div class="reviews__items">
        <?php foreach ($cards as $index => $card) : ?>
        <article class="reviews__item">
          <a href="<?php echo $card['image_url']; ?>" class="reviews__link-avatar">
            <?php echo wp_get_attachment_image($card['image'], 'full'); ?>
          </a>
          <div class="reviews__text">
            <p><?php echo $card['card_description']; ?></p>
          </div>
          <h4 class="reviews__title">
            <a href="<?php echo $card['image_url']; ?>"
              class="reviews__link-title"><?php echo $card['card_title_']; ?></a>
          </h4>
          <div class="reviews__position"><?php echo $card['card_sub_title']; ?></div>
        </article>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>
