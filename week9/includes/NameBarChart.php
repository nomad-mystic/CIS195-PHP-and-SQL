<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/2/2015
 * Time: 1:58 AM
 */

class NameBarChart extends BarChart
{
     function getValue($point)
     {
          return 100 * $point->getCount() / $point->getTotal();
     }
     function getLabel($point)
     {
          return $point->getYear();
     }
     function getTitle($point)
     {
          return $point->getYear() . ": " . $point->getCount();
     }
     function getAnchor($point)
     {
          return 'year.php?' . YEAR_KEY . '=' . $point->getYear() . '&' . GENDER_KEY . '=' . $point->getGender();
     }
}