<?php
/**
 * Created by PhpStorm.
 * User: Nomad_Mystic
 * Date: 11/4/2015
 * Time: 1:11 AM
 */


$test_post = $_POST['name'];

echo $test_post;
?>
<?php
$query = "my=apples&are=green+and+red";

foreach (explode('&', $query) as $chunk) {
     $param = explode("=", $chunk);

     if ($param) {
          printf("Value for parameter \"%s\" is \"%s\"<br/>\n", urldecode($param[0]), urldecode($param[1]));
     }
}
?>
<?php
$str = "<p>this -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);

// note that here the quotes aren't converted
echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>
