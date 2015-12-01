<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/1/2015
 * Time: 3:04 AM
 */


class BarChart
{
     private $sequence;
     private $maxHeight;


     function __construct($s, $m)
     {
          $this->sequence = $s;
          $this->maxHeight = $m;
     }

     function draw ()
     {
          $max_value = 0;
          foreach ($this->sequence as $data_point){
               $value = $this->getValue($data_point);
               if ($value > $max_value) {
                    $max_value = $value;
               }
          }
          echo '<table class="bar_chart">' . "\n";
          echo '    <tr class="barchart_bars">' . "\n";
          foreach ($this->sequence as $data_point) {
               $value = $this->getValue($data_point);
               $percent = $this->maxHeight * $value / $max_value;

               echo '         <td class="barchart_bar">';
               echo '<div class="bar" style="min-height: ' . $percent . 'px;">&nbsp;</div>';
               echo '</td>' . "\n";

          }
          echo '    </tr>' . "\n";
          echo '    <tr class="bar_chart_labels">' . "\n";
          foreach ($this->sequence as $data_point) {
               $value = $this->getLabel($data_point);

               echo '         <td class="barchart_label">';
               echo '<div class="bar_label">' . $value . '</div>';
               echo '         </td>' . "\n";

          }
          echo '    </tr>' . "\n";
          echo '</table>';
     }

     function getValue($point)
     {
        return 100 * $point->getCount() / $point->getTotal();
     }
     function getLabel($point)
     {
          return $point->getName();
     }
}