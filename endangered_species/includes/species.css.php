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

.clicked {
     z-index: 1000 !important;
}
/*----------for jquery----*/

#feedback {
     font-size: 1.4em;
}
#selectableArea .ui-selecting {
     background: #FECA40;
}
#selectableArea .ui-selected {
     background: #F39814;
     color: white;
}
#selectableArea {
     list-style-type: none;
}
#js-selectArea {
     border: solid 2px rgba(0,0,0,.5);
     margin: 0 auto;
}
#selectableArea div {
     margin: 3px;
     padding: 1px;
     float: left;
/*     width: 200px;*/
/*     height: 200px;*/
     font-size: 4em;
     text-align: center;
     cursor: pointer;
}

/* for the showing page */
.container-fluid {
     margin: 5% auto;
}
#js_info_area {
     position: relative;
}
#js_info_area .panel {
     opacity: 0;
     position: absolute;
     top: 0;
     left: 0;
}

/* Media Queries */
@media screen and (max-width: 767px) {
     #selectableArea div {
          width: 100px;
          height: 100px;
     }
}
@media screen and (min-width: 768px) {
     body .jumbotron {
          padding-top: 10% !important;
          padding-bottom: 10% !important;

     }
     #selectableArea div {
          width: 100px;
          height: 100px;
     }
}
@media screen and (min-width: 1280px) {
     #selectableArea div {
          width: 175px;
          height: 175px;
     }
}