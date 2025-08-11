<?php
$title = get_sub_field('reviews_title');
$reviews_list = get_sub_field('reviews_list');
?>


<section id="reviews" class="page__reviews reviews">
  <div class="reviews__container">
    <div class="reviews__header-block header-block header-block--margin">
      <div class="header-block__label">REVIEWS</div>
      <h2 class="header-block__title"><?php echo $title; ?></h2>
    </div>
    <div class="reviews__body">
      <div class="reviews__items">
        <?php foreach ($reviews_list as $index => $review_id) : ?>
        <article class="reviews__item">
          <a href="<?php echo get_the_permalink($review_id); ?>" class="reviews__link-avatar">
            <?php echo get_the_post_thumbnail($review_id, 'full', array('class' => 'reviews__avatar')); ?>
          </a>
          <div class="reviews__text">
            <p><?php echo get_the_excerpt($review_id); ?></p>
          </div>
          <h4 class="reviews__title">
            <a href="<?php echo get_the_permalink($review_id); ?>"
              class="reviews__link-title"><?php echo get_the_title($review_id); ?></a>
          </h4>
          <div class="reviews__position"><?php echo get_field('position', $review_id); ?></div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>