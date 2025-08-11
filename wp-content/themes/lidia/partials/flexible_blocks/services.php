<?php
$title = get_sub_field('services_title');
$cards = get_sub_field('services_card');
$services_list = get_sub_field('services_list');
?>

<section id="services" class="page__services services">
  <div class="services__container">
    <div class="services__header-block header-block header-block--margin">
      <div class="header-block__label">SERVICES</div>
      <h2 class="header-block__title"><?php echo $title; ?></h2>
    </div>
    <?php if ($services_list) : ?>
    <div class="services__items">
      <?php foreach ($services_list as $index => $service_id) : ?>
      <article class="services__item">
        <div class="services__content">
          <div class="services__body">
            <h4 class="services__title"><?php echo get_the_title($service_id); ?></h4>
            <div class="services__text">
              <p><?php echo get_the_excerpt($service_id); ?></p>
            </div>
            <a href="<?php echo get_the_permalink($service_id); ?>" class="services__link">Read more</a>
          </div>
        </div>
        <div class="services__image">
          <?php echo get_the_post_thumbnail($service_id, 'full', array('class' => 'services__picture')); ?>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
  </div>
</section>