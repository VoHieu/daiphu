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
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/full-page.js")?>'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wp_vars = {"ajaxurl":"https:\/\/novabeachcamranh.com.vn\/wp-admin\/admin-ajax.php","homeurl":"https:\/\/novabeachcamranh.com.vn","themeurl":"https:\/\/novabeachcamranh.com.vn\/wp-content\/themes\/novabeach"};
    /* ]]> */
</script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/common.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/function.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/jquery.panzoom.min.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/single.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/cac-loai-bat-dong-san-detail.js")?>'></script>
<script type='text/javascript' src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/index.js")?>'></script>
<script type="text/javascript" src='<?php printf(get_site_url()."/wp-content/themes/daiphu/assets/js/ctf.js")?>'></script>

</body>

</html>
<script>
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
            videoId: 'ZcAWkfRVlzE',
            playerVars: {
                'autoplay': 1,
                'controls': 0,
                'rel': 0,
                'showinfo': 0,
                'modestbranding': 1,
                'loop': 1,
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    var myPlayerState;

    function onPlayerReady(event) {
        event.target.playVideo();
        player.mute();

    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {
            player.seekTo(0);
            player.playVideo();

        }
        if (event.data == YT.PlayerState.PLAYING) {
            // DO THIS
            $('#mod-menu-sider-bar-touch').addClass('active');
            $('.ytp-pause-overlay-controls-hidden .ytp-pause-overlay').css('display', 'none !important');
            document.getElementsByClassName("ytp-pause-overlay ytp-scroll-min")[0].remove();
            player.unMute();

        } else {
            $('#mod-menu-sider-bar-touch').removeClass('active');
        }
        myPlayerState = event.data;
    }

    if (myPlayerState == 1) {

    }


    $('.icon-volume').on('click', function () {
        player.unMute();
        $('#section1').removeClass('volume-off');
    });
    $('.icon-volume-off').on('click', function () {
        player.mute();
        $('#section1').addClass('volume-off');
    });
</script>