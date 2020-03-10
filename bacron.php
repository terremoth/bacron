<?php

$exec = `/usr/games/wtf $argv[1]`;

$url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=pt&dt=t&q=".urlencode($exec);

$fetch = file_get_contents($url);
$json  = json_decode($fetch);
$translated = $json[0][0][0];

echo $translated.PHP_EOL;

