<?php get_header(); ?>

<body>

    <div class="resume">
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
        <h2>Projects</h2>
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

        <h2>Soft Skills</h2>
        <ul>
            <li>Problem-Solving</li>
            <li>Teamwork</li>
            <li>Communication</li>
            <li>Adaptability</li>
            <li>Time Management</li>
            <li>Attention to Detail</li>
        </ul>

        <h2>Hard Skills</h2>
        <ul>
            <li>HTML5</li>
            <li>CSS3</li>
            <li>JavaScript</li>
            <li>React.js</li>
            <li>Node.js</li>
            <li>Git</li>
        </ul>
    </div>

</body>

<?php get_footer(); ?>
