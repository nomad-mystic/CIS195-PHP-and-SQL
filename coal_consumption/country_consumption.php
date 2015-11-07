<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/5/2015
 * Time: 12:56 AM
 */

require_once('includes/constants.php');
require_once('includes/functions.php');


$user_input = $_POST['user_input'];

$array_data = create_country_array();

$country_names_array = country_names($array_data);

$validated_input = validation($user_input, $country_names_array);

find_country($validated_input, $array_data);