(function () {
    $(document).ready(function () {
        $('.wpcf7-form').keydown(function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
            }
        });
        $('.wpcf7-form').submit(function (e) {
            if ($('.wpcf7-form input[type=text]').val().length === 0) {
                e.preventDefault();
                alert('Dữ liệu không được rỗng');

            }
        })
    });

})();