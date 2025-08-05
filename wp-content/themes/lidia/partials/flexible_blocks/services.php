<?php
$title = get_sub_field('services_title');
$cards = get_sub_field('services_card');
?>



<section id="services" class="page__services services">
  <div class="services__container">
    <div class="services__header-block header-block header-block--margin">
      <div class="header-block__label">SERVICES</div>
      <h2 class="header-block__title"><?php echo $title; ?></h2>
    </div>
    <div class="services__items">
      <?php foreach ($cards as $index => $card) : ?>
      <article class="services__item">
        <div class="services__content">
          <div class="services__body">
            <h4 class="services__title"><?php echo $card['title']; ?></h4>
            <div class="services__text">
              <p><?php echo $card['services_description_first_text']; ?></p>
              <p><?php echo $card['services_description_second_text']; ?></p>
            </div>
          </div>
        </div>
        <div class="services__image">
          <?php echo wp_get_attachment_image($card['image'], 'full'); ?>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

  </div>
  </div>
</section>