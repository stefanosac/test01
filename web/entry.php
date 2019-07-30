<?php
require_once "autoload.php";


use App01\Rootto; // as Rootto;

echo 'io sono entry.php su porta ' . $_SERVER['SERVER_PORT'];

$rot = new Rootto();
echo $rot->getId();
?>
