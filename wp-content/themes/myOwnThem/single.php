<?php

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <header class="entry-header">
            <nav class="breadcrumb">
                <a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html(get_bloginfo('name')); ?></a>
                <span class="separator">/</span>
                <span class="current"><?php echo esc_html(get_the_title()); ?></span>
            </nav>

            <h1 class="entry-title"><?php echo esc_html(get_the_title()); ?></h1>

            <div class="entry-meta">
                <span class="posted-on">
                    Опубліковано: <?php echo esc_html(get_the_date()); ?>
                </span>
                <span class="byline">
                    Автор: <?php echo esc_html(get_the_author()); ?>
                </span>
            </div>
        </header>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php
                the_content();
                ?>
            </div>
        </article>
    </div>
</main>

<?php
get_footer();
?>