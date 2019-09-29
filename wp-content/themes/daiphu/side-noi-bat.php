<div class="col-md-3 col-right">
    <div class="title-span">
        <h4>
            Tin nổi bật
            <div class="span">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </h4>
        <div class="line-full">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="gr-item-hight">
        <?php
        $args = array('posts_per_page' => 2, 'category_name' => 'noi-bat' );
        query_posts($args);

        if(have_posts()): ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="item">
            <a href="<?php the_permalink() ?>">
                <div class="background-style" style="background-image: url(
                <?php
                if(has_post_thumbnail()){
                    the_post_thumbnail_url();

                }else {
                    printf(get_bloginfo('url')."/wp-content/uploads/2019/09/dia-oc.jpg");
                }
                ?>
                )">
                    <img src="https://via.placeholder.com/375x210" alt="" class="img-responsive opacity">
                </div>
            </a>
            <div class="text">
                <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
                </a>
            </div>
        </div>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>

    </div>

    <div class="qc">
        <a href="#">
            <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/banner-qc.jpg")?>" alt="" class="img-responsive">
        </a>
    </div>
</div>