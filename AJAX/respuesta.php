<?php

$numero = $_REQUEST['numero'];
$ban = 0;

if ($numero > 40) {
    $ban = 1;
}

echo $ban;

?>