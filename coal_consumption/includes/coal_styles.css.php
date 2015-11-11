<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/10/2015
 * Time: 4:34 PM
 */
require_once('constants.php');
header('Content-Type: text/css');
 ?>



/* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
     margin: 0;
     padding: 0;
     border: 0;
     font-size: 100%;
     font: inherit;
     vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
     display: block;
}
body {
     line-height: 1;
}
ol, ul {
     list-style: none;
}
blockquote, q {
     quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
     content: '';
     content: none;
}
table {
     border-collapse: collapse;
     border-spacing: 0;
}
/*---------------------------------END RESET----*/

/*-------MY STYLES-----*/
body {
     max-width: 100%;
     padding: 0;
     background: aqua;
}
/* main.php----*/
.float {
     float: <?php echo FLOAT_DIRECTION; ?>;
     width: <?php echo FLOAT_WIDTH;?>%;
     padding: 0;
     margin: 2% 2%;
}
body > div:nth-child(1) {
     background: #fff;
     border: <?php echo BORDER; ?>;
     border-radius: <?php echo BORDER_RADIUS; ?>;

}
body > div:nth-child(1) h1 {
     font-size: 3em;
     padding: <?php echo TEXT_PADDING; ?>%;
}
body > div:nth-child(1) h3 {
     padding: <?php echo TEXT_PADDING; ?>%;
     font-size: <?php echo BASE_FONT_SIZE; ?>;
     line-height: 1.25em;
}
body > div:nth-child(1) h4 {
     padding: <?php echo TEXT_PADDING; ?>%;
     font-size: <?php echo BASE_FONT_SIZE; ?>;
}
body > div:nth-child(2) img {
     width: 100%;
     background: <?php echo WHITE_BACKGROUND; ?>;
     padding: 2%;
     border-radius: <?php echo BORDER_RADIUS; ?>;
}
form {
     margin: 5% 0 2% 10%;
}
input[type="text"] {
     font-size: <?php echo BASE_FONT_SIZE; ?>;
     border-radius: 4px;
     border: <?php echo BORDER; ?>;
}
input[type="submit"] {
     font-size: <?php echo BASE_FONT_SIZE; ?>;
}
/*country_consumption.php----*/
.chosen_country {
     font-size: 3em;
     text-align: center;
     margin: 2% auto;
     width: 50%;
     background: #fff;
     border-radius: <?php echo BORDER_RADIUS; ?>;
     border: <?php echo BORDER; ?>;
     padding: <?php echo TEXT_PADDING; ?>%;

}
#canvas {
     background: <?php echo WHITE_BACKGROUND; ?>;
     margin: 2% auto;
     display: block;
     padding: 1%;
     border-radius: <?php echo BORDER_RADIUS; ?>;
     border: <?php echo BORDER; ?>;
}


























