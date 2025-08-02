<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrapper">
        <header id="header" class="header">
            <div class="header__container">
                <?php the_custom_logo(); ?>
                <nav class="header__menu menu">
                    <ul class="menu__list">
                        <?php
                        wp_nav_menu(array(
                          'theme_location' => 'header',
                          'menu_class' => 'menu__list',
                          'container' => false,
                        ));
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
