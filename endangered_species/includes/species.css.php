<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/3/2015
 * Time: 5:25 PM
 */

header('Content-Type: text/css');

 ?>



.jumbotron {

      background-color: transparent;
      background: url('../images/jumbotron.jpg') no-repeat;

 }
@media screen and (min-width: 768px) {
     body .jumbotron {
          padding-top: 10% !important;
          padding-bottom: 10% !important;

     }
}

/*----------for jquery----*/

#feedback {
     font-size: 1.4em;
}
#selectable .ui-selecting {
     background: #FECA40;
}
#selectable .ui-selected {
     background: #F39814;
     color: white;
}
#selectable {
     list-style-type: none;
     margin: 0;
     padding: 0;
     width: 450px;
}
#selectable li {
     margin: 3px;
     padding: 1px;
     float: left;
     width: 100px;
     height: 80px;
     font-size: 4em;
     text-align: center;
}