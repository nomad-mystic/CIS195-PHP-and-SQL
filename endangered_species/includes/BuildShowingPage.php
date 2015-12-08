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
//          echo '<img src="images/jumbotron_for_showing.jpg" class="img-responsive" alt="Image">';
          echo '  <div class="row center-block">' . "\n";
          echo '    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-5" id="js_select_area">' . "\n";
          echo '      <div class="panel panel-default">';
          echo '        <div class="panel-heading text-center"><h1>Click Thumb to Investigate</h1></div>' . "\n";
          echo '         <div class="panel-body">' . "\n";
          echo '           <div id="selectableArea"  class="center-block">' . "\n";
          foreach ($this->mSelected as $rec) {
               $thumb = $rec->getThumb();
               $id = $rec->getId();
               echo '          <div class="ui-state-default img-thumbnail center-block img-responsive" id="' . $id . '"';
               echo ' style="background: url('. $thumb . ') no-repeat; background-size: 100% auto;"';
               echo '></div>' . "\n";
          }
          echo '           </div>' . "\n";
          echo '         </div>' . "\n";
          echo '       </div>' . "\n";
          echo '     </div>' . "\n";
          echo '  <div class="col-xs-12 col-sm-7 col-md-6 col-lg-7" id="js_info_area">' . "\n";
          foreach ($this->mSelected as $rec) {
               $common = $rec->getCommon();
               $description = $rec->getDescription();
               $image = $rec->getImage();
               $science = $rec->getScience();
               $id = $rec->getId();
               $url = $rec->getUrl();
               echo '    <div class="panel panel-default" id="panel' . $id . '">' . "\n";
               echo '      <div class="panel-heading"><h1>' . $common . '</h1></div>' . "\n";
               echo '        <div class="panel-body">' . "\n";
               echo '          <div class="row">' . "\n";
               echo '            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">' . "\n";
               echo '              <h3>' . $url . '</h3>' . "\n";
               echo '              <h3>' . $science . '</h3>' . "\n";
               echo '              <h4><a href="' . $url . '" target="_blank">Wiki Article on ' . $common .'</a></h4>' . "\n";
               echo '              ' . $description  . "\n";
               echo '            </div>' . "\n";
               echo '            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 testing">' . "\n";
               echo '              <img src="' . $image . '" class="img-responsive center-block" alt="Image">' . "\n";
               echo '            </div>' . "\n";
               echo '         </div>' . "\n";
               echo '       </div>' . "\n";
               echo '     </div>' . "\n";
          }
          echo '    </div>' . "\n";
          echo '  </div>' . "\n";
          echo '</div>' . "\n";
     }
}