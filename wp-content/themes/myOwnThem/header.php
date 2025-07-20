<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<header>
    <div class="header-content">
        <?php if (get_field('header_title')): ?>
        <h1><?php the_field('header_title'); ?></h1>
        <?php endif; ?>
    </div>
</header>