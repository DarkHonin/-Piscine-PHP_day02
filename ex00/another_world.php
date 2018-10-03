<?php

$str = str_replace("\t", " ", $argv[1]);

$parts = explode(" ", $str);
$res = [];
foreach($parts as $p)
{
    if (!empty($p))
        array_push($res, trim($p));
}
echo (implode(' ', $res));
echo "\n";
?>