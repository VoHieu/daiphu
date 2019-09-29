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
        <form action="#" method="POST" id="form_submit_buy">
            <div class="gr-form gr-form-first">
                <div class="form-group">
                    <div class="msg-input">
                        <input type="text" name="name" id="name-dk" placeholder="Họ và tên">
                    </div>
                </div>
                <div class="form-group">
                    <div class="msg-input">
                        <input type="text" name="age" id="age-dk" placeholder="Độ tuổi">
                    </div>
                </div>
            </div>
            <div class="gr-form">
                <div class="form-group">
                    <div class="msg-input">
                        <input type="text" name="email" id="email-dk" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="msg-input">
                        <input type="text" name="address" id="address-dk" placeholder="Địa chỉ sống hiện tại">
                    </div>
                </div>
            </div>
            <div class="gr-form gr-form-last">
                <div class="form-group">
                    <div class="msg-input">
                        <input type="number" name="phone" id="phone-dk" placeholder="Số điện thoại">
                    </div>
                </div>
            </div>
            <div class="form-group gr-form-edit-submit">
                <div class="msg-input">
                    <input type="submit" value="NHẬN THÔNG TIN NGAY" class="ajax-loading">
                    <input type="hidden" name="action" value="novabeach_register">
                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="37fb78ccf4" /><input type="hidden" name="_wp_http_referer" value="/" />                        </div>
            </div>
        </form>
    </div>
</div>