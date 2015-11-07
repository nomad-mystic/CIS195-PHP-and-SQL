<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/5/2015
 * Time: 1:19 PM
 */


function output_form($method, $action) {
     echo "<form method='{$method}' action='{$action}'>\n";
     echo "    <input type='text' name'" . USER_INPUT_KEY . "'>\n";
     echo "    <input type='submit' value'Submit'>\n";
     echo '</form>';
}
