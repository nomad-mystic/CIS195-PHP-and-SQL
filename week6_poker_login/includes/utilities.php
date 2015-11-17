<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/16/2015
 * Time: 10:19 PM
 */


function require_secure()
{
     if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
          header('location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
          exit();
     }
}

function get_post_value($key)
{
     if (isset($_POST[$key])) {
          return htmlentities($_POST[$key]);
     }
     return '';
}

