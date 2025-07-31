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
                <a href="#header" class="header__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                </a>
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