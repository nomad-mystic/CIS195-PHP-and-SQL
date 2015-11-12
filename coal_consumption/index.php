<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/5/2015
 * Time: 12:48 AM
 */
require_once('includes/constants.php');
require_once('includes/functions.php');

header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");

?>

<!doctype html>
<html lang="en">
     <?php require_once('includes/main_head.php'); ?>
     <body>

          <div class="float">
               <h1>Annual Coal Consumption by Country</h1>

               <h3>Total annual coal consumption by country from 1980 to 2008 (available as Quadrillion Btu). Downloaded from
                    the Energy Information Administration (EIA)'s International Energy Statistics portal</h3>

               <h4>Please Enter a country to see the coal consumption of that country.</h4>

               <?php display_form('POST', TARGET_PAGE); ?>
          </div>
          <div class="float">
               <img src="<?php echo MAP_PICTURE_PATH;?>" alt="SOURCE=http://www.psdgraphics.com/file/world-map-background.jpg">
          </div>

     </body>
</html>