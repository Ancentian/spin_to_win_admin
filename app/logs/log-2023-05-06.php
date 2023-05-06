<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-06 10:09:02 --> Severity: error --> Exception: syntax error, unexpected variable "$query" C:\xampp\htdocs\admin_spinner\app\models\Home_model.php 99
ERROR - 2023-05-06 11:49:04 --> Severity: error --> Exception: Too few arguments to function Draw::drawWinners(), 0 passed in C:\xampp\htdocs\admin_spinner\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\admin_spinner\app\controllers\Draw.php 144
ERROR - 2023-05-06 11:59:13 --> Severity: error --> Exception: syntax error, unexpected identifier "get_allDrawWinners", expecting ";" or "{" C:\xampp\htdocs\admin_spinner\app\controllers\Draw.php 128
ERROR - 2023-05-06 12:01:57 --> Severity: Warning --> Undefined variable $winners C:\xampp\htdocs\admin_spinner\app\views\draws\allWinners.php 47
ERROR - 2023-05-06 12:01:57 --> Severity: Warning --> foreach() argument must be of type array|object, null given C:\xampp\htdocs\admin_spinner\app\views\draws\allWinners.php 47
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 52
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 52
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:24:40 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:27:07 --> Query error: Unknown column 'draw_option.draw_id' in 'field list' - Invalid query: SELECT `draw_users`.*, `draw_spins`.`id` as `drawSpID`, `draw_spins`.`user_id`, `draw_spins`.`draw_id`, `draws`.`id` as `drawID`, `draws`.`title`, `draw_options`.`id` as `optID`, `draw_option`.`draw_id`, `draw_options`.`title` as `optionTitle`, `draw_options`.`voucher`
FROM `draw_users`
LEFT JOIN `draw_spins` ON `draw_spins`.`user_id` = `draw_users`.`id`
JOIN `draws` ON `draws`.`id` = `draw_spins`.`draw_id`
LEFT JOIN `draw_options` ON `draw_options`.`draw_id` = `draws`.`id`
ORDER BY `draw_spins`.`id` DESC
ERROR - 2023-05-06 12:27:07 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\admin_spinner\app\models\Draw_model.php 35
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 52
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 52
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:27:24 --> Severity: Warning --> Undefined array key "option_id" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:29:18 --> Query error: Unknown column 'draw_options.option_id' in 'field list' - Invalid query: SELECT `draw_users`.*, `draw_spins`.`id` as `drawSpID`, `draw_spins`.`user_id`, `draw_spins`.`draw_id`, `draw_options`.`option_id`, `draws`.`id` as `drawID`, `draws`.`title`, `draw_options`.`id` as `optID`, `draw_options`.`draw_id`, `draw_options`.`title` as `optionTitle`, `draw_options`.`voucher`
FROM `draw_users`
LEFT JOIN `draw_spins` ON `draw_spins`.`user_id` = `draw_users`.`id`
JOIN `draws` ON `draws`.`id` = `draw_spins`.`draw_id`
LEFT JOIN `draw_options` ON `draw_options`.`draw_id` = `draws`.`id`
ORDER BY `draw_spins`.`id` DESC
ERROR - 2023-05-06 12:29:18 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\admin_spinner\app\models\Draw_model.php 35
ERROR - 2023-05-06 12:29:34 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:29:34 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:29:34 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:29:34 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:29:34 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:29:34 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:29:34 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:29:34 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:30:46 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:30:46 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:30:46 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:30:46 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:30:46 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:30:46 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:30:46 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:30:46 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:39:06 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:39:06 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:39:06 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:39:06 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:39:06 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:39:06 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:39:06 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:39:06 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:41:03 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:41:03 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:41:03 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:41:03 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:41:03 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:41:03 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:41:03 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:41:03 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:44:29 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:44:29 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:44:29 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:44:29 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
ERROR - 2023-05-06 12:44:29 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 60
ERROR - 2023-05-06 12:44:29 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 62
ERROR - 2023-05-06 12:44:29 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 68
ERROR - 2023-05-06 12:44:29 --> Severity: Warning --> Undefined array key "collection_status" C:\xampp\htdocs\admin_spinner\app\views\draws\drawSpins.php 72
