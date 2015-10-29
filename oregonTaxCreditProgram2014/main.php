<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 10/23/2015
 * Time: 4:38 PM
 */

define('HEADER', 'header');
define('APP_NAME', 'app_name');


$array_data = [];
$get_data = fopen('data/energy_tax_data.csv', 'r');

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

$HEADER = $array_data[0];

?>
<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Oregon Tax Credit Program 2014</title>
     <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/styles.css">
     <style>

     </style>
</head>
<body>
<header class="header greySections">
     <div class="whiteCard">
          <h1>Business Energy Tax Credit Program: Fiscal Year 2014</h1>
          <p>Business Energy Tax Credit Program | Oregon Department of Energy</p>
          <p>The Business Energy Tax Credit program ended July 1, 2014 (HB 3672 in 2011 and HB 4079 in 2012) and tax credits are
               no longer being awarded under this program.</p>
          <ul>
               <li>This year's spreadsheet covers July 1, 2013 through June 30, 2014.</li>
               <li>Per statute, this list does not include final certificates issued for Combined Heat and Power or High Performance Homes projects.
                    Withdrawn, Denied, Inactive, Rejected, and Revoked Projects are also excluded.</li>
               <li>Every effort has been made to ensure the data are complete, but these records reflect information reported to this
                    agency by others. The Oregon Department of Energy is not responsible for data that is misinterpreted or altered in any way. </li>
               <li> If errors are discovered after publication of the records, the data are corrected in the electronic files. It is estimated that there
                    is a margin of error of less than one percent.</li>
          </ul>
     </div>
</header>
<section class="greySections">
     <div class="whiteCard table-responsive">
          <table class="table table-striped table-bordered table-hover table-responsive">
               <tbody>
               <?php
                    for($t=0; $t < count($array_data); $t++) {
                         $APP_NAME = $array_data[$t][0];
                         if($HEADER === $array_data[$t]) {
                              echo '<tr class="success">';
                              for($h=0; $h < count($HEADER); $h++) {

                                   echo '<th>' .'<span class="fa fa-newspaper-o"></span>' . $HEADER[$h] . '</th>';
                              }
                              echo '</tr>';

                         } else {
                              echo '<tr>';
                              for($i=0; $i < count($array_data[$t]); $i++) {
                                   echo "<td>" . $array_data[$t][$i] . "</td>";
                              }
                              echo '</tr>';

                         }
                    }
               ?>
               </tbody>
          </table>
     </div>
</section>


</body>
</html>
