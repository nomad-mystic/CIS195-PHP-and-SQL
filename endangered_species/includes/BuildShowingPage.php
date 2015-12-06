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
                              for ($i = 0; $i < 3; $i++) {
                                   echo '<li class="ui-state-default" id="' . $i++ . '"></li>';
                              }
//                              foreach ($this->mRecords as $rec) {
//                                   $image = $this->getImage();
//                                   $id = $this->getId();
//                                   print_r($id);
//                                   echo '<li class="ui-state-default" id="1"></li>';
//                              }
                         echo '</ol>';
                    echo '</div>' . "\n";
                    echo '<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="js-infoArea">' . "\n";
                              echo '<img src="' . $this->getImage() . '">';
//                              var_dump($this->getImage());
                    echo '</div>' . "\n";
               echo '</div>' . "\n";
          echo '</div>' . "\n";
     }
}