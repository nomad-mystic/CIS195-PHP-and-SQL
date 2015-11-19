<?php
/**
 * Created by PhpStorm.
 * User: Keith Murphy
 * Date: 11/10/2015
 * Time: 10:54 PM
 */

$user_input_1 = $_POST[USER_INPUT_KEY_1];
$user_input_2 = $_POST[USER_INPUT_KEY_2];

$array_data = create_country_array();
$country_names_array = country_names($array_data);

$validated_input_1 = validation($user_input_1, $country_names_array);
$validated_input_2 = validation($user_input_2, $country_names_array);

$json_data_1 = find_country($validated_input_1, $array_data);
$json_data_2 = find_country($validated_input_2, $array_data);