<?php get_header(); ?>

<main class="page">
    <?php if (have_rows('blocks')) : ?>
        <?php while (have_rows('blocks')) : the_row(); ?>
            <?php if (get_row_layout() == 'hero') : ?>
                <section class="hero">
                    <div class="hero__container">
                        <div class="hero__body">
                            <div class="hero__content">
                                <h1 class="hero__title">
                                    <?php the_sub_field('title'); ?>
                                </h1>
                                <div class="hero__text">
                                    <?php the_sub_field('text'); ?>
                                </div>
                                <div class="hero__button">
                                    <a href="<?php the_sub_field('button_url'); ?>"
                                        class="button"><?php the_sub_field('button_text'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="page__container">
            <div class="page__body">
                <div class="page__content">
                    <h1 class="page__title">Front page not found</h1>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
