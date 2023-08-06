<?php

/** * Template Name: Home */ ?>
<?php get_header(); ?>

<div class="hero_banner_wrapper">
    <?php if (have_rows('homeboxes')) : ?>
        <?php while (have_rows('homeboxes')) : the_row(); ?>
            <?php if (get_row_layout() == 'intro') : ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="small_text"> <?php echo get_sub_field('title'); ?></h3>
                            <?php echo get_sub_field('header'); ?>
                            <div class="banner_img">
                                <img src="<?php echo get_sub_field('banner'); ?>">
                            </div>
                            <div class="bottom_circle">
                                <img src="<?php echo get_sub_field('logo'); ?>">
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
    <div class="social_icon">


        <?php if (have_rows('header_social_media', 'option')) : ?>
            <ul>
                <?php while (have_rows('header_social_media', 'option')) : the_row(); ?>

                    <li><a href="<?php echo get_sub_field('link'); ?>"><img src="<?php echo get_sub_field('icon'); ?>"></a></li>

                <?php endwhile; ?>
            </ul>
        <?php endif; ?>


    </div>
</div>
<?php if (have_rows('homeboxes')) : ?>
    <?php while (have_rows('homeboxes')) : the_row(); ?>


        <?php if (get_row_layout() == 'about') : ?>

            <div class="about_section">
                <div class="container">

                    <h3 class="small_text"><?php echo get_sub_field('title'); ?></h3>
                    <p><?php echo get_sub_field('header'); ?></p>
                    <a href=""><img src="<?php bloginfo('template_url') ?>/assets/images/arrow-down.svg"></a>
                </div>
            </div>
        <?php endif; ?>


        <?php if (get_row_layout() == 'the_world') : ?>
            <div class="the_world_section" id="explore">
                <div class="container">
                    <h3 class="small_text"><?php echo get_sub_field('title'); ?></h3>
                    <h2><?php echo get_sub_field('header'); ?></h2>
                    <div class="slider_section">
                        <div id="img-container">
                            <?php if (have_rows('image_blocks')) : ?>

                                <?php while (have_rows('image_blocks')) : the_row(); ?>

                                    <div class="images img-expand" style="width: 20%;">
                                        <div class="images_content_wrapper">
                                            <img src="<?php echo get_sub_field('image'); ?>">
                                            <div class="images_content">
                                                <span><img src="<?php bloginfo('template_url');?>/assets/images/headset.svg"></span>
                                                <h4><?php echo get_sub_field('title'); ?></h4>
                                                <h3><?php echo get_sub_field('sub_title'); ?></h3>
                                            </div>
                                        </div>
                                    </div>

                            <?php endwhile;
                            endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_row_layout() == 'how_metaverus_works') : ?>

            <div class="how_works" id="get_start">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="<?php echo get_sub_field('image'); ?>">
                        </div>
                        <div class="col-md-5">
                            <h3 class="small_text"><?php echo get_sub_field('title'); ?></h3>
                            <h2><?php echo get_sub_field('header'); ?></h2>
                            <?php echo get_sub_field('info'); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (get_row_layout() == 'whatsnew') : ?>

            <div class="whats_new_section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="small_text"><?php echo get_sub_field('title'); ?></h3>
                            <h2><?php echo get_sub_field('header'); ?></h2>
                            <div class="two_list">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="<?php echo get_sub_field('left_box_icon'); ?>">
                                        </span>
                                        <h3><?php echo get_sub_field('left_box_title'); ?></h3>
                                        <p><?php echo get_sub_field('leftbox_info'); ?></p>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="<?php echo get_sub_field('right_box_icon'); ?>">
                                        </span>
                                        <h3><?php echo get_sub_field('righbox_title'); ?></h3>
                                        <p><?php echo get_sub_field('righbox_info'); ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo get_sub_field('image'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_row_layout() == 'people_on_the_world') : ?>

            <div class="map_section">
                <div class="container">
                    <h3 class="small_text"><?php echo get_sub_field('title'); ?></h3>
                    <h2><?php echo get_sub_field('header'); ?></h2>
                    <div class="map_img">
                        <img src="<?php echo get_sub_field('map'); ?>">
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_row_layout() == 'insight') : ?>

            <div class="insight_section" id="insight">
                <div class="container">
                    <h3 class="small_text"><?php echo get_sub_field('title'); ?></h3>
                    <h2><?php echo get_sub_field('header'); ?></h2>
                    <div class="insight_box_wrapper">
                        <?php if (have_rows('boxes')) : ?>

                            <?php while (have_rows('boxes')) : the_row();

                            ?>
                                <div class="insight_box">
                                    <div class="insight_box_img">
                                        <img src="<?php echo get_sub_field('image'); ?>">
                                    </div>
                                    <div class="insight_box_content">
                                        <?php echo get_sub_field('content'); ?>
                                    </div>
                                    <div class="arrow">
                                        <a href="<?php echo get_sub_field('link'); ?>">
                                            <img src="<?php echo bloginfo('template_url') ?>/assets/images/arrow.svg"></a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_row_layout() == 'founder') : ?>

            <div class="founder_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="founder_content">
                                <h3><?php echo get_sub_field('title'); ?> </h3>
                                <p class="position"><?php echo get_sub_field('position'); ?></p>
                                <p><?php echo get_sub_field('info'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="founder_img">
                                <img src="<?php echo get_sub_field('logo'); ?>" class="circle_img">
                                <img src="<?php echo get_sub_field('banner'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>

        <?php if (get_row_layout() == 'enter_meta_verse') : ?>
            <div class="pre_footer">
                <div class="container">
                    <h2><?php echo get_sub_field('title'); ?></h2>
                    <a href="<?php echo get_sub_field('buttonlink'); ?>" class="btn">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/headset.svg">
                        <?php echo get_sub_field('buttontext'); ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>