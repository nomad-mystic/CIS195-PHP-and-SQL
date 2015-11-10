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

$test_JSON = find_country($validated_input, $array_data);


?>

<!doctype html>
<html lang="en">

     <?php require_once('includes/main_head.php'); ?>

     <script src="bower_components/Chart.js/Chart.js"></script>
     <script src="includes/coal.js.php"></script>

     <body onload="init('<?php echo $test_JSON; ?>');">

     <canvas id="c" width="1000" height="1000"></canvas>


     </body>
</html>
