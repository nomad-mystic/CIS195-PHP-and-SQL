<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/17/2015
 * Time: 10:52 PM
 */


session_start();

ob_start();
echo session_id() . '<br>';

echo session_name() . '<br>';

$session_info = session_get_cookie_params();

echo '<pre>';

print_r($session_info);

echo '</pre>';

$_SESSION = [];
setcookie(session_name(), '', 0, $session_info['path'], $session_info['domain'], $session_info['secure'], $session_info['httponly']);

session_destroy();
ob_end_flush();