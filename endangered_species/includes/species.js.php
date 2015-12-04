<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 12/3/2015
 * Time: 5:25 PM
 */

 header('Content-Type: text/javascript');

 ?>



$(document).ready(function() {
     $( "#selectable" ).selectable({
          selected: function(event, ui) {
               console.log(event);
          }
     });

 });