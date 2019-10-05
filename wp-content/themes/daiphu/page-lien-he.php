<?php get_header()?>
<div id="mod-index">
    <div id="fullpage">
        <div class="section background-style" id="section4-6"
             style="background-image: url(<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/bg-ss4-6.jpg)")?>">
            <div class="wrap-content-common">
                <div class="content-section4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/Dong-Nai-Map.jpg")?>" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-5">
                                <div class="title">
                                    <div class="gr-title">
                                        <p>
                                            Đăng ký
                                        </p>
                                        <p>
                                            Nhận thông tin dự án
                                        </p>
                                    </div>
                                    <div class="contact-now">
                                        Quý khách vui lòng để lại thông tin chúng tôi sẽ liên hệ ngay
                                    </div>
                                </div>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                    the_content();
                                endwhile; else: ?>
                                    <p>Sorry, no posts matched your criteria.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script type='text/javascript'
        src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js?ver=4.9.9'></script>
<script type='text/javascript'
        src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js?ver=4.9.9'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js?ver=4.9.9'>
</script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js'>
</script>
<script type='text/javascript'
        src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js?ver=5.2.3'></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wp_vars = {"ajaxurl":"https:\/\/datlongkhanh.net\/wp-admin\/admin-ajax.php","homeurl":"https:\/\/datlongkhanh.net","themeurl":"https:\/\/datlongkhanh.net\/wp-content\/themes\/daiphu"};
    /* ]]> */
</script>

<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/common.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/function.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/jquery.panzoom.min.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/single.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/cac-loai-bat-dong-san-detail.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/thu-vien.js")?>'></script>
<script type="text/javascript" src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/contact.js")?>'></script>

</body>
</html>