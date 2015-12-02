<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/30/2015
 * Time: 7:02 PM
 */

header('Content-Type: text/css');

 ?>


#main {
     color: blue;
}
.bar_chart {
     cellspacing: 0px;
     border-spacing: 0;
     margin: 0 auto;
}
.bar {
     background-color: green;
     width: 20px;
     border-left: 1px solid black;
     border-top: 1px solid black;

}
.barchart_bar {
     vertical-align: bottom;
     padding: 0;
     font-size: 0;
}
.bar_label {
     -webkit-transform: rotate(90deg) scale(1, 0.8);
     -moz-transform: rotate(90deg) scale(1, 0.8);
     -ms-transform: rotate(90deg) scale(1, 0.8);
     -o-transform: rotate(90deg) scale(1, 0.8);
     transform: rotate(90deg) scale(1, 0.8);
}
.barchart_label {
     max-width: 20px;
     padding: 0;
     font-family: sans-serif;
     font-size: 12px;
     cursor: pointer;;
}
.center {
     text-align: center;
}
.barchart_label_anchor {
     color: #000;
     text-decoration: none;
}
#metaphone {
     text-decoration: none;
     color: green;

}