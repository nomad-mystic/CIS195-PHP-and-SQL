<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 10/21/2015
 * Time: 11:22 PM
 */


define('SCORE', 'score');
define('TYPE', 'type');
define('LETTER_GRADE', 'letter');
define('PASS_FAIL', 'pf');
define('AUDIT', 'audit');
function validate_score() {

     $score = $_GET[SCORE];

     if(!isset($_GET[SCORE])) {
          echo '<h1>' . ' WE NEED A SCORE ' . '</h1>';
          exit;
     }
     if(!is_numeric($score)) {
          echo '<h1>' . 'THIS IS NOT A NUMBER' . '</h1>';
          exit;
     }

     return $score;
}
function validate_type() {
     $type = $_GET[TYPE];
     switch ($type) {
          case LETTER_GRADE:
          case PASS_FAIL:
          case AUDIT:
               break;
          default:
               echo '<h1>' . 'THE GRADE MUST BE "letter" OT "pf"' . '</h1>';
               exit;
     }
     if(!isset($_GET[TYPE])) {
          echo '<h1>' . ' WE NEED A GRADE TYPE ' . '</h1>';
          exit;
     }
     return $type;
}

function grading($type, $score) {
     switch ($type) {
          case LETTER_GRADE:
               output_letter_grade($score);
               break;

          case PASS_FAIL:
               output_pass_fail($score);
               break;

          case AUDIT:
               output_audit();
               break;

          default:
               output_unknown_type($type);
               break;
     }
}

function output_pass_fail($score) {
     if($score >= 75) {
          echo '<h1>' . 'YOU PASSED THE CLASS' . '</h1>';
     } else  {
          echo '<h1>' . "YOU DON'T PASS THE CLASS" . '</h1>';
     }
}

function output_audit() {
     echo '<h1>' . "YOU ARE AUDITING THIS CLASS" . '</h1>';
}

function output_unknown_type($type) {
     echo '<h1>' . "DEFAULT" . $type . '</h1>';
}


function output_letter_grade($score) {
     if($score >= 90) {
          $grade = 'A';

     } else if($score >= 80){
          $grade = 'B';

     } else if($score >= 70) {
          $grade = 'C';

     } else if($score >= 60) {
          $grade = 'D';

     } else {
          $grade = 'F';
     }
          echo '<h1>' . "Students grade is $grade" . '</h1>';
}


function main() {
     $type = validate_type();
     validate_type($type);
     validate_score();
     $score = validate_score();
     grading($type, $score);
}
main();








