<div id="popup-nhan-thong-tin" class="active">
    <div class="wrap-popup">
        <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/bg-form-dk.png")?>" alt="" class="bg-popup img-responsive">
        <div class="icon-close">
            <img src="<?php printf(get_bloginfo('url')."/wp-content/themes/daiphu/assets/images/close.png")?>" alt="" class="img-responsive">
        </div>
        <div class="title">
            <p>Đăng ký</p>
            <p>Nhận Thông Tin Dự Án</p>
        </div>
        <?php
        echo do_shortcode(
            '[contact-form-7 id="68" title=”Contact us now"]'
        );
        ?>
    </div>
</div>