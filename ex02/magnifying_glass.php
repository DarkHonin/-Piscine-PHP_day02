<?php

$dom = new DOMDocument();
$dom->loadHTMLFile($argv[1]);

function itter($dom)
{
    foreach($dom->childNodes as $c)
    {
        print_r($c);
        itter($c);
    }
}

itter($dom);

?>