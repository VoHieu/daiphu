<?php get_header();?>
<div class="" id="mod-single">
    <div class="common-banner">
        <div class="background-style" style="background-image: url(<?php
        if(has_post_thumbnail()){
            the_post_thumbnail_url();

        }else {
            printf(get_bloginfo('url') . "/wp-content/uploads/2019/04/cqtc.jpg)");
        }
        ?>">
            <img src="https://via.placeholder.com/1440x437" alt="" class="img-responsive opacity">
        </div>
        <div class="overlay">
            <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/overlay.png")
            ?>" alt="" class="img-responsive">
        </div>
    </div>
        <div class="content-single">
            <div class="content-text">
                <h1><?php the_title() ?></h1>
                <div class="gr-hours-share">
                    <div class="hours">
                        <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/time-left.png")?>" alt="" class="img-responsive">
                        <span><?php the_time('d/m/Y') ?></span>
                    </div>
                </div>
                <div class="text">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer()?>

