<?php get_header(); ?>

<main class="single-page">
  <h1 class="services__title"><?php the_title(); ?></h1>
  <div class="page__container">
    <div class="page__content">
      <?php the_content(); ?>
    </div>
  </div>
  <div class="services__image">
    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'services__picture')); ?>
  </div>
</main>

<?php get_footer(); ?>