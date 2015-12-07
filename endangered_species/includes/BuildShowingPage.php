<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/4/2015
 * Time: 1:10 AM
 */

class BuildingShowingPage extends EndangeredSpeciesRecord
{
     protected $mSelected;


     function __construct($records)
     {
          $this->mSelected = $records;
     }

     function buildPage()
     {
          echo '<div class="container-fluid">' . "\n";
               echo '<div class="row center-block">' . "\n";
                    echo '<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" id="js_select_area">' . "\n";
                         echo '<div id="selectableArea"  class="center-block">';
                              foreach ($this->mSelected as $rec) {
                                   $thumb = $rec->getThumb();
                                   $id = $rec->getId();
                                   echo '<div class="ui-state-default img-thumbnail" id="' . $id . '"';
                                   echo 'style="background: url('. $thumb . ') no-repeat; background-size: 100% auto;"';
                                   echo '></div>';
                              }
                         echo '</div>';
                    echo '</div>' . "\n";
                    echo '<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" id="js_info_area">' . "\n";
                         foreach ($this->mSelected as $rec) {
                              $common = $rec->getCommon();
                              $description = $rec->getDescription();
                              $image = $rec->getImage();
                              $science = $rec->getScience();
                              $id = $rec->getId();
                              $url = $rec->getUrl();
                              echo '<div class="panel panel-default" id="panel' . $id . '">' . "\n";
                              echo '<div class="panel-heading"><h1>' . $common . '</h1></div>';
                              echo '<div class="panel-body">';
                                        echo '<div class="row">';
                                        	echo '<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">';
                                                  echo '<h3>' . $url . '</h3>';
                                                  echo '<h3>' . $science . '</h3>';
                                                  echo '<h4><a href="' . $url . '" target="_blank">Wiki Article on ' . $common .'</a></h4>';
                                                  echo '<p>' . $description . '</p>';
                                        	echo '</div>';
                                             echo '<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">';
                                             echo  '<img src="' . $image . '" class="img-responsive center-block" alt="Image">';
                                             echo '</div>';
                                        echo '</div>';
                              echo '</div>';
                              echo '</div>';
                         }
                    echo '</div>' . "\n";
               echo '</div>' . "\n";
          echo '</div>' . "\n";
     }
}