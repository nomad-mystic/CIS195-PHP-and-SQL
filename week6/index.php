<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/4/2015
 * Time: 1:36 AM
 */
require_once('includes/poker_constants.php');
require_once('includes/poker_code.php');

$deck = make_deck();
$hand = deal($deck);


?>

<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Video Poker</title>
     <link rel="stylesheet" type="text/css" href="includes/poker.css.php">
     <script src="includes/poker.js.php"></script>
</head>
<body>


<?php show_content($hand); ?>
</body>
</html>
