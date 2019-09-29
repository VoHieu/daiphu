<?php get_header() ?>
<div class="padding-top-comomon" id="mod-tin-tuc">
    <div class="max-content-wrap">
        <div class="row">
            <div class="col-md-9 col-left">
                <div class="title-span">
                    <h4>
                        Tin tức
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
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('posts_per_page' => 3, 'paged' => $paged, 'category_name' => 'tin-tuc' );
                query_posts($args);

                if(have_posts()): ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="highlights">
                            <a href="<?php the_permalink() ?>">
                                <div class="background-style" style="background-image: url(<?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail_url();

                                }else {
                                    printf(get_bloginfo('url')."/wp-content/uploads/2019/09/dia-oc.jpg");
                                }
                                ?>)">
                                    <img src="https://via.placeholder.com/900x500" alt="" class="img-responsive opacity">
                                </div>
                            </a>
                            <div class="title">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="pagination justify-content-center" style="margin: auto 0">
                    <?php next_posts_link(); ?>
                    <?php previous_posts_link(); ?>
                    </div>
                <?php else : ?>
                    <!-- No posts found -->
                <?php endif; ?>

            </div>
            <?php get_template_part('side','noi-bat') ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
