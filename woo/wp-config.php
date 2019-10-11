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
define( 'DB_NAME', 'woo' );

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
define( 'AUTH_KEY',         '#|<.lR-QRZlWNMbP fzWfHyr%nG i^P!CtzgH7TG4<]>9AE2_^A).R56[)zVW/2T' );
define( 'SECURE_AUTH_KEY',  '<u*Qr|^bcdyf_%NX1GJS0<G6wG u^*H2C$yfMCP<b{}U#W$$n;O4<{68V8ZIUT$t' );
define( 'LOGGED_IN_KEY',    'zT;lBpwOP 6u[;~*9+bKm%LXE4o-Y~XrS.+F dIYG7kew3,V{YoWBJ9}:B+A2Tp ' );
define( 'NONCE_KEY',        'D,8+hV#f7gfKHYJM^}rL?^i2}j1mMbBC!~U9a-cG4@;|x}ypQs8fK[SD@n2;72=P' );
define( 'AUTH_SALT',        ':! wB9uj,+UZp?#Zh^/H=<6uKb#sugM?mTH{4kMOm[GT=!&<v*gPn;8E7oM[o!2V' );
define( 'SECURE_AUTH_SALT', 'o{2a5d[;Yek[@:xO3_^ok}eb!&P?`hY=o*,(L2s,g+ IlZY2lwfZNxu6+^Ul2@y!' );
define( 'LOGGED_IN_SALT',   'MhZV|e;J 4,h}Ka$4+k NIvraP+$#0hgq2Q5QMO/b8@RrR${a,.+*T{QA)?0`@gj' );
define( 'NONCE_SALT',       'o^ojIMmtPj]3].Di-H/pNx+d*YK=T)irJT0=<U[$5ydD<tO&OUep(D]}e|{5DH$2' );

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
