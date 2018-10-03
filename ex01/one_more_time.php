<?php

$str = str_replace("\t", " ", $argv[1]);

$qqq = strtotime($str);
if (empty($qqq))
    die("Wrong Format");
echo $qqq;

?>