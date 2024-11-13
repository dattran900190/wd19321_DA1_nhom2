<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS

define('BASE_URL'       , 'http://localhost/wd19321_DA1_nhom2-main/wd19321_DA1_nhom2-main/du_an_1/');

// dường dẫn vào phần admin
define('BASE_URL_ADMIN'       , 'http://localhost/wd19321_DA1_nhom2-main/wd19321_DA1_nhom2-main/du_an_1/admin/');

define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'bd_xuong_thu_cung');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');
