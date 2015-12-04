<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/4/2015
 * Time: 1:10 AM
 */

class BuildingShowingPage extends EndangeredSpeciesRecord
{
     protected $mRecords;

//     abstract function   getType($data_point);


     function __construct($records)
     {
          $this->mRecords = $records;
     }

     function buildPage()
     {
          echo '<div class="container">' . "\n";
               echo '<div class="row">' . "\n";
                    echo '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="js-selectArea">' . "\n";
                         echo '<ol id="selectable">';
                              foreach($this->mRecords as $rec) {
//                                   echo '<li class="ui-state-default">' . $rec[$rec] . '</li>';
                              }
                         echo '</ol>';
                    echo '</div>' . "\n";
                    echo '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="js-infoArea">' . "\n";
                              echo '<img src="' . $this->getImage() . '">';
                              var_dump($this->getImage());']]]]]]]]]]]'
                    echo '</div>' . "\n";
               echo '</div>' . "\n";
          echo '</div>' . "\n";
     }
}