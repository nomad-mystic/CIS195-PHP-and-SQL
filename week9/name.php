<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/30/2015
 * Time: 7:01 PM
 */

require_once('includes/constants.php');
require_once('includes/db_constants.php');
include_once('includes/NamePopularityRecord.php');
include_once('includes/NamePopularitySet.php');
include_once('includes/NameSet.php');
require_once('includes/code.php');
require_once('includes/BarChart.php');
require_once('includes/NameBarChart.php');



//$marc = new NamePopularityRecord('Marc', 'M', 1962, 1500, 900000, metaphone('Marc'));
//$marc->setName('Marc');
//$marc->setGender('M');
//$marc->setYear(1962);
//$marc->setCount(1500);
//$marc->setTotal(900000);

//$jill = new NamePopularityRecord('Jill', 'F', 1990, 3000, 1000000, metaphone('Jill'));
//$jill->setName('Jill');
//$jill->setGender('F');
//$jill->setYear(1990);
//$jill->setCount(3000);
//$jill->setTotal(100000);


$name = isset($_GET[NAME_KEY]) ? $_GET[NAME_KEY] : 'Mary';
$gender = isset($_GET[GENDER_KEY]) ? $_GET[GENDER_KEY] : 'F';
$metaphone = metaphone($name);

$records = new NameSet($name, $gender, $metaphone);
$chart = new NameBarChart($records->getRecords(), BAR_CHART_HEIGHT);

?>

<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Week 9 Object-Orientated Programming</title>
     <link rel="stylesheet" href="includes/week9.css.php" type="text/css">
     <script src="includes/week9.js.php"></script>
</head>
<body>

<div class="center"><h1>Report for <?php echo $name; ?>
          [<a id="metaphone" href="<?php echo 'metaphone.php?' .  METAPHONE_KEY . '=' . $metaphone . '&' . GENDER_KEY . '=' . $gender; ?>"><?php echo $metaphone; ?>
          ]</a></h1></div>
     <?php $chart->draw(); ?>
<!--//          print_r($marc);-->
<!--//          print_r($jill);-->
<!--//     echo $jill->getName() . ": " . number_format($jill->percentage(), 4) ."%<br>";-->
<!--//     echo $marc->getName() . ": " . number_format($marc->percentage(), 4) ."%<br>";-->
<!---->
<!--//     print_r($records);-->

<!--<div id="main" onclick="javascript:mainClicked();">Click Me</div>-->
<!--<div id="display"></div>-->
</body>
</html>
