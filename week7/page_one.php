<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/17/2015
 * Time: 10:42 PM
 */


session_start();

$_SESSION['my array'] = ['Kiwi', 'Strawberry', 'apple', 'pear'];
$_SESSION['my name'] = 'Keith';

echo 'Hello World';