<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Lidia</title>
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
                        <li class="menu__item">
                            <a href="#features" class="menu__link">Feature</a>
                        </li>
                        <li class="menu__item">
                            <a href="#services" class="menu__link">Service</a>
                        </li>
                        <li class="menu__item">
                            <a href="#reviews" class="menu__link">Review</a>
                        </li>
                        <li class="menu__item">
                            <a href="#location" class="menu__link">Location</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>