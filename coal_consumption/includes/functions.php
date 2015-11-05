<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/5/2015
 * Time: 12:51 AM
 */
require_once('constants.php');

function validation($user_input) {

     if ($user_input === '') {
          echo '<h1>Please Enter a country</h1>';
     }
     $user_input = stripslashes(strip_tags($user_input));
     $user_input = str_replace("/", "", $user_input);
     $user_input = addslashes($user_input);

     return $user_input;
}

function find_country($user_input, $array_data) {

     $upper_user_input = ucfirst($user_input);
     for ($i = 0; $i < NUMBER_COUNTRIES; $i++) {
          if($array_data[$i][0] == $upper_user_input) {
               $current_key = key($array_data);
               echo $current_key;
               for($y = 0; $y < YEARS; $y++) {
//                    $current_country = [];
                    $current_country_point = $array_data[$i][$y];
                    $current_country[] = $current_country_point;
                    display_data($upper_user_input, $current_country);
               }
          }
     }
}

function create_country_array() {

     $array_data = [];
     $get_data = fopen('data/coal_consumption.csv', 'r');
     if(!$get_data) {
          echo '<p>Error something Happen to the file...</p>';
          exit;
     }
     do {
          $line = fgetcsv($get_data);
          if(!$line) {
               break;
          }
          $array_data[] = $line;
     } while($line);

     return $array_data;
}

function display_data($upper_user_input, $current_country) {
//     echo $upper_user_input;
//     $test_array = is_array($current_country);
//     echo $test_array;
//     var_dump($current_country);
//     print_r($current_country);
//     $sliced_country = array_slice($current_country, 29);
//     var_dump($sliced_country);
//     echo '<h1>' . $upper_user_input . '</h1>';
//     for($v = 0; $v < YEARS; $v++) {
//          echo '<p>' . $sliced_country[$v] . '</p>';
//     }
}