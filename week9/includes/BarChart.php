<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/1/2015
 * Time: 3:04 AM
 */


abstract class BarChart
{
     protected $sequence;
     protected $maxHeight;

     abstract function getValue($data_point);
     abstract function getTitle($data_point);
     abstract function getAnchor($data_point);
     abstract function getLabel($data_point);

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
               $pixels = floor($this->maxHeight * $value / $max_value);

               echo '         <td class="barchart_bar">';
               echo '<div class="bar" style="min-height: ' . $pixels . 'px;"';
               echo 'title="' . $this->getTitle($data_point) . '"';
               echo '>&nbsp;</div>';
               echo '</td>' . "\n";

          }
          echo '    </tr>' . "\n";
          echo '    <tr class="bar_chart_labels">' . "\n";
          foreach ($this->sequence as $data_point) {
               $value = $this->getLabel($data_point);

               echo '         <td class="barchart_label">';
               echo '<div class="bar_label">';
               echo '<a href="' . $this->getAnchor($data_point) . '" class="barchart_label_anchor">';
               echo $value;
               echo '</a></div>';
               echo '         </td>' . "\n";

          }
          echo '    </tr>' . "\n";
          echo '</table>';
     }
}