<?php get_header(); ?>

<body>

    <div class="resume">
        <?php echo custom_welcome_message(); ?>
        <div class="header">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.png" alt="Mike">
            <div>
                <?php if (get_field('main_title')): ?>
                <h1><?php the_field('main_title'); ?><br><?php if (get_field('sub_title')): ?>
                    <?php the_field('sub_title'); ?>
                    <?php endif; ?></br>
                </h1>
                <?php endif; ?>
                <?php if (get_field('description')): ?>
                <p>
                    <?php the_field('description'); ?>
                </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="contacts">
            <?php if (get_field('contacts_title')): ?>
            <h3><?php the_field('contacts_title'); ?></h3>
            <?php endif; ?>
            <?php if (get_field('phone')): ?>
            <p><strong>Phone:</strong> <?php the_field('phone'); ?></p>
            <?php endif; ?>
            <?php if (get_field('email')): ?>
            <p><strong>Email:</strong> <?php the_field('email'); ?></p>
            <?php endif; ?>
        </div>
        <?php custom_heading('Projects'); ?>
        <ol>
            <li><a href="<?php if (get_field('project_1_link')): ?>
                    <?php the_field('project_1_link'); ?>
                    <?php endif; ?>">
                    <?php if (get_field('project_1_link')): ?>
                    <?php the_field('project_1_link'); ?>
                    <?php endif; ?>
                </a>
                <?php if (get_field('project_1_title')): ?>
                <?php the_field('project_1_title'); ?>
                <?php endif; ?>
            </li>
            <li><a href="<?php the_field('project_2_link'); ?>">
                    <?php the_field('project_2_link'); ?>
                </a>
                <?php the_field('project_2_title'); ?>
            </li>
            <li><a href="<?php if (get_field('project_3_link')): ?>
                    <?php the_field('project_3_link'); ?>
                    <?php endif; ?>">
                    <?php if (get_field('project_3_link')): ?>
                    <?php the_field('project_3_link'); ?>
                    <?php endif; ?>
                </a>
                <?php if (get_field('project_3_title')): ?>
                <?php the_field('project_3_title'); ?>
                <?php endif; ?>
            </li>
        </ol>
        <?php custom_heading('Soft Skills'); ?>
        <ul>
            <li>Problem-Solving</li>
            <li>Teamwork</li>
            <li>Communication</li>
            <li>Adaptability</li>
            <li>Time Management</li>
            <li>Attention to Detail</li>
        </ul>

        <?php custom_heading('Hard Skills'); ?>
        <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>JavaScript</li>
            <li>React.js</li>
            <li>Node.js</li>
            <li>Git</li>
        </ul>

        <?php custom_heading('Останні записи'); ?>
        <div class="recent-posts">
            <?php
            $recent_posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post_status' => 'publish'
            ));

            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
            <article class="post-preview">
                <h3 class="post-title">
                    <a href="<?php echo get_permalink(); ?>">
                        <?php echo esc_html(get_the_title()); ?>
                    </a>
                </h3>
                <div class="post-meta">
                    <span class="post-date"><?php echo esc_html(get_the_date()); ?></span>
                    <span class="post-author"><?php echo esc_html(get_the_author()); ?></span>
                </div>
                <div class="post-excerpt">
                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20, '...')); ?>
                </div>
                <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more">
                    Читати далі →
                </a>
            </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
            <p>Записів поки немає. <a href="<?php echo esc_url(admin_url('post-new.php')); ?>">Створити перший запис</a>
            </p>
            <?php endif; ?>
        </div>
    </div>

</body>

<?php get_footer(); ?>