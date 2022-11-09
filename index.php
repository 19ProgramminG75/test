<a href="<?php base() ?>api">API</a>
<a href="<?php base() ?>profile">Profile</a>

<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

function base(){

    echo str_replace("index.php","", $_SERVER['PHP_SELF']);

}

$URL = explode("/", $_SERVER['QUERY_STRING'].".php");

$error = "404.php";


if (file_exists($URL[0])) {

    require_once($URL[0]);

} else {

    require_once($error);
    // require_once("404");

}

