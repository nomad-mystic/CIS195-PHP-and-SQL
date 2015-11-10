<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/4/2015
 * Time: 1:35 AM
 */


function make_deck() {

     $deck = [];
     for($rank = 0; $rank < RANK_COUNT; $rank++) {
          for($suit = 0; $suit < SUIT_COUNT; $suit++) {
               $deck[] = [$rank, $suit];
          }
     }
     shuffle($deck);

     return $deck;
}

function deal(&$deck) {
     $hand = array_slice($deck, 0, HAND_CARDS);
     $deck = array_slice($deck, HAND_CARDS);
     return $hand;
}

function show_hand($hand) {
     echo '<div id="hand">' . "\n";
     for($card = 0; $card < HAND_CARDS; $card++) {
          show_card($hand[$card], $card);

     }
     echo '</div>';
}

function show_card($card, $id)
{
     echo '<div class="card">' . "\n";
     echo '<img class="card_image" ' . CARD_ID . '="' . $id . '" src="' . card_name($card) . '" ' . CARD_SRC . '="' . card_name($card) . '">' . "\n";
     echo '</div>';

}

function card_name($card)
{
     $ranks = RANK_NAMES;
     $suit = SUIT_NAMES;
     return IMAGES . $ranks[$card[RANK_FIELD]] . '_of_' . $suit[$card[SUIT_FIELD]] . '.png';
}

function show_draw()
{
     echo '<div id="info">' . "\n";
     echo '    <span id="draw_button">Draw</span>' . "\n";
     echo '</div>' . "\n";
}

function show_content($hand)
{
     echo '<div id="content">' . "\n";
     show_hand($hand);
     show_draw();
     echo '</div>';
}

function output_form($hand, $deck)
{

     echo '<form method="POST" action="draw.php" id="draw_form">' . "\n";
     echo '    <input type="hidden" name="' . HAND_KEY . '" value="' . urlencode(json_encode($hand)) . '">' . "\n";
     echo '    <input type="hidden" name="' . DECK_KEY . '" value="' . urlencode(json_encode($deck)) . '">' . "\n";
     for ($card = 0; $card < HAND_CARDS; $card++) {
          echo '    <input type="hidden" name="' . CARD_KEY . $card . '" id="' . CARD_KEY . $card . '" value="' . KEEP . '">' . "\n";
     }
     echo '</form>';
}