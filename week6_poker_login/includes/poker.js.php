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

function submitForm() {
     var drawForm = document.getElementById('draw_form');
     drawForm.submit();
}

function getDraw(id){
     return document.getElementById('<?php echo CARD_KEY; ?>' + id).value;

}

function setDraw(id, draw) {
     document.getElementById('<?php echo CARD_KEY; ?>' + id).value = draw;

}

function toggleCard(card) {
     var id = card.getAttribute('<?php echo CARD_ID; ?>');

     if(getDraw(id) == '<?php echo DRAW; ?>') {
          setDraw(id, '<?php echo KEEP; ?>');
          card.src = card.getAttribute('<?php echo CARD_SRC; ?>');
     } else {
          setDraw(id, '<?php echo DRAW; ?>');
          card.src = '<?php echo CARD_BACK; ?>';
     }
}

function makeCardsClickable() {
     var cards = [].slice.call(document.getElementsByClassName('<?php echo CARD_CLASS; ?>'));
     cards.forEach(function(card) {
          card.addEventListener('click', function() {
               toggleCard(card);
          });
     });
}

function init() {
     window.addEventListener('resize', function() {
          centerContent();
     });
     centerContent();

     var draw_button = document.getElementById('draw_button');
     draw_button.addEventListener('click', function() {
          submitForm();
     });
     makeCardsClickable();
}
