<?php
require_once '../conf/const.php';
require_once MODEL_PATH. 'functions.php';
require_once MODEL_PATH. 'user.php';
require_once MODEL_PATH. 'item.php';
require_once MODEL_PATH. 'cart.php';
require_once MODEL_PATH. 'history.php';

session_start();

if(is_logined() === false) {
    redirect_to(LOGIN_URL);
}

$db = get_db_connect();
$user = get_login_user($db);

$historys = get_history($db, $user['user_id']);
$historys_all = get_all_history($db);

$history_id = get_get('history_id');

$details = get_detail($db, $history_id);
$details_all = get_all_detail($db);
include_once VIEW_PATH. 'detail_view.php';