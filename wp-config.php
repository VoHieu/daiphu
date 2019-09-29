<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p3crBw5#y[|>uW32sE6~4m;mI56q0(==,QW,f$:1H7U+#Lo$8<.W5+6KoHjn0^C*' );
define( 'SECURE_AUTH_KEY',  'I9$cq6-~0&k|>M*+wHNE$()*]IN.p)Z44#AZSV^{N5xc?R{{pE0e`h!i8UE[wzMK' );
define( 'LOGGED_IN_KEY',    ';{x6#R&:i.g@bM2<<-mtX(/LS]tJZ^:(y}l(lOxN6|>N$>1naD0WTLA1iIK%;%J-' );
define( 'NONCE_KEY',        'i@@CY^7Hpz$Oa~6qLJc9n$< ^r8P 9kCa|8 %a|l(3(vTQI>4eVJjljB7Yu|)EpL' );
define( 'AUTH_SALT',        ']a,ikXxk?Vb!y5]UgTxK C^m8a0[eSZ&3KK4>Ko&hD[-{z,{u/kS^#.DF_5yH6Nq' );
define( 'SECURE_AUTH_SALT', '4HSi01$d/10M=3&pl%`Ae$>MqJ5>6sC=Hw:toXQE8Lsls#`V6Fif]?+z?it&@fMM' );
define( 'LOGGED_IN_SALT',   'GEc;mG#|V>86%%mopeGFLod+2UME9Vm=/ u%wI~>qu`Z*O9,x[(p9P;k6h`p~Y u' );
define( 'NONCE_SALT',       'a?luaD!i8)M+~upkRRSKlkb&32d4.^`@s:FfrX4$FU}m|a;Bz(jUvACkAh< iu`;' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
