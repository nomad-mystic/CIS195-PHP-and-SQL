<?php
/**chosen*/

require_once('includes/constants.php');
require_once('includes/functions.php');
require_once('includes/functions_stack.php');

?>

<!doctype html>
<html lang="en">
     <?php require_once('includes/main_head.php'); ?>

     <body onload="init(<?php echo $json_data; ?>);">
          <?php echo '<h1 class="chosen_country">The Coal Consumption of ' . $validated_input . '</h1>' . "\n"; ?>
          <canvas id="canvas" width="1000" height="600"></canvas>
     </body>
</html>
