<?php

require_once('Texi.php');
// or require_once('vendor/autoload.php');

$r = texi_send('https://texionline.com', '', '09225112233', 'Hello, world!');
print_r($r);
