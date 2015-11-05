<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/5/2015
 * Time: 12:56 AM
 */

require_once('includes/constants.php');
require_once('includes/functions.php');


$user_input = $_POST['name'];

$array_data = create_country_array();

$validated_input = validation($user_input);

find_country($validated_input, $array_data);