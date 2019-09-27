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
            <div class="form-group gr-form-edit">
                <label for="typeBDS" class="title-first">Loại hình BĐS quan tâm </label>
                <div class="gr-radio">
                    <div class="item">
                        <input type="radio" id="villas" value="Villas" name="typebds" />
                        <label for="villas">Villas</label>
                    </div>
                    <div class="item">
                        <input type="radio" id="condotel" value="Service Apartment" name="typebds" />
                        <label for="condotel">Service Apartment</label>
                    </div>
                    <div class="item">
                        <input type="radio" id="shop-house" value="Shop Houses" name="typebds" />
                        <label for="shop-house">Shop Houses (Nhà phố)</label>
                    </div>
                </div>
            </div>

            <div class="form-group gr-form-edit">
                <label for="typeBDS" class="title-first">Mức độ đầu tư mong muốn </label>
                <div class="gr-radio">
                    <div class="item">
                        <input type="radio" id="under2" value="Dưới 2 tỷ" name="level" />
                        <label for="under2">Dưới 2 tỷ</label>
                    </div>
                    <div class="item">
                        <input type="radio" id="2ty5ty" value="2 tỷ - 5 tỷ" name="level" />
                        <label for="2ty5ty">2 tỷ - 5 tỷ</label>
                    </div>
                    <div class="item">
                        <input type="radio" id="5ty10ty" value="5 tỷ - 10 tỷ" name="level" />
                        <label for="5ty10ty">5 tỷ - 10 tỷ</label>
                    </div>
                    <div class="item">
                        <input type="radio" id="10ty15ty" value="Trên 10 tỷ – 15 tỷ" name="level" />
                        <label for="10ty15ty">Trên 10 tỷ – 15 tỷ</label>
                    </div>
                    <div class="item">
                        <input type="radio" id="over15ty" value="Trên 15 tỷ" name="level" />
                        <label for="over15ty">Trên 15 tỷ</label>
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