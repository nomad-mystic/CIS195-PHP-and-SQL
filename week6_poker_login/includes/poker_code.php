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

     if (get_session_value(FINAL_KEY)) {
          $hand = array_slice($deck, 0, HAND_CARDS);
          $deck = array_slice($deck, HAND_CARDS);
          set_session_value(HAND_KEY, $hand);
          set_session_value(DECK_KEY, $deck);
          set_session_value(FINAL_KEY, FALSE);
//          set_session_value(HANDS_PLAYED_KEY, (get_session_value(HANDS_PLAYED_KEY) + 1));
//          set_session_value(BALANCE_KEY, (get_session_value(BALANCE_KEY) - 1));
          return $hand;
     }
     $hand = get_session_value(HAND_KEY);
     $deck = get_session_value(DECK_KEY);
     return $hand;
}

function show_hand($hand) {
     echo '<div id="hand">' . "\n";
     for ($card = 0; $card < HAND_CARDS; $card++) {
          show_card($hand[$card], $card);

     }
     echo '</div>' . "\n";
}

function show_user()
{
//     $balance = get_session_value(BALANCE_KEY);
//     $hands_played = get_session_value(HANDS_PLAYED_KEY);
//     if ($hands_played !== '' && $hands_played !== 0) {
//          $expected = number_format($balance / $hands_played, 4);
//     } else {
//          $expected = 'UNKNOWN';
//     }

     echo '<div id="user_pane">' . "\n";
     echo      get_session_value(SESSION_USER_KEY) . ' [<a href="' . LOGOUT_PAGE . '">LOGOUT</a>]' . "<br>\n";
//     echo '    BALANCE: ' . $balance . "<br>\n";
//     echo '    HANDS PLAYED: ' . $hands_played . "<br>\n";
//     echo '    EXPECTED RETURN: ' . $expected . ' UNITS/HAND';
     echo '</div>' . "\n";
}

function show_card($card, $id)
{
//     echo '<div class="card">' . "\n";
//     echo '<img class="card_image" ' . CARD_ID . '="' . $id . '" src="' . card_name($card) . '" ' . CARD_SRC . '="' . card_name($card) . '">' . "\n";
//     echo '</div>';

     echo '<div class="card">' . "\n";
     echo '<img class="card_image"';
     echo 'data-id="' . $id . '"' . "\n";
     echo 'src="' . card_name($card) . '"';
     echo 'data-src="' . card_name($card) . '"';
     echo '>' . "\n";
     echo '</div>' . "\n";

}

function card_name($card)
{
     $ranks = RANK_NAMES;
     $suit = SUIT_NAMES;
     return IMAGES . $ranks[$card[RANK_FIELD]] . '_of_' . $suit[$card[SUIT_FIELD]] . '.png';
}

function show_draw_button()
{
     echo '<div id="info">' . "\n";
     echo '    <span id="draw_button">Draw</span>' . "\n";
     echo '</div>' . "\n";
}
function show_type($hand)
{
     $type = hand_type($hand);
     $payoffs = PAYOFFS;
     $payoff = $payoffs[$type];

     echo '<div id="info">' . "\n";
     echo '    <span id="hand_type">' . $type . '</span>' . "\n";
     echo '    <span id="payoff" style="color: ' . ($payoff > 0 ? "green" : "red") . '">Payoff: ' . $payoff . '</span>' . "\n";
     echo '</div>' . "\n";
}

function show_content($hand, $final=FALSE)
{
     echo '<div id="content">' . "\n";
     show_hand($hand);
     if ($final) {
          show_type($hand);
     } else {
          show_draw_button();
     }
     echo '</div>';
}

function output_form($hand, $deck)
{

     echo '<form method="POST" action="draw.php" id="draw_form">' . "\n";
//     echo '    <input type="hidden" name="' . HAND_KEY . '" value="' . urlencode(json_encode($hand)) . '">' . "\n";
//     echo '    <input type="hidden" name="' . DECK_KEY . '" value="' . urlencode(json_encode($deck)) . '">' . "\n";


     for ($card = 0; $card < HAND_CARDS; $card++) {
          echo '    <input type="hidden" name="' . CARD_KEY . $card . '" id="' . CARD_KEY . $card . '" value="' . KEEP . '">' . "\n";
     }
     echo '</form>';
}
function draw_cards(&$hand, &$deck)
{
     if (get_session_value(FINAL_KEY)) {
          return;
     }
     for ($card = 0; $card < HAND_CARDS; $card++) {
          $draw = $_POST[CARD_KEY . $card];
          if ($draw === DRAW) {
               $hand[$card] = $deck[0];
               $deck = array_slice($deck, 1);
          }
     }
//     $type = hand_type($hand);
//     $payoffs = PAYOFFS;
//     set_session_value(BALANCE_KEY, $payoffs[$type]);
     set_session_value(HAND_KEY, $hand);
     set_session_value(DECK_KEY, $deck);
     set_session_value(FINAL_KEY, TRUE);
}