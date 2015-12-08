<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/3/2015
 * Time: 5:36 PM
 */
require_once('includes/species_constants.php');

?>


<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>landing_page</title>
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">
     <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="includes/species.css.php" type="text/css">
</head>
<body>
<img src="images/jumbotron_for_landing.jpg" class="img-responsive" alt="Image">
<div class="container-fluid landing_page">
     <div class="row center-block">
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2">
               <div class="page-header text-center">
                 <h1>Endangered Species Investigator</h1>
               </div>
          </div>
     </div>
	<div class="row formContainer center-block">
<!--          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 center-block"></div>-->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block">
               <div class="panel panel-default">
                    <div class="panel-body">
                         <form action="showing_page.php" method="post" role="form" class="text-center">
                              <legend>Select Animal Type</legend>

                              <div class="form-group">
                                   <div class="radio">
                                        <label>
                                             <input type="radio" name="animal_type" id="1" value="mammal">
                                             Mammal
                                        </label>
                                        <label>
                                             <input type="radio" name="animal_type" id="2" value="birds">
                                             Birds
                                        </label>
                                        <label>
                                             <input type="radio" name="animal_type" id="3" value="reptiles">
                                             Reptiles
                                        </label>
                                        <label>
                                             <input type="radio" name="animal_type" id="4" value="amphibians">
                                             Amphibians
                                        </label>
                                        <label>
                                             <input type="radio" name="animal_type" id="5" value="fish">
                                             Fish
                                        </label>
                                   </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                    </div>
               </div>
          </div>
	</div>
</div>
<img src="images/jumbotronFooter.jpg" class="img-responsive" alt="Image">
</body>
</html>
