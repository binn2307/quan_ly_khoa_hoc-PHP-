<?php

//khai báo hằng số để kiểm tra xem truy cập có hợp lệ ko
//nếu ko thì điều hướng tới /errors
const _BIN = true;
/**Nếu ko có hằng số này thì dù là ai cũng có thể truy cập file hệ thống
 * cho nên cần có để bảo mật hệ thống
 */

//Khai báo database
const _HOST = 'localhost';
const _DB = 'qua_ly_khoa_hoc';
const _USER = 'root';
const _PASS = '';
const _DRIVER = 'mysql';

//debug error
const _DEBUG = true;

//thiết lập đường dẫn host thay vì gọi http://localhost/quản_lý_khóa_học/
define('_HOST_URL','http://'.$_SERVER['HTTP_HOST'].'/quản_lý_khóa_học');
define('_HOST_URL_TEMPLATES', _HOST_URL . '/templates'); // http://localhost/quản_lý_khóa_học/templates

//thiết lập đường đãn path E:\Xampp\htdocs\quản_lý_khóa_học
define('_PATH_URL',__DIR__); //DIR sẽ lấy path của file hiện tại
define('_PATH_URL_TEMPLATES', __DIR__ . '/templates'); // E:\Xampp\htdocs\quản_lý_khóa_học/templates

// Tạo đường dẫn ban đầu vào dashboard/index
const _MODULE = 'dashboard';
const _ACTION = 'index';
?>