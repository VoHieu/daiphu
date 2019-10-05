(function () {
    $(document).ready(function () {

        $('.wpcf7-form').keydown(function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
            }
        });
        $('.wpcf7-form').submit(function (e) {
            var count = 0;
            if ($('.wpcf7-form input[type=text]').val().length == 0) {
                count++;
            };
            if ($('.wpcf7-form input[type=tel]').val().length == 0) {
                count++;
            };
            if ($('.wpcf7-form input[type=number]').val().length == 0) {
                count++;
            };
            if ($('.wpcf7-form input[type=email]').val().length == 0) {
                count++;
            };
            if(count >0){
                e.preventDefault();
                alert('Dữ liệu không được rỗng');
            }
            var email = $('.wpcf7-form input[type=email]').val();
            if (IsEmail(email) === false){
                e.preventDefault();
                alert('Email không hợp lệ');
            }
        })
    });

})();

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email)) {
        return false;
    } else {
        return true;
    }
}