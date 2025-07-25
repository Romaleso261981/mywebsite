<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php wp_body_open(); ?>
    <?php wp_enqueue_scripts(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <input type="checkbox" name="" id="toggle">
            <label for="toggle" class="toggle_btn">
                <span></span>
            </label>
            <nav>
                <ul class="header_menu">
                    <li class="header_menu_item">
                        <a href="#" class="header_menu_item_link">Works</a>
                    </li>
                    <li class="header_menu_item">
                        <a href="#" class="header_menu_item_link">Blog</a>
                    </li>
                    <li class="header_menu_item">
                        <a href="#" class="header_menu_item_link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
