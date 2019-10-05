(function () {
    $(document).ready(function () {

        $('.wpcf7-form').keydown(function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
            }
        });

        $('.form:eq(1) input[type=text]').click(function () {
            var x = $(this).index();
            alert(x);
        })
        //    var x = $().val();
        //    alert (x);
        // })
                                                                
        $('.wpcf7-form:nth-child(2)').submit(function (e) {


            var count = 0;
            if ($('form:eq(1) input[type=text]').val().length === 0) {
                count++;
            }
            if ($('form:eq(1) input[type=tel]').val().length === 0) {
               count++;
            }
            if ($('form:eq(1) input[type=email]').val.length === 0){
                count++;
            }
            if(count > 0){
                e.preventDefault();
                alert('Dữ liệu không được rỗng');

            }
            var email = $('form:eq(1) input[type=email]').val();

            if (IsEmail(email) === false) {
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