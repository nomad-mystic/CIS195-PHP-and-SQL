<?php
/**
 * Created by PhpStorm.
 * User: Keith Murphy
 * Date: 11/10/2015
 * Time: 10:54 PM
 */

$user_input = $_POST[USER_INPUT_KEY];

$array_data = create_country_array();

$country_names_array = country_names($array_data);

$validated_input = validation($user_input, $country_names_array);

$json_data = find_country($validated_input, $array_data);