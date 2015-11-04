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
     foreach($hand as $card) {
          show_card($card);
     }
     echo '</div>';
}

function show_card($card) {
     echo '<div class="card">' . "\n";
     echo '<img class="card_image" src="' . card_name($card) . '">' . "\n";
     echo '</div>';

}

function card_name($card) {
     $ranks = RANK_NAMES;
     $suit = SUIT_NAMES;
     return IMAGES . $ranks[$card[RANK_FIELD]] . '_of_' . $suit[$card[SUIT_FIELD]] . '.png';
}

function show_content($hand) {
     echo '<div id="content">' . "\n";
     show_hand($hand);
     echo '</div>';
}