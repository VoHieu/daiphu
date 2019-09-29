<div class="section" id="section6">
    <div class="wrap-content-common">
        <div class="content-section6">
            <div class="title">
                <p>
                    Tin tức
                </p>
            </div>
            <div class="wrap-news">
                <div class="col-left ">
                    <?php
                    $wpb_4_query = new WP_Query(array('posts_per_page' => 4));
                    ?>
                    <?php if($wpb_4_query->have_posts()): ?>
                        <?php while ( $wpb_4_query->have_posts() ) : $wpb_4_query->the_post(); ?>
                            <div class="item background-style"
                                 style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>)">
                                <a
                                        href="<?php the_permalink() ?>">
                                    <img src="https://via.placeholder.com/360x577" alt=""
                                         class="img-responsive opacity">
                                </a>
                                <div class="text">
                                    <div class="title-text">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?></a>
                                    </div>
                                    <div class="descript">
                                    </div>
                                    <hr>
                                    <p class="date">
                                        <img src="<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/images/clock.png")?>" alt="" class="img-responsive">
                                        <?php the_time('d/m/Y') ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>