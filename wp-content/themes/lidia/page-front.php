<?php get_header(); ?>

<main class="page">
    <?php if (have_rows('blocks')) : ?>
    <?php while (have_rows('blocks')) : the_row(); ?>
    <?php if (get_row_layout() == 'hero') : ?>
    <div class="hero">
        <div class="hero__container">
            <div class="hero__body">
                <div class="hero__content">
                    <h1 class="hero__title"><?php the_sub_field('title'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php else: ?>
    <div class="page__container">
        <div class="page__body">
            <div class="page__content">
                <h1 class="page__title">Front page</h1>
            </div>
        </div>
    </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
