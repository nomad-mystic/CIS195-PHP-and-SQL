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
     $( "#selectableArea" ).selectable({
          selected: function(event, ui) {
               var $selected = ui.selected;

               revelInfoBox($selected);
          }
     });

     function revelInfoBox($selected) {
          var $selectedId = $selected.id;
          var $infoArea = $('#js_info_area');
          var $foundItem = $infoArea.find('#panel' + $selectedId);
          var $findVisible = $infoArea.find('.clicked');

          if ($selectedId) {
               if ($foundItem.hasClass('clicked')) {
                    $foundItem.stop().velocity({
                         opacity: 0

                    }, 500);
                    $foundItem.removeClass('clicked');
               } else {
                    $findVisible.stop().velocity({
                         opacity: 0
                    }, 200);
                    $foundItem.stop().velocity({
                         opacity: 1
                    }, 500);
                    $foundItem.addClass('clicked');
               }
          } // End if($selectedId)
     } // End revelInfoBox()
 });