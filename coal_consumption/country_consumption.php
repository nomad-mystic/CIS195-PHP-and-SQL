<?php
/**chosen*/

require_once('includes/constants.php');
require_once('includes/functions.php');


$user_input = $_POST[USER_INPUT_KEY];

$array_data = create_country_array();

$country_names_array = country_names($array_data);

$validated_input = validation($user_input, $country_names_array);

$json_data = find_country($validated_input, $array_data);

?>

<!doctype html>
<html lang="en">
     <?php require_once('includes/main_head.php'); ?>

     <body onload="init(<?php echo $json_data; ?>);">
          <?php echo '<h1 class="chosen_country">' . $validated_input . '</h1>' . "\n"; ?>
          <canvas id="canvas" width="1000" height="600"></canvas>
     </body>
</html>
