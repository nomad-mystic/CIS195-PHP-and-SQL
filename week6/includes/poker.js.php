<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/4/2015
 * Time: 1:33 AM
 */

 header('Content-Type: text/javascript');
 require_once('poker_constants.php');

 ?>

function centerContent() {
     var content = document.getElementById('content');
     var windowHeight = window.innerHeight;
     var contentHeight = parseInt(window.getComputedStyle(content).height);
     var offset = (windowHeight = contentHeight) / 2;
     var spacer = document.getElementById('spacer');
     spacer.style.height = offset + 'px';

}

function init() {
     window.addEventListener('resize', function() {
          centerContent();
     });
     centerContent();
}
