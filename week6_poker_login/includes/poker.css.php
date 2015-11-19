<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/4/2015
 * Time: 1:32 AM
 */

 header('Content-Type: text/css');
 require_once('poker_constants.php');

 ?>

.card_image {
     max-width: <?php echo CARD_IMAGE_PERCENT?>;
     max-height: <?php echo CARD_IMAGE_PERCENT?>;
     cursor: pointer;
}

.card {
     text-align: center;
     display: inline-block;
     max-width: <?php echo 100 / HAND_CARDS; ?>%;
     max-height: 100%;
}

#hand {
     font-size: 0;
     padding: <?php echo HAND_PADDING; ?>
}

#info {
     text-align: center;
     padding: <?php echo HAND_PADDING; ?>;
     margin: 5% auto 0;
}

#draw_button {
     background: red;
     color: white;
<?php echo POKER_FONT; ?>
     border-radius: 1em;
     cursor: pointer;
}

#hand_type {
<?php echo POKER_FONT; ?>
}

#payoff {
<?php echo POKER_FONT; ?>
}

#user_pane {
     text-align: right;
}
#content {
     visibility: hidden;
}


