<?php
$title = get_sub_field('location_title');
$location = get_sub_field('location_map_link');
?>

<?php
echo '<pre>';
print_r($location);
echo '</pre>';
?>


<section id="location" class="page__location location">
  <div class="location__container">
    <div class="location__header-block header-block header-block--margin">
      <div class="header-block__label">LOCATION</div>
      <h2 class="header-block__title"><?php echo $title; ?></h2>
    </div>
    <?php

        if ($location): ?>
    <div class="acf-map" data-zoom="16">
      <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
        data-lng="<?php echo esc_attr($location['lng']); ?>">
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>